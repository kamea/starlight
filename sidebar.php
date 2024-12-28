<?php if (!defined('PLX_ROOT')) exit; ?>

<aside class="wrap_aside mylink" style="top: 110px">
  <details open>
    <summary class="text-xl"><?php $plxShow->lang('CATEGORIES'); ?></summary>
    <ul class="border-l-2 border-primary-400/50">
      <?php $plxShow->catList('', '
      <li id="#cat_id">
        <a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a>
        <span>(#art_nb)</span>
      </li>
      '); ?>
    </ul>
  </details>
  <details open>
    <summary class="text-xl">
      <?php $plxShow->lang('LATEST_ARTICLES'); ?>
    </summary>
    <ul class="border-l-2 border-primary-400/50">
      <?php $plxShow->lastArtList('
      <li>
        <a class="#art_status" href="#art_url" title="#art_title">#art_title</a>
      </li>
      ', 6); ?>
    </ul>
  </details>
  <details>
    <summary class="text-xl"><?php $plxShow->lang('TAGS'); ?></summary>
    <ul class="border-l-2 border-primary-400/50">
      <?php $plxShow->tagList('
        <li>
          <a href="#tag_url" title="#tag_name">#tag_name</a>
          <span>(#nb_art)</span>
        </li>
        ', 20); ?>
    </ul>
  </details>
  <?php
  if (method_exists($plxShow, 'authorList')) {
  ?>
    <details>
      <summary class="text-xl"><?php $plxShow->lang('AUTHORS'); ?></summary>
      <ul class="border-l-2 border-primary-400/50">
        <?php $plxShow->authorList(); ?>
      </ul>
    </details>
  <?php } ?>

  <details>
    <summary class="text-xl"><?php $plxShow->lang('ARCHIVES'); ?></summary>
    <ul class="border-l-2 border-primary-400/50">
      <?php $plxShow->archList('
      <li id="#archives_id">
        <a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a>
        <span>(#archives_nbart)</span>
      </li>
      '); ?>
    </ul>
  </details>
</aside>