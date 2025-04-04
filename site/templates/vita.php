<?= snippet('html-head', ["mainCssClass" => "page"]) ?>

<div class="section ">
  <h2 class="semi-brutal"><?=$page->title()?></h2>
</div>

<?php
// Fetch and sort "vita" items by year in descending order
$vitaItems = page('vita')->children()->filterBy('type', 'vita', ',')->sortBy('year', 'desc');
snippet('vita-item-block', ["vitaItems" => $vitaItems]);
?>


<?php
// Fetch and sort "vita" items by year in descending order
$vitaItems = page('vita')->children()->filterBy('type', 'teaching', ',')->sortBy('year', 'desc');
snippet('vita-item-block', ["vitaItems" => $vitaItems, "title" => "Lehre"]);
?>


<?=snippet('html-foot')?>