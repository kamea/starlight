<?php if (!defined('PLX_ROOT')) exit; ?>

<footer class="footer text-center xl:text-left">
  <div class="container mx-auto rounded-t-lg bg-primary-500 dark:bg-primary-500/20 text-white p-5">
    <div class="text-center mx-auto">
      <div class="text-italic">
        <?php $plxShow->mainTitle('link'); ?> - <?php $plxShow->subTitle(); ?> &copy; 2008-<?php echo date("Y"); ?> |
        <?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="<?= PLX_URL_REPO ?>" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
        <?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>
        <?php $plxShow->httpEncoding() ?>•<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
        <br /><?php if ($plxShow->plxMotor->aConf['enable_rss']) : ?><a href="<?= $plxShow->urlRewrite('feed.php?rss') ?>" title="<?= $plxShow->lang('ARTICLES_RSS_FEEDS') ?>"><?= $plxShow->lang('ARTICLES') ?></a> •
        <?php endif; ?>
        <?php if ($plxShow->plxMotor->aConf['enable_rss_comment']) : ?>
          <a href="<?= $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" title="<?= $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?= $plxShow->lang('COMMENTS') ?></a> •
        <?php endif; ?>
        <a href="<?= $plxShow->urlRewrite('#top') ?>" title="<?= $plxShow->lang('GOTO_TOP') ?>"><?= $plxShow->lang('TOP') ?></a>
      </div>
    </div>
  </div>
</footer>

</body>

</html>