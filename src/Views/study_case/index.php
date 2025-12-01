<?php

$page_name = $data["page_name"];
$page_title = $data["page_title"];
$criteria = $data["criteria"];
$alternative = $data["alternative_data"];
$normalization = $data["normalization"];
$matrix_weight = $data["matrix_weight"];
$results= $data["results"];

?>
<main class="max-w-3xl mx-auto overflow-hidden px-6 py-16 space-y-12">
  <div class="space-y-4">
    <p class="text-sm text-blue-600 font-semibold"><?= $page_name ?></p>
    <h1 class="text-4xl font-bold tracking-tight"><?= $page_title ?></h1>
    <p class="text-gray-700 leading-relaxed">Jumlah pendaki gunung meningkat pesat karena pengaruh media sosial. Setiap gunung memiliki karakteristik dan tingkat kesulitan berbeda, sehingga calon pendaki harus memilih gunung yang sesuai dengan kebutuhan, biaya, waktu, dan kemampuan. Untuk membantu proses ini, dibutuhkan Sistem Pendukung Keputusan (SPK).</p>
  </div>
  <div class="space-y-6">
    <h2 class="text-2xl font-semibold">Menentukan kriteria dan bobot</h2>
    <p class="text-gray-700 leading-relaxed">Metode yang digunakan adalah SAW, yaitu metode pengambilan keputusan berdasarkan penjumlahan bobot dari nilai normalisasi setiap kriteria.</p>
    <ul class="pl-4 list-disc list-inside space-y-3 text-gray-700">
      <?php foreach ($criteria as $c): ?>
        <li><b><?= $c["criteria"] ?></b>: <?= $c["description"] ?> dengan bobot <?= $c["weight"] ?>.</li>
      <?php endforeach ?>
    </ul>
    <p>Selanjutnya, kita bisa membuat <b>tabel penentuan alternatif</b> dan <b>tabel nilai min dan max</b> dari tabel penentuan.</p>
    <?php require_once __DIR__ . "/alternative_table.php" ?>
  </div>
  <div class="space-y-6">
    <h2 class="text-2xl font-semibold">Tahapan Normalisasi</h2>
    <p class="text-gray-700 leading-relaxed">Setelah menentukan kriteria dan pembobotan, selanjutnya normalisasi matriks untuk menghitung nilai masing - masing kirteria yang akan digunakan, diantaranya ada kriteria <b><i>cost</i></b> dan <b><i>benefit</i>.</b></p>
    <div>
      <img src="/formulas/step1.jpg" alt="" width="100%">
      <p class="text-gray-700 leading-relaxed text-center">Mencari dengan nilai min</p>
    </div>
    <div>
      <img src="/formulas/step2.jpg" alt="" width="100%">
      <p class="text-gray-700 leading-relaxed text-center">Mencari dengan nilai max</p>
    </div>
    <?php require_once __DIR__ . "/matrix_normalization_table.php" ?>
    <p class="text-gray-700 leading-relaxed">Selanjutnya kita menentukan bobot dengan mengalikan bobot masing - masing kriteria dengan hasil matriks normalisasi.</p>
    <div>
      <img src="/formulas/step3.jpg" alt="" width="100%">
      <p class="text-gray-700 leading-relaxed text-center">Tahapan Menentukan Bobot</p>
    </div>
    <?php require_once __DIR__ . "/matrix_weight_table.php" ?>
    <p class="text-gray-700 leading-relaxed">Terakhir kita mendapatkan hasil akhirnya untuk melakukan perangkingan.</p>
    <?php require_once __DIR__ . "/results_table.php" ?>
  </div>
</main>