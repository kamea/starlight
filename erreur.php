<?php include dirname(__FILE__) . "/header.php"; ?>

<section class="px-2 pt-12 lg:px-0 lg:pt-24">
  <div class="relative z-10 mx-auto max-w-5xl rounded-lg bg-primary-500 py-24">
    <div class="-mx-4 flex">
      <div class="w-full px-4">
        <div class="mx-auto max-w-[400px] text-center">
          <h2 class="mb-2 text-7xl font-bold leading-none text-white sm:text-8xl md:text-[100px]">
            404
          </h2>
          <p class="mb-3 py-8 text-[22px] font-semibold leading-tight text-white">
            <?php $plxShow->lang("ERROR"); ?>
          </p>
          <a href="<?php $plxShow->racine(); ?>" class="inline-block rounded-lg bg-primary-800 px-6 py-3 text-center text-xl text-white hover:bg-primary-900">
            <?php $plxShow->Lang("HOME"); ?>
          </a>
        </div>
      </div>
    </div>
    <div class="absolute left-0 top-0 -z-10 flex h-full w-full items-center justify-between space-x-5 md:space-x-8 lg:space-x-14">
      <div class="mx-auto flex h-full w-1/2">
        <div class="h-full w-1/2 bg-gradient-to-b from-slate-100/10 to-slate-100/0"></div>
        <div class="h-full w-1/2 bg-gradient-to-t from-slate-100/10 to-slate-100/0"></div>
      </div>
    </div>
  </div>
</section>