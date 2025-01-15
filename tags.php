<?php include 'header.php' ?>
<main>
  <div class="relative pt-12 lg:pt-24 w-full px-2 xl:px-0">
    <p class="text-3xl text-center"><?php $plxShow->lang('TAG'); ?> : <span class="font-bold"><?php $plxShow->tagName(); ?></span></p>
    <div class="art-wrap">
      <div class="grid-art">
        <?php include 'inc/art_loop.php' ?>
      </div>
    </div>
    <nav class="pagination pb-16 text-center">
      <?php $plxShow->pagination(); ?>
    </nav>
  </div>
</main>
<?php include 'footer.php' ?>