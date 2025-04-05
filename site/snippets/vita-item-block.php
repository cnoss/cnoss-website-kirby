<div class="section">

<?php if (isset($title)): ?>
  <h3 class="vita-section-title"><?=$title?></h3>
<?php endif;?>

  <dl id="vita-item-list" class="grid-list vita-item-list">
    <?php foreach ($vitaItems as $vitaItem): ?>

      <dt class="vita-item-title" data-type="<?=implode(', ', $vitaItem->type()->split(','))?>">
        <?php if ($vitaItem->since()->isNotEmpty() && $vitaItem->since() == "true"): ?>
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
        <?php if ($vitaItem->text()->isNotEmpty()): ?>
          <div class="vita-text"><?=$vitaItem->text()->kirbytext()?></div>
        <?php endif;?>
      </dd>
    <?php endforeach;?>
  </dl>

</div>