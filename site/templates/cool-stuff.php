<?= snippet('html-head', ["mainCssClass" => "page"]) ?>

<?php
// Fetch and sort "links" pages or collection
$items = page('cool-stuff')->children()
    ->sortBy('title', 'asc'); // Sort by title
?>

<section class="section">
  <h2><?= $page->headline() ?></h2>

  <div class="feed-overview">
    <div class="feed-content">
      <?php foreach ($items as $item): ?>
        <?php
        $img = $item->image();
        $imgSrc = $img ? $img->url() : 'https://via.placeholder.com/300x200';
        ?>
        <div class="feed-item">
          <figure>
            <img 
              class="is-blurr" 
              loading="lazy" 
              src="<?= $imgSrc ?>" 
              alt="<?= $item->title()->html() ?>">
            <ul class="info">
              <li class="info-item">
                <a href="<?= $item->src()->url() ?>">
                  <?= $item->title()->html() ?>&nbsp;<span class="icon">open_in_new</span>
                </a>
              </li>
              <li class="info-item">
                <?= $item->text()->html() ?>
              </li>
              <!--li class="info--item tags">
                <?= implode(', ', $item->tags()->split()) ?>
              </li-->
            </ul>
          </figure>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<?= snippet('html-foot') ?>