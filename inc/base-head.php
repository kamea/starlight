<meta charset="<?php $plxShow->charset('min'); ?>">
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
<title><?php $plxShow->pageTitle(); ?></title>
<?php $plxShow->meta('description') ?>
<?php $plxShow->meta('keywords') ?>
<?php $plxShow->meta('author') ?>
<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
<link rel="shortcut icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/style.css" media="screen" />
<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> -->
<?php $plxShow->templateCss() ?>
<?php $plxShow->pluginsCss() ?>
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />