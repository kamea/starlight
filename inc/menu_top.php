<header class="sticky top-0 z-[1000]">
  <div class="relative z-[1000] bg-white dark:bg-slate-900">
  <div id="progressBar"></div>
  <div class="px-6 lg:container md:px-12 lg:mx-auto lg:px-6 lg:py-4">
      <div class="flex items-center justify-between">
        <div class="z-[1000] flex items-center text-lg">
          <span class="avatar">
            <?= substr($plxShow->plxMotor->aConf['title'], 0, 1); ?>
          </span>
          <div class="ml-3 block min-w-max">
            <p class="text-2xl leading-none"><?php $plxShow->mainTitle(); ?></p>
            <p class="leading-none text-primary-500">
              <?php $plxShow->subTitle(); ?>
            </p>
          </div>
        </div>
        <div class="flex items-center justify-end">
          <input type="checkbox" name="hamburger" id="hamburger" class="peer" hidden>
          <label for="hamburger" class="peer-checked:hamburger relative z-[1000] block cursor-pointer p-6 lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-primary-500 w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
            </svg>
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

              <button id="themeToggle" class="text-xl px-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary-500 dark:rotate-180 transition-all duration-500" stroke "0.5" fill="currentColor" viewBox="0 0 256 256"><path d="M224,128a96,96,0,0,1-96,96,48,48,0,0,1,0-96,48,48,0,0,0,0-96A96,96,0,0,1,224,128Z" opacity="0.2"></path><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM40,128a88.1,88.1,0,0,1,88-88,40,40,0,0,1,0,80A56,56,0,0,0,77.39,200,88,88,0,0,1,40,128Zm88,88a40,40,0,0,1,0-80,56,56,0,0,0,50.61-79.95A88,88,0,0,1,128,216Zm12-40a12,12,0,1,1-12-12A12,12,0,0,1,140,176ZM116,80a12,12,0,1,1,12,12A12,12,0,0,1,116,80Z"></path></svg>
    </button>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>