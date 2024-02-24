<?php include(dirname(__FILE__) . '/header.php'); ?>

<div class="relative pt-12 md:pt-24 w-full text-center px-2 xl:px-0">
  <p class="text-5xl"><?php $plxShow->lang('ARCHIVES'); ?></p>
  <p class="text-xl"><?= plxDate::formatDate($plxShow->plxMotor->cible, '#month #num_year(4)') ?></p>


  <div class="max-w-7xl mx-auto py-24">
    <div class="mx-auto px-2 xl:px-0">
      <div class="grid sm:grid-cols-2 gap-8">
        <?php while ($plxShow->plxMotor->plxRecord_arts->loop()) : ?>
          <div class="archive_wrap">
            <a href="<?= $plxShow->artUrl() ?>" class="group relative archive_block_img">
              <?php if ($plxShow->plxMotor->plxRecord_arts->f('thumbnail')) : ?>
                <img src="<?= $plxShow->artThumbnail('#img_thumb_url'); ?>" class="archive_thumb" alt="img_alt" title="img_title">
              <?php else : ?>
                <div class="archive_no_thumb"></div>
              <?php endif; ?>
            </a>
            <div class="archive_content">
              <h2 class="text-xl font-semibold mylink"><?php $plxShow->artTitle('link'); ?></h2>
              <time class="text-sm text-slate-500" datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
                <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
              </time>
              <div class="text-slate-500">
                <span class="mylink"><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?></span>
                <span class="mylink"> | <?php $plxShow->artNbCom(); ?></span>
              </div>
              <div class="text-slate-500"><span class="mylink"><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?></span></div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>


      <nav class="pagination text-center pt-16">
        <?php $plxShow->pagination(); ?>
      </nav>

    </div>
  </div>
</div>

<?php include(dirname(__FILE__) . '/footer.php'); ?>