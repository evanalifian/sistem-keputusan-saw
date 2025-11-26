<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
    <div class="max-w-xl">
      <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl">Anggota </h2>
      <p class="mt-6 text-lg/8 text-gray-600">Bertugas untuk membuat sebuah aplikasi web untuk melakukan keputusan dengan metode SAW (Simple Addtive Weighting).</p>
    </div>
    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
      <?php foreach ($data["member"] as $member): ?>
        <li>
          <div class="flex items-center gap-x-6">
            <img src="<?= $member["photo"] ? $member["photo"] : "https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" ?>" alt="<?= $member["name"] ?>" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
            <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900"><?= $member["name"] ?></h3>
            <p class="text-sm/6 font-semibold text-indigo-600"><?= $member["nim"] ?></p>
          </div>
        </div>
      </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>