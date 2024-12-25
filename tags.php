<?php include 'header.php'; ?>

<div class="relative pt-12 lg:pt-24 w-full px-2 xl:px-0">
  <p class="text-3xl text-center"><?php $plxShow->lang('TAG'); ?> : <span class="font-bold"><?php $plxShow->tagName(); ?></span></p>
  <div class="tag-art"> 
    <div class="tag-art_grid">
<?php include 'inc/art_loop.php' ?>
    </div>
  </div>
  <nav class="pagination pb-16 text-center">
    <?php $plxShow->pagination(); ?>
  </nav>
</div>
<?php include 'footer.php'; ?>
