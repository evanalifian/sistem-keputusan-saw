<div class="flex items-center justify-between mb-6">
  <div>
    <h1 class="text-xl font-semibold text-gray-900">Biaya</h1>
    <p class="text-sm text-gray-600">Tabel parameter biaya untuk nilai kriteria.</p>
  </div>
</div>
<div class="overflow-x-auto bg-white shadow rounded-xl">
  <table class="min-w-full divide-y divide-gray-200 hidden md:table">
    <thead>
      <tr>
        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Range Bawah</th>
        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Range Atas</th>
        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Nilai</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100">
      <?php while ($b = mysqli_fetch_assoc($biaya)): ?>
        <tr>
          <td class="px-6 py-4 text-center text-sm text-gray-900">Rp. <?= $b["range_bawah"] ?></td>
          <td class="px-6 py-4 text-center text-sm text-gray-900">Rp. <?= $b["range_atas"] ?></td>
          <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $b["nilai"] ?></td>
        </tr>
      <?php endwhile ?>
    </tbody>
  </table>
</div>