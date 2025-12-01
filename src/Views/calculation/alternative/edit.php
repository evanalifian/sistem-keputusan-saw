<?php $alternative = $data["alternative"] ?>
<?php require_once __DIR__ . "/../header.php"; ?>
<div class="w-full max-w-3xl mx-auto pt-32 space-y-6">
  <?php while ($alt = mysqli_fetch_assoc($alternative)): ?>
  <form action="/perhitungan/alternatif/ubah?id=<?= $alt["id_alternatif"] ?>" method="post">
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Tambah alternatif</h2>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-2 sm:col-start-1">
            <label for="alternative" class="block text-sm/6 font-medium text-gray-900">Alternatif</label>
            <div class="mt-2">
              <input id="alternative" type="text" name="alternative" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" value="<?= $alt["nama_alternatif"] ?>" />
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="biaya" class="block text-sm/6 font-medium text-gray-900">Biaya</label>
            <div class="mt-2">
              <input id="biaya" type="number" name="biaya" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" value="<?= $alt["biaya"] ?>" />
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="durasi" class="block text-sm/6 font-medium text-gray-900">Durasi Pendakian</label>
            <div class="mt-2">
              <input id="durasi" type="number" name="durasi" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" value="<?= $alt["durasi"] ?>" />
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="rating" class="block text-sm/6 font-medium text-gray-900">Rating (1 - 5)</label>
            <div class="mt-2">
              <input id="rating" type="text" name="rating" autocomplete="rating" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" value="<?= $alt["rating"] ?>" />
            </div>
          </div>
        </div>
      </div>
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 space-y-10">
          <fieldset>
            <legend class="text-sm/6 font-semibold text-gray-900">Sumber mata air</legend>
            <div class="mt-6 space-y-6">
              <div class="flex items-center gap-x-3">
                <input id="ada" type="radio" name="mata_air" value="Ada" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden" <?= strtolower($alt["mata_air"]) == "ada" ? "checked" : null ?> />
                <label for="ada" class="block text-sm/6 font-medium text-gray-900">Ada</label>
              </div>
              <div class="flex items-center gap-x-3">
                <input id="tidak_ada" type="radio" name="mata_air" value="Tidak Ada" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden" <?= strtolower($alt["mata_air"]) == "tidak ada" ? "checked" : null ?> />
                <label for="tidak_ada" class="block text-sm/6 font-medium text-gray-900">Tidak Ada</label>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="reset" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <button type="submit"
        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>
  <?php endwhile ?>
</div>