<?php if (!defined('PLX_ROOT')) exit; ?>

<footer class="relative footer">
  <div class="text-center mx-auto">
    <?php $plxShow->mainTitle('link'); ?> • <span class="italic"><?php $plxShow->subTitle(); ?></span> &copy; 2008-<?php echo date("Y"); ?> •
    <?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="<?= PLX_URL_REPO ?>" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
    <?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>
    <?php $plxShow->httpEncoding() ?> • <a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
    <!-- <hr class="my-3 border-none w-1/3 mx-auto h-0.5 bg-primary-400/20"> -->
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

<script src="<?php $plxShow->template(); ?>/js/main.js"></script>

</body>
</html>