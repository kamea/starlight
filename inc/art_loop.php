<?php while ($plxShow->plxMotor->plxRecord_arts->loop()) :  ?>
  <article class="mb-0 overflow-hidden bg-white rounded shadow dark:bg-slate-900">
    <div class="relative overflow-hidden h-64">
    <a href="<?php $plxShow->artUrl() ?>">
    <?php
    // Méthode qui qui examine la présence d'une image associée à un article et l'affiche s'il y en a une, sinon elle affiche un dégradé à la place.
    // Par William K. (Kamea)
    // Vérifie si l'article a une miniature
    $check_Thumb = ($plxShow->plxMotor->plxRecord_arts->f('thumbnail'));
    // Si une miniature existe
    if ($check_Thumb) {
        // Utilise la méthode artThumbnail pour afficher l'image miniature avec des propriétés CSS
        $plxShow->artThumbnail("<img class='object-cover w-full h-full hover:scale-110 transition-all duration-1000' src='#img_thumb_url' alt='#img_alt' title='#img_title' />", true);
    } else {
        // Si aucune miniature n'existe, affiche une div avec un dégradé en arrière-plan
        echo '<div class="no-img_art_loop"></div>';
    }
    ?>
</a>
    </div>
    <div class="relative z-20 p-8 -mt-12">
      <div class="flex items-center justify-center">
        <div class="flex flex-col items-center ml-4">
          <div class="px-3 py-1 text-white bg-slate-800 dark:bg-slate-950 rounded mylink_invert">
            <?php $plxShow->artCat(' | ') ?>
          </div>
          <div class="infos_art_loop mylink">
            <?php $plxShow->artAuthor(); ?> | <?php $plxShow->artDate('#num_day #month #num_year(2)'); ?>
          </div>
        </div>
      </div>
      <h2 class="my-3 text-2xl font-bold  text-primary-800 dark:text-white">
        <?php $plxShow->artTitle(); ?>
      </h2>
      <p class="plx_content leading-7">
        <?php $plxShow->artChapo($plxShow->getLang('READING_ART'), true) ?>
      </p>
      <p class="pt-4 mylink leading-7">
        Tags : <?php $plxShow->artTags('<a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a>', ',') ?>
      </p>
    </div>
  </article>
<?php endwhile; ?>