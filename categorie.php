<?php include 'header.php' ?>

<?php $nb_total_art = $plxShow->plxMotor->nbArticles('published'); ?>

<!-- Menu horizontal des catégories du blog -->
<div class="container mx-auto pt-12 md:pt-24">
  <div class="wrap_btn">
    <?php $plxShow->pageBlog('
                <a class="btn relative" href="#page_url" title="#page_name">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 256 256"><path d="M221.66,90.34,192,120,136,64l29.66-29.66a8,8,0,0,1,11.31,0L221.66,79A8,8,0,0,1,221.66,90.34Z" opacity="0.2"></path><path d="M227.32,73.37,182.63,28.69a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H216a8,8,0,0,0,0-16H115.32l112-112A16,16,0,0,0,227.32,73.37ZM48,163.31l88-88L180.69,120l-88,88H48Zm144-54.62L147.32,64l24-24L216,84.69Z"></path></svg>
                </a>
              ') ?>
    <?php $plxShow->catList('', '<a id="#cat_id" href="#cat_url" class="btn relative #cat_status" title="#cat_name">#cat_name</a>'); ?>
  </div>
</div>

<!-- Affichage des articles -->
<div class="categorie-art">
  <div class="caterorie-art_grid">
    <!-- On boucle sur les articles-->
    <?php include 'inc/art_loop.php' ?>
  </div>
</div>

<nav class="pagination pb-16 text-center">
  <?php $plxShow->pagination(); ?>
</nav>

<?php include 'footer.php' ?>