<?php if (!defined('PLX_ROOT')) exit; ?>
<?php if ($plxShow->plxMotor->plxRecord_coms): ?>
  <h3 class="py-4" id="comments">
    <?php echo $plxShow->artNbCom(); ?>
  </h3>

  <?php while ($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires 
  ?>
    <div id="<?php $plxShow->comId(); ?>" class="comment <?php $plxShow->comLevel(); ?>">
      <div class="mt-4" id="com-<?php $plxShow->comIndex(); ?>">
        <a class="nbcom" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i + 1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i + 1 ?></a>&nbsp;
        <time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate('#day #num_day #month #num_year(4) - #hour:#minute'); ?></time> -
        <?php $plxShow->comAuthor('link'); ?>
        <?php $plxShow->lang('SAID'); ?> :
        <blockquote class="p-2">
          <p class="p-4 rounded border border-primary-400 dark:border-primary-800 type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent(); ?></p>
        </blockquote>
      </div>
      <?php if ($plxShow->plxMotor->plxRecord_arts->f('allow_com') and $plxShow->plxMotor->aConf['allow_com']): ?>
        <a rel="nofollow" href="<?php $plxShow->artUrl(); ?>#form" onclick="replyCom('<?php $plxShow->comIndex() ?>')"><?php $plxShow->lang('REPLY'); ?></a>
      <?php endif; ?>
    </div>
  <?php endwhile; # Fin de la boucle sur les commentaires 
  ?>
<?php endif; ?>

<?php if (
  $plxShow->plxMotor->plxRecord_arts->f('allow_com') and
  $plxShow->plxMotor->aConf['allow_com']
) : ?>
  <div id="comments" class="py-4">
    <div id="form" class="pb-16 text-center text-3xl text-primary-600">
      <?php $plxShow->lang('WRITE_A_COMMENT') ?>
    </div>
    <form action="<?php $plxShow->artUrl(); ?>#form" method="post">
      <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">
        <div class="col-span-1">
          <label for="id_name"><?php $plxShow->lang('NAME') ?>* :</label>
          <input class="input" id="id_name" name="name" type="text" size="20" value="<?php $plxShow->comGet('name', ''); ?>" maxlength="20" required>
        </div>
        <div class="col-span-1">
          <label for="id_mail"><?php $plxShow->lang('EMAIL') ?> :</label>
          <input class="input" id="id_mail" name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail', ''); ?>">
        </div>
        <div class="col-span-1">
          <label for="id_site"><?php $plxShow->lang('WEBSITE') ?> :</label>
          <input class="input" id="id_site" name="site" type="text" size="20" value="<?php $plxShow->comGet('site', ''); ?>">
        </div>
        <div class="col-span-full">
          <div id="id_answer" class="italic"></div>
          <label for="id_content" class="lab_com"><?php $plxShow->lang('COMMENT') ?> :</label>
          <textarea class="input" id="id_content" name="content" cols="35" rows="6"><?php $plxShow->comGet('content', ''); ?></textarea>
        </div>
      </div>
      <?php if ($plxShow->plxMotor->aConf['capcha']) : ?>
        <?php $plxShow->capchaQ(); ?>
        <div class="comment_message">
          <label for="id_rep"><strong><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong></label>
          <div>
            <input class="dark:bg-secondary-600 dark:text-white" id="id_rep" name="rep" type="text" size="2" maxlength="120" style="display: inline">
          </div>
        </div>
      <?php endif; ?>
      <?php $plxShow->comMessage('
    <p id="com_message" class="comment_message">
      #com_message
    </p>
    '); ?> <?php if ($plxShow->plxMotor->aConf['capcha']) : ?> <?php endif; ?>
      <input type="hidden" id="id_parent" name="parent" value="<?php $plxShow->comGet('parent', ''); ?>">

      <div class="py-4">
        <input type="checkbox" id="rgpd" name="rgpd" value="rgpd" required>
        <label class="pl-2 italic" for="rgpd"><?php $plxShow->lang('RGPD'); ?>

        </label>
      </div>

      <input class="btn" type="submit" value="<?php $plxShow->lang('SEND') ?>">

    </form>
  </div>
  <script>
    function replyCom(idCom) {
      document.getElementById('id_answer').innerHTML = '<?php $plxShow->lang('REPLY_TO'); ?> : ';
      document.getElementById('id_answer').innerHTML += document.getElementById('com-' + idCom).innerHTML;
      document.getElementById('id_answer').innerHTML += '<div class="com-cancel"><a class="button is-small is-danger" rel="nofollow" href="<?php $plxShow->artUrl(); ?>#comments" onclick="cancelCom()"><i class="feather icon-corner-down-left"> </i><?php $plxShow->lang('CANCEL'); ?></a></span>';
      document.getElementById('id_answer').style.display = 'block';
      document.getElementById('id_answer').style.padding = '10px';
      document.getElementById('id_parent').value = idCom;
      document.getElementById('id_content').focus();
    }

    function cancelCom() {
      document.getElementById('id_answer').style.display = 'none';
      document.getElementById('id_parent').value = '';
      document.getElementById('com_message').innerHTML = '';
    }
    var parent = document.getElementById('id_parent').value;
    if (parent != '') {
      replyCom(parent)
    }
  </script>
<?php else : ?>
  <p><?php $plxShow->lang('COMMENTS_CLOSED') ?>.</p>
<?php endif; # Fin du if sur l 'autorisation des commentaires 
?>