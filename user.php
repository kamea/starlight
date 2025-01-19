<?php include 'header.php' ?>
<main>
  <div class="relative pt-12 lg:pt-24 w-full px-2 xl:px-0">
    <p class="text-3xl text-center"><?php $plxShow->lang('ART_AUTHOR'); ?> : <span class="font-bold"><?php $plxShow->authorName(); ?></span></p>

    <?php include 'inc/art_loop.php' ?>

  </div>
</main>
<?php include 'footer.php' ?>