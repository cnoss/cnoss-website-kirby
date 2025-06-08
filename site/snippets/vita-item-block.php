<?php
use Kirby\Toolkit\Str;

?>

<div class="section">

<?php if (isset($title)): ?>
<h3 class="vita-section-title" id="<?php echo Str::slug($title)?>">
  <?php echo $title?>
</h3>
<?php endif; ?>

  <dl id="vita-item-list" class="grid-list vita-item-list                                                          <?php if (isset($class)): ?><?php echo $class?><?php endif; ?>">
    <?php foreach ($vitaItems as $vitaItem): ?>

      <dt class="vita-item-title" data-type="<?php echo implode(', ', $vitaItem->type()->split(','))?>">
        <?php if ($vitaItem->since()->isNotEmpty() && $vitaItem->since() == "true"): ?>
          seit
        <?php endif; ?>
<?php if ($vitaItem->yearUntil()->isNotEmpty()): ?>
          <?php echo $vitaItem->year()?> — <?php echo $vitaItem->yearUntil()?>
<?php else: ?>
          <?php echo $vitaItem->year()?>
<?php endif; ?>
      </dt>
      <dd class="vita-item-data" data-type="<?php echo implode(', ', $vitaItem->type()->split(','))?>">
        <div class="title"><?php echo $vitaItem->headline()->kirbytext()?></div>
        <?php if ($vitaItem->text()->isNotEmpty()): ?>
          <div class="vita-text"><?php echo $vitaItem->text()->kirbytext()?></div>
        <?php endif; ?>

        <?php if ($vitaItem->additionalContent()->isNotEmpty()): ?>
          <div class="additional-content">
            <?php echo $vitaItem->additionalContent()->toBlocks()?>
          </div>
        <?php endif?>

      </dd>
    <?php endforeach; ?>
  </dl>

</div>