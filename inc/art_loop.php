<?php while ($plxShow->plxMotor->plxRecord_arts->loop()) :  ?>
  <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg bg-white dark:bg-contrast-900">
    <a aria-label="<?php $plxShow->artTitle() ?>" href="<?php $plxShow->artUrl() ?>">
      <?php
      // Affiche une miniature si elle existe, sinon un dégradé - #Kamea
      if ($plxShow->plxMotor->plxRecord_arts->f('thumbnail')) {
        $plxShow->artThumbnail(
          '<img class="my-img_art_loop" src="#img_thumb_url" alt="#img_alt" title="#img_title">',
          true
        );
      } else {
        echo '<div class="no-img_art_loop"></div>';
      } ?>
    </a>
    <div class="p-6 space-y-6 flex grow flex-col">
      <div class="flex items-center justify-between mylink">
        <div><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" viewBox="0 0 256 256" fill="CurrentColor">
            <path d="M216,48V88H40V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z" opacity="0.2"></path>
            <path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-68-76a12,12,0,1,1-12-12A12,12,0,0,1,140,132Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,132ZM96,172a12,12,0,1,1-12-12A12,12,0,0,1,96,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,140,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,172Z"></path>
          </svg>
          <dl class="inline align-middle">
            <dt class="sr-only">Publié le</dt>
            <dd class="inline">
            <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
            <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time></dd>
          </dl>
        </div>
        <p class="inline align-middle">
          <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6" fill="currentColor" viewBox="0 0 256 256">
            <path d="M231.76,216.34a6,6,0,0,1-7.42,7.42l-29.87-8.53A72.05,72.05,0,0,1,92.06,175.89h0c1.3.07,2.61.11,3.93.11a72,72,0,0,0,67.93-95.88h0a72,72,0,0,1,59.29,106.36Z" opacity="0.2"></path>
            <path d="M231.79,187.33A80,80,0,0,0,169.57,72.59,80,80,0,1,0,24.21,139.33l-7.66,26.82a14,14,0,0,0,17.3,17.3l26.82-7.66a80.15,80.15,0,0,0,25.75,7.63,80,80,0,0,0,108.91,40.37l26.82,7.66a14,14,0,0,0,17.3-17.3ZM61.53,159.23a8.22,8.22,0,0,0-2.2.3l-26.41,7.55,7.55-26.41a8,8,0,0,0-.68-6,63.95,63.95,0,1,1,25.57,25.57A7.94,7.94,0,0,0,61.53,159.23Zm154,29.44,7.55,26.41-26.41-7.55a8,8,0,0,0-6,.68,64.06,64.06,0,0,1-86.32-24.64A79.93,79.93,0,0,0,174.7,89.71a64,64,0,0,1,41.51,92.93A8,8,0,0,0,215.53,188.67Z"></path>
          </svg>
          <span class="inline font-bold ml-1">
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
      <div class="text-base">
        <div class="flex items-center gap-x-2 mylink">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 256 256" fill="CurrentColor">
            <path d="M224,56V176c-64,55.43-112-55.43-176,0V56C112,.57,160,111.43,224,56Z" opacity="0.2"></path>
            <path d="M42.76,50A8,8,0,0,0,40,56V224a8,8,0,0,0,16,0V179.77c26.79-21.16,49.87-9.75,76.45,3.41,16.4,8.11,34.06,16.85,53,16.85,13.93,0,28.54-4.75,43.82-18a8,8,0,0,0,2.76-6V56A8,8,0,0,0,218.76,50c-28,24.23-51.72,12.49-79.21-1.12C111.07,34.76,78.78,18.79,42.76,50ZM216,172.25c-26.79,21.16-49.87,9.74-76.45-3.41-25-12.35-52.81-26.13-83.55-8.4V59.79c26.79-21.16,49.87-9.75,76.45,3.4,25,12.35,52.82,26.13,83.55,8.4Z"></path>
          </svg><?php $plxShow->artCat(' | ') ?>
        </div>
        <div class="flex items-center gap-x-1 mylink">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 256 256" fill="CurrentColor">
            <path d="M237.66,153,153,237.66a8,8,0,0,1-11.31,0L42.34,138.34A8,8,0,0,1,40,132.69V40h92.69a8,8,0,0,1,5.65,2.34l99.32,99.32A8,8,0,0,1,237.66,153Z" opacity="0.2"></path>
            <path d="M243.31,136,144,36.69A15.86,15.86,0,0,0,132.69,32H40a8,8,0,0,0-8,8v92.69A15.86,15.86,0,0,0,36.69,144L136,243.31a16,16,0,0,0,22.63,0l84.68-84.68a16,16,0,0,0,0-22.63Zm-96,96L48,132.69V48h84.69L232,147.31ZM96,84A12,12,0,1,1,84,72,12,12,0,0,1,96,84Z"></path>
          </svg><?php $plxShow->artTags('<a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a>', ',') ?>
        </div>
      </div>
    </div>
  </article>


<?php endwhile; ?>