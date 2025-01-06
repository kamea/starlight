<?php include 'header.php' ?>
<?php $nb_total_art = $plxShow->plxMotor->nbArticles('published'); ?>
<div class="container mx-auto pt-4 md:pt-24">
  <div class="wrap_btn">
    <?php $plxShow->pageBlog('<a class="btn relative active" href="#page_url" title="' . $plxShow->getLang('ALL_ARTICLES') . '">' . $plxShow->getLang('ALL_ARTICLES') . '</a>'); ?>
    <?php $plxShow->catList('', '<a id="#cat_id" href="#cat_url" class="btn relative" title="#cat_name">#cat_name</a>'); ?>
  </div>
</div>
<div class="home-art">
  <div class="home-art_grid">
     <?php include 'inc/art_loop.php' ?>
  </div>
</div>
<nav class="pagination text-center pb-16">
  <?php $plxShow->pagination(); ?>
</nav>
<?php include 'footer.php' ?>




