<?php include(dirname(__FILE__) . '/header.php'); ?>

<div class="relative max-w-7xl mx-auto py-12 md:py-24">
  <div class="text-center pb-24 mylink">
    <h1 class="font-bold pb-4"><?php $plxShow->artTitle(); ?></h1>
    <?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?><span class="mx-2">|</span>
    <?php $plxShow->artCat(' • ') ?>
    <p class="text-italic">
      Dernière mise à jour : <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
        <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
      </time>
    </p>
  </div>
  <div class="grid xl:grid-cols-3 gap-8">
    <article class="xl:col-span-2 px-2 xl:px-0 mylink">
      <?php
      if ($plxShow->plxMotor->plxRecord_arts->f('thumbnail')) {
        $plxShow->artThumbnail('<div class="mx-auto"><img class="mx-auto rounded art_thumbnail" src="#img_url" alt="#img_alt" title="#img_title"></div>', true);
      }
      ?> <div class="mx-auto plx_content">
        <?php $plxShow->artContent(); ?>
      </div>
      <?php $plxShow->artAuthorInfos('<div class="mx-auto py-8">#art_authorinfos</div>'); ?>
      <hr class="hr">
      <div class="mx-auto py-8">
        <div class="text-3xl pb-16 text-primary-600 text-center"><?php $plxShow->lang('ART_SAME_CAT'); ?></div>
        <div class="grid gap-8">
          <?php
          $quellesCategories = $plxShow->plxMotor->plxRecord_arts->f('categorie');
          $quelleCategorie = explode(',', $quellesCategories)[0];
          $plxShow->lastArtList(
            '<div class="art_same_cat">
              <a href="#art_url" class="group img_lastArt_Wrap">
                <img src="#img_url" onerror="omg_No_Thumb(this)" class="archive_thumb" alt="" title="" >
              </a>
              <div class="content_lastArt">
                <h2 class="text-xl font-semibold mylink">#art_title</h2>
                <div>#art_date</div>
                <div>#art_chapo(120)...</div>
                <div>
                  <a href="#art_url">Lire l\'article</a>
                </div>
              </div>
            </div>
            ',
            2,
            $quelleCategorie,
            '',
            'random'
          ); ?>
          <script>
            function omg_No_Thumb(imgElement) {
              imgElement.style.display = 'none'; // Masquer l'image en cas d'erreur
              // ou alors imgElement.src = 'rep/vers/image_de_remplacement.jpg';
            }
          </script>
        </div>
      </div>
      <hr class="hr">
      <?php include(dirname(__FILE__) . '/commentaires.php'); ?>
    </article>
    <div class="xl:col-span-1">
      <?php include(dirname(__FILE__) . '/sidebar.php'); ?>
    </div>
  </div>
</div>
<?php include(dirname(__FILE__) . '/footer.php'); ?>