<div class="flex items-center justify-between mb-6">
  <div>
    <h1 class="text-xl font-semibold text-gray-900">Mata Air</h1>
    <p class="text-sm text-gray-600">Tabel parameter mata air untuk nilai kriteria.</p>
  </div>
</div>
<div class="overflow-x-auto bg-white shadow rounded-xl">
  <table class="min-w-full divide-y divide-gray-200 hidden md:table">
    <thead>
      <tr>
        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Kondisi</th>
        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Nilai</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100">
      <?php while ($ma = mysqli_fetch_assoc($mata_air)): ?>
          <tr>
            <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $ma["kondisi"] ?></td>
            <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $ma["nilai"] ?></td>
          </tr>
      <?php endwhile ?>
    </tbody>
  </table>
</div>