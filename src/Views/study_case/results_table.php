<div class="rounded-xl overflow-hidden">
  <table class="w-full table-auto divide-y divide-gray-200">
    <thead class="bg-slate-100">
      <tr class="bg-slate-900">
        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100">Hasil Akhir Alternatif</th>
        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100" colspan="2">Nilai</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100">
      <?php $counter = 1; ?>
      <?php foreach ($results as $data): ?>
        <tr>
          <th class="px-6 py-4 text-sm text-gray-900">A<?= $counter ?></th>
          <td class="px-6 py-4 text-sm text-gray-900"><?= $data ?></td>
        </tr>
        <?php $counter++; ?>
      <?php endforeach ?>
    </tbody>
  </table>
</div>