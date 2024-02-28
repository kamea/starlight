<?php include __DIR__ . '/header.php'; ?>

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

<div class="relative py-12 lg:py-24">
  <div class="mx-auto container px-2 md:px-0">
    <article id="static-page-<?php echo $plxShow->staticId(); ?>">
        <div class="grid lg:grid-cols-6 gap-8">
          <div class="col-span-6 lg:col-span-2">
            <aside class="sticky top-[110px] rounded-lg bg-white p-10 dark:bg-slate-900 plx_content">
              <ol class="list-decimal">
                <?php
                if (preg_match_all('/<h2>(.*?)<\/h2>/', $output, $matches)) {
                  $id = 1;
                  foreach ($matches[1] as $match) {
                    echo '<li><a href="#heading_' . $id . '">' . $match . '</a></li>';
                    $output = str_replace('<h2>' . $match . '</h2>', '<h2 id="heading_' . $id . '">' . $match . '</h2>', $output);
                    $id++;
                  }
                }
                ?>
              </ol>
          </div>

          <div class="col-span-6 lg:col-span-4 border-l-2 border-primary-500 pl-5">
            <div class="pb-8">
              <h1 class="pb-3 font-bold"><?php $plxShow->staticTitle(); ?></h1>
              <p class="flex text-slate-500">
                <?php $plxShow->lang('UPDATE_DATE'); ?> <?php $plxShow->staticUpdateDate('#day #num_day #month #num_year(2)') ?>
              </p>
              <p class="text-slate-500 text-italic">
                <?php echo $plxShow->lang('READING_TIME') . $totalread_Time; ?>
              </p>
            </div>

            <div class="plx_content">
            <?= $output; ?>
            </div>
          
          </div>
        </div>
 
    </article>
  </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>