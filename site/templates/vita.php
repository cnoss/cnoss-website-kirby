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

<?php
// Fetch and sort "vita" items by year in descending order
$vitaItems = page('vita')->children()->filterBy('type', 'university-related-commitment', ',')->sortBy('year', 'desc');
snippet('vita-item-block', ["vitaItems" => $vitaItems, "title" => "Engagement"]);
?>

<?php
// Fetch and sort "vita" items by year in descending order
$vitaItems = page('vita')->children()->filter(function ($child) {
    return in_array($child->type()->value(), ['research', 'project']);
})->sortBy('year', 'desc');
snippet('vita-item-block', ["vitaItems" => $vitaItems, "title" => "Forschung & Projekte", "class" => "vita-item-list-large"]);
?>

<?php
// Fetch and sort "vita" items by year in descending order
$vitaItems = page('vita')->children()->filterBy('type', 'award', ',')->sortBy('year', 'desc');
snippet('vita-item-block', ["vitaItems" => $vitaItems, "title" => "Außerdem"]);
?>

<?php
// Fetch and sort "vita" items by year in descending order
$vitaItems = page('vita')->children()->filterBy('type', 'music', ',')->sortBy('year', 'desc');
snippet('vita-item-block', ["vitaItems" => $vitaItems, "title" => "Schlagzeug", "class" => "vita-item-list-large"]);
?>


<?=snippet('html-foot')?>