<div class="flex items-center justify-between mb-6">
  <div>
    <h1 class="text-xl font-semibold text-gray-900">Kriteria</h1>
    <p class="text-sm text-gray-600">Tabel kriteria untuk data alternatif.</p>
  </div>
</div>
<div class="overflow-x-auto bg-white shadow rounded-xl">
  <table class="min-w-full divide-y divide-gray-200 hidden md:table">
    <thead>
      <tr>
        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Kode Kriteria</th>
        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Kriteria</th>
        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Bobot Kriteria</th>
        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Tipe Kriteria </th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100">
      <?php while ($c = mysqli_fetch_assoc($criteria)): ?>
        <tr>
          <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $c["kode_kriteria"] ?></td>
          <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $c["kriteria"] ?></td>
          <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $c["bobot_kriteria"] ?></td>
          <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $c["tipe_kriteria"] ?></td>
        </tr>
      <?php endwhile ?>
    </tbody>
  </table>
</div>