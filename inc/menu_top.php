<header class="sticky top-0 z-[1000]">
  <div class="relative z-[1000] bg-white dark:bg-slate-900">
    <div class="px-6 lg:container md:px-12 lg:mx-auto lg:px-6 lg:py-4">
      <div class="flex items-center justify-between">
        <div class="z-[1000] flex items-center text-lg">
          <p class="avatar">
            <?= substr($plxShow->plxMotor->aConf['title'], 0, 1); ?>
          </p>
          <div class="ml-3 block min-w-max">
            <p class="text-2xl leading-none"><?php $plxShow->mainTitle(); ?></p>
            <p class="leading-none text-primary-500">
              <?php $plxShow->subTitle(); ?>
            </p>
          </div>
        </div>
        <div class="flex items-center justify-end">
          <input type="checkbox" name="hamburger" id="hamburger" class="peer" hidden />
          <label for="hamburger" class="peer-checked:hamburger relative z-[1000] -mr-6 block cursor-pointer p-6 lg:hidden">
            <div aria-hidden="true" class="m-auto h-0.5 w-8 rounded bg-primary-500 transition duration-300"></div>
            <div aria-hidden="true" class="m-auto mt-2 h-0.5 w-8 rounded bg-primary-500 transition duration-300"></div>
          </label>
          <div class="wrap-menu-top">
            <div class="flex h-full flex-col justify-between lg:flex-row lg:items-center">
              <ul class="space-y-4 px-6 pt-24 md:px-6 lg:flex lg:space-x-6 lg:space-y-0 lg:pt-0">
                <?php $plxShow->staticList($plxShow->getLang('HOME'), '
                <li class="menu-top">
                  <a href="#static_url" title="#static_name">#static_name</a>
                </li>
                '); ?> <?php $plxShow->pageBlog('
                <li class="menu-top">
                  <a class="#page_status menu_top_link" href="#page_url" title="#page_name">#page_name</a>
                </li>
                ') ?>
              </ul>
              <div class="px-6 py-8 md:px-12 md:py-16 lg:py-0 lg:pl-6 lg:pr-0">
                <a href="#" class="block rounded-lg bg-primary-500 px-6 py-3 text-center text-white hover:bg-primary-600">
                  Télécharger
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>