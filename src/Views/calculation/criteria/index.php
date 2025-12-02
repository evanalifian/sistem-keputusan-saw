<?php

$criteria = $data["criteria"];
$biaya = $data["biaya"];
$durasi = $data["durasi"];
$mata_air = $data["mata_air"];
$popularitas = $data["popularitas"];

?>
<?php require_once __DIR__ . "/../header.php"; ?>
<div class="w-full max-w-5xl mx-auto pt-32">
  <div class="px-4 py-10 space-y-24 sm:px-6 lg:px-8">
    <?php require_once __DIR__ . "/criteria_table.php" ?>
    <hr class="border-gray-300">
    <div class="space-y-10">
      <h1 class="text-2xl font-semibold tracking-tight text-pretty text-gray-900">Parameter</h1>
      <?php require_once __DIR__ . "/biaya_table.php" ?>
      <?php require_once __DIR__ . "/durasi_table.php" ?>
      <?php require_once __DIR__ . "/mata_air_table.php" ?>
      <?php require_once __DIR__ . "/popularitas_table.php" ?>
    </div>
  </div>
</div>