<?php include(dirname(__FILE__) . '/header.php'); ?>

<?php $nb_total_art = $plxShow->plxMotor->nbArticles('published'); ?>

<!-- Menu horizontal des catégories du blog -->
<div class="container mx-auto pt-12 md:pt-24">
<div class="wrap_btn">
    <a class="btn relative" href="<?php $plxShow->racine() ?>" title="Tous les articles">Tous les articles</a>
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

<?php include(dirname(__FILE__) . '/footer.php'); ?>