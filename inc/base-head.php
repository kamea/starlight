<meta charset="<?php $plxShow->charset('min'); ?>">
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
<title><?php $plxShow->pageTitle(); ?></title>
<?php $plxShow->meta('description') ?>
<?php $plxShow->meta('keywords') ?>
<?php $plxShow->meta('author') ?>
<link rel="icon" type="image/png" href="<?php $plxShow->template(); ?>/img/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/svg+xml" href="<?php $plxShow->template(); ?>/img/favicon.svg">
<link rel="shortcut icon" href="<?php $plxShow->template(); ?>/img/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="<?php $plxShow->template(); ?>/img/apple-touch-icon.png">
<link rel="manifest" href="<?php $plxShow->template(); ?>/img/site.webmanifest">
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/style.css" media="screen">
<?php $plxShow->templateCss() ?>
<?php $plxShow->pluginsCss() ?>
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>">
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>">

<script>// Applique le thème initial pour éviter les FOUC
  const isDarkMode = localStorage.getItem('theme') === 'dark' || 
    (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);
  document.documentElement.classList.toggle('dark', isDarkMode);
 </script>
 
 <script>// Gestion du thème dark/light
  document.addEventListener('DOMContentLoaded', () => {
    const toggleTheme = () => {
      const isDark = document.documentElement.classList.toggle('dark');
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
    };
    document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
  });</script>