<?php include(dirname(__FILE__) . '/header.php'); ?>

<div class="relative pt-12 lg:pt-24 w-full px-2 xl:px-0">
  <p class="text-3xl text-center"><?php $plxShow->lang('TAG'); ?> : <span class="font-bold"><?php $plxShow->tagName(); ?></span></p>
  <div class="fade-in mx-auto max-w-7xl px-2 py-16 xl:px-0">
    <div class="grid gap-10 sm:grid-cols-2 xl:grid-cols-3">
      <?php include 'inc/art_loop.php' ?>
    </div>
  </div>
  <nav class="pagination pb-16 text-center">
    <?php $plxShow->pagination(); ?>
  </nav>
</div>
<?php include(dirname(__FILE__) . '/footer.php'); ?>