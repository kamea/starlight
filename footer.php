<?php if (!defined('PLX_ROOT')) exit; ?>

<footer class="footer">
  <div class="text-center">
    <?php $plxShow->mainTitle('link'); ?> • <span class="italic"><?php $plxShow->subTitle(); ?></span> &copy; 2012-<?= date("Y"); ?> •
    <?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="<?= PLX_URL_REPO ?>" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
    <?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?> •
    <a href="<?= $plxShow->urlRewrite('#top') ?>" title="<?= $plxShow->lang('GOTO_TOP') ?>">
    <?= $plxShow->lang('TOP') ?></a>
  </div>
  <div class="pt-3 text-center mx-auto space-x-3">
    <?php if ($plxShow->plxMotor->aConf['enable_rss']) : ?>
      <p class="inline-flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="rounded bg-white/20 inline h-6 w-6 text-white mr-1"  fill="currentColor" viewBox="0 0 256 256">
        <path d="M228,192a12,12,0,0,1-24,0c0-77.2-62.8-140-140-140a12,12,0,0,1,0-24C154.43,28,228,101.57,228,192ZM64,100a12,12,0,0,0,0,24,68.07,68.07,0,0,1,68,68,12,12,0,0,0,24,0A92.1,92.1,0,0,0,64,100Zm4,72a16,16,0,1,0,16,16A16,16,0,0,0,68,172Z"></path>
      </svg>
      <a href="<?= $plxShow->urlRewrite('feed.php?rss') ?>" title="<?= $plxShow->lang('ARTICLES_RSS_FEEDS') ?>"><?= $plxShow->lang('ARTICLES') ?></a>
      </p>
    <?php endif; ?>
    <?php if ($plxShow->plxMotor->aConf['enable_rss_comment']) : ?>
      <p class="inline-flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="rounded bg-white/20 h-6 w-6 text-white mr-1"  fill="currentColor" viewBox="0 0 256 256">
        <path d="M228,192a12,12,0,0,1-24,0c0-77.2-62.8-140-140-140a12,12,0,0,1,0-24C154.43,28,228,101.57,228,192ZM64,100a12,12,0,0,0,0,24,68.07,68.07,0,0,1,68,68,12,12,0,0,0,24,0A92.1,92.1,0,0,0,64,100Zm4,72a16,16,0,1,0,16,16A16,16,0,0,0,68,172Z"></path>
      </svg>
      <a href="<?= $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" title="<?= $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?= $plxShow->lang('COMMENTS') ?></a>
      </p>
    <?php endif; ?>
  </div>
  <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 bg-black/20 rounded-t text-white text-sm py-1 px-2">
    <a href="https://starlight.kamea.fr" target="_blank">Thème Starlight</a>
  </div>
</footer>

</body>
</html>
