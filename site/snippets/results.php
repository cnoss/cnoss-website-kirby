<?php
// Fetch the 'feed' page or collection
$feed = page('results')->children()->sortBy('term', 'desc');

// Pattern and flag from the context (you can set these variables dynamically as needed)
$pattern = $pattern ?? null; // Replace with actual pattern logic if necessary
$flag = $flag ?? null;       // Replace with actual flag logic if necessary

// Calculate the size of the feed
$size = $feed->count() + 1;

// Filter the feed based on the flag
if ($flag === "home") {
    $items = $feed->filterBy('home', true);
} else {
    $items = $feed;
}
?>

<div class="feed-overview">
  <div class="feed-content">
    <?php foreach ($items as $item): ?>
      <?php 
      // Fetch image source
      $src = $item->StaticImage() ?? ''; 
      ?>
      <div class="feed-item">
        <figure>
          <img loading="lazy" src="<?= $src ?>" alt="<?= $item->title()->html() ?> von <?= $item->author()->html() ?>">
          <ul class="info">
            <li class="info-item">
              <a href="<?= $item->target()?>">
                <?= $item->title()->html() ?> von <?= $item->author()->html() ?>&nbsp;<span class="icon">open_in_new</span>
              </a>
            </li>
            <li class="info-item"><?= str_replace("-", "/", $item->term()->html()) ?></li>
          </ul>
        </figure>
      </div>
    <?php endforeach; ?>
  </div>
</div>
