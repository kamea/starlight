<?php include __DIR__ . '/header.php'; ?>
<!-- <?php include '/inc/bg-gradient_1.php'; ?> -->

<div class="relative py-12 lg:py-24">
  <div class="mx-auto max-w-5xl px-2 md:px-0">
    <main class="main">
      <article class="mx-auto max-w-5xl" id="static-page-<?php echo $plxShow->staticId(); ?>">
        <div class="text-center">
          <h1 class="pb-3 font-bold"><?php $plxShow->staticTitle(); ?></h1>
          <p class="flex items-center justify-center text-slate-500">
            <?php $plxShow->lang('UPDATE_DATE'); ?> <?php $plxShow->staticUpdateDate('#day #num_day #month #num_year(2)') ?>
          </p>
          <?php
          $id_stat = $plxShow->staticId();
          ob_start();
          $plxShow->staticInclude($id_stat);
          $output = ob_get_clean();
          $data_static = strip_tags($output, '<br><ul><li>');
          $data_static = preg_replace("#<br[^>]?>#", "\n", $data_static);
          $data_static = preg_replace("#<ul[^>]?>#", "\n", $data_static);
          $data_static = preg_replace("#<li[^>]*?>#", "\n", $data_static);
          $data_static = strip_tags($data_static, '</ul></li>');
          $ok_static = preg_replace("/&#?[a-z0-9]{2,8};/i", "", $data_static);
          $word_Count = str_word_count($ok_static);
          $read_Time = ceil($word_Count / 200); // un adulte lit environ 200 mots à la minute
          $timer = ($read_Time == 1) ? " minute" : " minutes";
          $totalread_Time = $read_Time . $timer;
          ?>
          <p class="text-slate-500 text-italic">
            <?php echo $plxShow->lang('READING_TIME') . $totalread_Time; ?>
          </p>
        </div>
        <div class="max-w-7xl mx-auto py-8 md:py-16 plx_content">
          <?php $plxShow->staticContent(); ?>
        </div>
      </article>
    </main>
  </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>