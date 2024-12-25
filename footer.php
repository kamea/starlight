<?php if (!defined('PLX_ROOT')) exit; ?>

<footer class="footer">
  <div class="text-center">
    <?php $plxShow->mainTitle('link'); ?> • <span class="italic"><?php $plxShow->subTitle(); ?></span> &copy; 2012-<?php echo date("Y"); ?> •
    <?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="<?= PLX_URL_REPO ?>" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
    <?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>
  </div>
  <div class="pt-3 text-center mx-auto">
    <?php if ($plxShow->plxMotor->aConf['enable_rss']) : ?><a href="<?= $plxShow->urlRewrite('feed.php?rss') ?>" title="<?= $plxShow->lang('ARTICLES_RSS_FEEDS') ?>"><?= $plxShow->lang('ARTICLES') ?></a> •
    <?php endif; ?>
    <?php if ($plxShow->plxMotor->aConf['enable_rss_comment']) : ?>
      <a href="<?= $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" title="<?= $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?= $plxShow->lang('COMMENTS') ?></a> •
    <?php endif; ?>
    <a href="<?= $plxShow->urlRewrite('#top') ?>" title="<?= $plxShow->lang('GOTO_TOP') ?>"><?= $plxShow->lang('TOP') ?></a>
  </div>
</footer>

<!-- script src="<?php $plxShow->template(); ?>/js/main.js"></script -->

</body>
</html>
