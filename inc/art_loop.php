<?php while ($plxShow->plxMotor->plxRecord_arts->loop()) :  ?>
  <div class="mx-3 md:mx-0 group bg-white dark:bg-contrast-900 block flex flex-col">
    <a aria-label="" class="block h-48 w-full overflow-hidden md:h-64"
      href="<?php $plxShow->artUrl() ?>">
      <div class="relative overflow-hidden h-full w-full transition-transform group-hover:scale-105 duration-300 ease-out before:bg-primary-700">
        <div class="absolute left-0 top-0 z-10 hidden h-full w-[120%] origin-bottom skew-x-6 transform-gpu transition-transform duration-700"></div>
        <?php
        // Affiche une miniature si elle existe, sinon un dégradé - #Kamea
        if ($plxShow->plxMotor->plxRecord_arts->f('thumbnail')) {
          $plxShow->artThumbnail(
            '<img class=""src="#img_thumb_url" alt="#img_alt" title="#img_title">',
            true
          );
        } else {
          echo '<div class="no-img_art_loop"></div>';
        } ?>
      </div>
    </a>
    <div class="p-6 space-y-6 flex grow flex-col">
      <div class="flex items-center justify-between mylink">
        <div><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline text-contrast-400" viewBox="0 0 256 256" fill="CurrentColor">
            <path d="M216,48V88H40V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z" opacity="0.2"></path>
            <path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-68-76a12,12,0,1,1-12-12A12,12,0,0,1,140,132Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,132ZM96,172a12,12,0,1,1-12-12A12,12,0,0,1,96,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,140,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,172Z"></path>
          </svg>
          <dl class="inline align-middle text-contrast-400">
            <dt class="sr-only">Publié le</dt>
            <dd class="inline"><time datetime="<?php $plxShow->artDate('#num_day #month #num_year(2)'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(2)'); ?></time></dd>
          </dl>
        </div>
        <p class="inline align-middle">
          <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 text-contrast-400" fill="currentColor" viewBox="0 0 256 256">
            <path d="M231.76,216.34a6,6,0,0,1-7.42,7.42l-29.87-8.53A72.05,72.05,0,0,1,92.06,175.89h0c1.3.07,2.61.11,3.93.11a72,72,0,0,0,67.93-95.88h0a72,72,0,0,1,59.29,106.36Z" opacity="0.2"></path>
            <path d="M231.79,187.33A80,80,0,0,0,169.57,72.59,80,80,0,1,0,24.21,139.33l-7.66,26.82a14,14,0,0,0,17.3,17.3l26.82-7.66a80.15,80.15,0,0,0,25.75,7.63,80,80,0,0,0,108.91,40.37l26.82,7.66a14,14,0,0,0,17.3-17.3ZM61.53,159.23a8.22,8.22,0,0,0-2.2.3l-26.41,7.55,7.55-26.41a8,8,0,0,0-.68-6,63.95,63.95,0,1,1,25.57,25.57A7.94,7.94,0,0,0,61.53,159.23Zm154,29.44,7.55,26.41-26.41-7.55a8,8,0,0,0-6,.68,64.06,64.06,0,0,1-86.32-24.64A79.93,79.93,0,0,0,174.7,89.71a64,64,0,0,1,41.51,92.93A8,8,0,0,0,215.53,188.67Z"></path>
          </svg>
          <span class="inline font-bold ml-1 text-contrast-400">
            <?php $plxShow->artNbCom('#nb', '#nb', '#nb') ?>
          </span>
        </p>
      </div>

      <div class="flex grow flex-col">
        <a aria-label="" href="<?php $plxShow->artUrl() ?>">
          <h3 class="text-xl font-bold mb-2">
            <?php $plxShow->artTitle(); ?>
          </h3>
        </a>
        <div class="article-clamp">
          <?php $plxShow->artChapo(false); ?>
        </div>
      </div>
        <div class="text-sm">
          <div class="mylink leading-7">
            Tags : <?php $plxShow->artTags('<a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a>', ',') ?>
          </div>
          <div class="mylink">
            Catégories : <?php $plxShow->artCat(' | ') ?>
          </div>

        </div>
      </div>
    </div>


<?php endwhile; ?>