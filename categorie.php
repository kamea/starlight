<?php include(dirname(__FILE__) . '/header.php'); ?>

<?php $nb_total_art = $plxShow->plxMotor->nbArticles('published'); ?>

<!-- Menu horizontal des catégories du blog -->
<div class="container mx-auto pt-12 md:pt-24">
  <div class="flex justify-center">
    <a class="btn group relative" href="<?php $plxShow->racine() ?>" title="Tous les articles">Tous les articles<p class="nbr_art"><?= $nb_total_art; ?></p></a>
    <?php $plxShow->catList('', '<a id="#cat_id" href="#cat_url" class="btn group relative #cat_status" title="#cat_name">#cat_name
        <p class="nbr_art">#art_nb</p>
        </a>'); ?>
  </div>
</div>

<!-- Affichage des articles -->
<div class="fade-in mx-auto max-w-7xl px-2 py-16 xl:px-0">
  <div class="grid gap-10 sm:grid-cols-2 xl:grid-cols-3">
    <!-- On boucle sur les articles-->
     <?php include 'inc/art_loop.php' ?>
  </div>
</div>

<nav class="pagination pb-16 text-center">
  <?php $plxShow->pagination(); ?>
</nav>

<?php include(dirname(__FILE__) . '/footer.php'); ?>