<?php $alternative = $data["alternative"]; ?>
<?php require_once __DIR__ . "/../header.php"; ?>
<div class="w-full max-w-5xl mx-auto pt-32 space-y-6">
  <div class="flex justify-between items-center">
    <h1 class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900">Data Alternatif</h1>
    <a href="/perhitungan/alternatif/tambah" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah alternatif</a>
  </div>
  <div class="rounded-xl overflow-hidden">
    <table class="w-full table-auto divide-y divide-gray-200">
      <thead class="bg-slate-100">
        <tr class="bg-slate-900">
          <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100">Nama alternaif</th>
          <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100">Biaya</th>
          <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100">Durasi</th>
          <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100">Mata Air</th>
          <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100">Rating</th>
          <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100"></th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        <?php if ($alternative): ?>
          <?php while ($alt = mysqli_fetch_assoc($alternative)): ?>
            <tr>
              <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $alt["nama_alternatif"] ?></td>
              <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $alt["biaya"] ?></td>
              <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $alt["durasi"] ?></td>
              <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $alt["mata_air"] ?></td>
              <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $alt["rating"] ?></td>
              <td>
                <a href="/perhitungan/alternatif/ubah?id=<?= $alt["id_alternatif"] ?>" class="py-4 px-2 text-violet-600 hover:underline cursor-pointer">Edit</a>
                <a href="/perhitungan/alternatif/hapus?id=<?= $alt["id_alternatif"] ?>" class="py-4 px-2 text-red-600 hover:underline cursor-pointer">Hapus</a>
              </td>
            </tr>
          <?php endwhile ?>
        <?php else: ?>
          <tr>
            <th class="px-6 py-4 text-sm text-gray-900" colspan="5">Belum ada alternatif</th>
          </tr>
        <?php endif ?>
      </tbody>
    </table>
  </div>
</div>