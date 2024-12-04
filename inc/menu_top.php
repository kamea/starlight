<header class="sticky top-0 z-[1000]">
  <div class="relative z-[1000] bg-white dark:bg-contrast-900">
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
                <a href="#" class="btn">
                  Télécharger
                </a>
              <button id="themeToggle" class="text-xl px-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary-500 dark:rotate-180 transition-all duration-700 dark:text-white/80" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M194.82,151.43l-55.09,20.3-20.3,55.09a7.92,7.92,0,0,1-14.86,0l-20.3-55.09-55.09-20.3a7.92,7.92,0,0,1,0-14.86l55.09-20.3,20.3-55.09a7.92,7.92,0,0,1,14.86,0l20.3,55.09,55.09,20.3A7.92,7.92,0,0,1,194.82,151.43Z" opacity="0.2"></path>
                  <path d="M197.58,129.06,146,110l-19-51.62a15.92,15.92,0,0,0-29.88,0L78,110l-51.62,19a15.92,15.92,0,0,0,0,29.88L78,178l19,51.62a15.92,15.92,0,0,0,29.88,0L146,178l51.62-19a15.92,15.92,0,0,0,0-29.88ZM137,164.22a8,8,0,0,0-4.74,4.74L112,223.85,91.78,169A8,8,0,0,0,87,164.22L32.15,144,87,123.78A8,8,0,0,0,91.78,119L112,64.15,132.22,119a8,8,0,0,0,4.74,4.74L191.85,144ZM144,40a8,8,0,0,1,8-8h16V16a8,8,0,0,1,16,0V32h16a8,8,0,0,1,0,16H184V64a8,8,0,0,1-16,0V48H152A8,8,0,0,1,144,40ZM248,88a8,8,0,0,1-8,8h-8v8a8,8,0,0,1-16,0V96h-8a8,8,0,0,1,0-16h8V72a8,8,0,0,1,16,0v8h8A8,8,0,0,1,248,88Z"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>