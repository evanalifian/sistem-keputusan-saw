<div class="rounded-xl overflow-hidden">
  <table class="w-full table-auto divide-y divide-gray-200">
    <thead class="bg-slate-100">
      <tr class="bg-slate-900">
        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100" colspan="5">Normalisasi</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100">
      <?php $counter = 1; ?>
      <?php foreach ($normalization as $data): ?>
          <tr>
            <th class="px-6 py-4 text-sm text-gray-900">A<?= $counter ?></th>
            <?php foreach ($data as $d): ?>
                <td class="px-6 py-4 text-center text-sm text-gray-900"><?= $d ?></td>
            <?php endforeach ?>
          </tr>
          <?php $counter++; ?>
      <?php endforeach ?>
    </tbody>
  </table>
</div>  