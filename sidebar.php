<?php if (!defined('PLX_ROOT')) exit; ?>

<aside class="sticky rounded-lg bg-slate-200 p-10 dark:bg-slate-900" style="top: 110px">
  <details open>
    <summary class="text-xl"><?php $plxShow->lang('CATEGORIES'); ?></summary>
    <ul class="border-l-2 border-slate-400/50" role="list">
      <?php $plxShow->catList('', '
      <li id="#cat_id">
        <a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a>
        <span class="ml-2 rounded bg-slate-50 px-2 font-semibold dark:bg-slate-950">#art_nb</span>
      </li>
      '); ?>
    </ul>
  </details>
  <details open>
    <summary class="text-xl">
      <?php $plxShow->lang('LATEST_ARTICLES'); ?>
    </summary>
    <ul class="border-l-2 border-slate-400/50" role="list">
      <?php $plxShow->lastArtList('
      <li>
        <a class="#art_status" href="#art_url" title="#art_title">#art_title</a>
      </li>
      ', 6); ?>
    </ul>
  </details>
  <details>
    <summary class="text-xl"><?php $plxShow->lang('TAGS'); ?></summary>
    <ul class="border-l-2 border-slate-400/50" role="list">
      <div class="tag-list">
        <?php $plxShow->tagList('
        <li>
          <a href="#tag_url" title="#tag_name">#tag_name</a>
          <span class="ml-2 rounded bg-slate-50 px-2 font-semibold dark:bg-slate-950">#nb_art</span>
        </li>
        ', 20); ?>
      </div>
    </ul>
  </details>
  <details>
    <summary class="text-xl"><?php $plxShow->lang('ARCHIVES'); ?></summary>
    <ul class="border-l-2 border-slate-400/50" role="list">
      <?php $plxShow->archList('
      <li id="#archives_id">
        <a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a>
        <span class="ml-2 rounded bg-slate-50 px-2 font-semibold dark:bg-slate-950">#archives_nbart</span>
      </li>
      '); ?>
    </ul>
  </details>
</aside>