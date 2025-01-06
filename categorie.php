<?php include 'header.php' ?>

<?php $nb_total_art = $plxShow->plxMotor->nbArticles('published'); ?>

<!-- Menu horizontal des catégories du blog -->
<div class="container mx-auto pt-12 md:pt-24">
<div class="wrap_btn">
	<?php $plxShow->pageBlog('<a class="btn relative noactive" href="#page_url" title="' . $plxShow->getLang('ALL_ARTICLES') . '">' . $plxShow->getLang('ALL_ARTICLES') . '</a>'); ?>
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
