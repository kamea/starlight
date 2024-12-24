<?php if (!defined('PLX_ROOT')) exit; ?>

<h2 style="font-weight:bold">Mise en route</h2>
<div class=" h3">
<ul>
<li>Dans l'administration, <a href="https://wiki.pluxml.org/docs/customize/displayconfig.html" target="_blank">modifiez le nombre d'affichage des articles</a> en les passant de 5 à 6.</li>
<li><a href="https://wiki.pluxml.org/docs/use/categories.html" target="_blank">Configurez vos catégories</a> sur 6 articles par page dans le champ "NB art/page".</li>
<li>Si vous utilisez des images d'accroche, <a href="https://wiki.pluxml.org/docs/customize/displayconfig.html" target="_blank">choisissez une taille pour vos miniatures</a> en 480p (SD), par exemple 640x480. Notez que PluXml réduit déjà considérablement le poids des images, même avec cette résolution.</li>
<li>Si le thème par défaut ne vous convient pas, sélectionnez une autre feuille de style en modifiant son nom dans le fichier <code>'base-head.php'</code>, situé dans le répertoire <code>'/inc/'</code> à la racine du thème.</span></li>
<p>- Cherchez la ligne : <code>&lt;link rel=&quot;stylesheet&quot; href=&quot;&lt;?php $plxShow-&gt;template(); ?&gt;/css/<strong style='color:crimson'>style.css</strong>&quot; media=&quot;screen&quot;&gt;</code>
<br>- Changez <strong style='color:crimson'>style.css</strong> avec le nom d'une des feuilles de styles ci dessous :</p>

<ul>
<li>style.css</li>
<li>style-blue.css</li>
<li>style-slate.css</li>
</ul>

</div> 

<p>
<a class="button blue" style="font-weight:bold;" href="https://starlight.kamea.fr">starlight.kamea.fr</a>
</p>
<hr>