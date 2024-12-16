<?= snippet('html-head', ["mainCssClass" => "page"]) ?>

<?php
// Fetch and sort "vita" items by year in descending order
$vitaItems = page('vita')->children()->sortBy('year', 'desc');
?>



<h2 class="semi-brutal"><?=$page->title()?></h2>

<div class="section">
  <!--ul class="filter" data-js-filter="vita-item-list"></ul-->

  <dl id="vita-item-list" class="grid-list vita-item-list">
    <?php foreach ($vitaItems as $vitaItem): ?>
      <dt class="vita-item-title" data-type="<?=implode(', ', $vitaItem->type()->split(','))?>">
        <?php if ($vitaItem->since()->isNotEmpty()): ?>
          seit
        <?php endif;?>
        <?php if ($vitaItem->yearUntil()->isNotEmpty()): ?>
          <?=$vitaItem->year()?> — <?=$vitaItem->yearUntil()?>
        <?php else: ?>
          <?=$vitaItem->year()?>
        <?php endif;?>
      </dt>
      <dd class="vita-item-data" data-type="<?=implode(', ', $vitaItem->type()->split(','))?>">
        <div class="title"><?=$vitaItem->headline()->kirbytext()?></div>
        <?php if ($vitaItem->content()->isNotEmpty()): ?>
          <div class="vita-text"><?=$vitaItem->content()->kirbytext()?></div>
        <?php endif;?>
      </dd>
    <?php endforeach;?>
  </dl>

</div>

<?=snippet('html-foot')?>