<?php
// Fetch and sort "checkItOut" pages or content
$checkItOuts = page('checkItOut')->children()->sortBy('path', 'asc');

// Reverse the collection
$checkItOuts = $checkItOuts->flip();
?>

<div class="check-it-out-overview">
  <?php foreach ($checkItOuts as $item): ?>
    <?php
    // Calculate rotation value
    $rotation = strlen($item->title()->value()) / 10;
    ?>
    <article class="item">
      <h3><span><?= $item->title()->html() ?></span></h3>
      <?= $item->text()->kt() ?>
    </article>
  <?php endforeach; ?>
</div>