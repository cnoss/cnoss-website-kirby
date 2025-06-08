<?php if ($block->headline()->isNotEmpty()): ?>
  <h2><?= esc($block->headline()) ?></h2>
<?php endif ?>

<?php if ($block->text()->isNotEmpty()): ?>
  <div class="<?= implode(' ', $block->class()->toArray()) ?>">
    <?= kirbytext($block->text()) ?>
  </div>
<?php endif ?>