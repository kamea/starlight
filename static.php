<?php include 'header.php' ?>
<main>
  <div class="relative py-12 lg:py-24">
    <div class="mx-auto max-w-5xl px-2 md:px-0">
      <article class="mx-auto max-w-5xl" id="static-page-<?php echo $plxShow->staticId(); ?>">
        <div class="text-center">
          <h1 class="pb-3 font-bold"><?php $plxShow->staticTitle(); ?></h1>
          <p class="flex items-center justify-center">
            <?php
            if (isset($plxShow->plxMotor->aStats[$plxShow->plxMotor->cible]['date_update'])) {
              $plxShow->lang('UPDATE_DATE');
              $plxShow->staticUpdateDate('#day #num_day #month #num_year(2)');
            }
            ?>
          </p>
        </div>
        <div class="max-w-7xl mx-auto py-8 md:py-16 plx_content">
          <?php $plxShow->staticContent(); ?>
        </div>
      </article>
    </div>
  </div>
</main>
<?php include 'footer.php' ?>