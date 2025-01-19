<?php include 'header.php' ?>
<main>
  <div class="relative py-12 lg:py-24 text-center">
    <h1><?php $plxShow->lang('ARCHIVES'); ?></h1>
    <h2><?= plxDate::formatDate($plxShow->plxMotor->cible, '#month #num_year(4)') ?></h2>
    <div class="max-w-7xl mx-auto px-2 xl:px-0 pt-12">
        <div class="grid sm:grid-cols-2 gap-8">
          <?php while ($plxShow->plxMotor->plxRecord_arts->loop()) : ?>
            <div class="archive_wrap relative min-h-28">
              <a href="<?= $plxShow->artUrl() ?>" class="group relative archive_block_img">
                <?php if ($plxShow->plxMotor->plxRecord_arts->f('thumbnail')) : ?>
                  <img src="<?= $plxShow->artThumbnail('#img_thumb_url'); ?>" class="archive_thumb" alt="img_alt" title="img_title">
                <?php else : ?>
                  <div class="archive_no_thumb"></div>
                <?php endif; ?>
                <p class="archive_art-date"><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
                  <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
                </time></p>
              </a>
              <div class="archive_content mylink">
                <p class="text-lg font-semibold mylink"><?php $plxShow->artTitle('link'); ?></p>
              </div>
             
            </div>
          <?php endwhile; ?>
        </div>
        <nav class="pagination text-center pt-16">
          <?php $plxShow->pagination(); ?>
        </nav>
    
    </div>
  </div>
</main>
  <?php include 'footer.php' ?>