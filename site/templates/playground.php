<?= snippet('html-head', ["mainCssClass" => "page"]) ?>

<?php
// Fetch and sort "links" pages or collection
$items = page('playground')->children()
    ->sortBy('title', 'asc'); // Sort by title
?>


<section class="section text">
  <h2 class="semi-brutal"><?= $page->title() ?></h2>

  <div class="section herotext">
    <p><?= $page->text()->kt()?></p>
  </div>

  <div class="playground-overview">
    <div class="playground-content">
      <?php foreach ($items as $item): ?>
        <?php
        $img = $item->image();
        $imgSrc = $img ? $img->url() : 'https://via.placeholder.com/300x200';
        ?>
        <div class="playground-item">
          <a href="<?= $item->url() ?>">
            <figure>
              <img 
                class="is-blurr" 
                loading="lazy" 
                src="<?= $imgSrc ?>" 
                alt="<?= $item->title()->html() ?>">
              <figcaption>
                <?= $item->title()->kt() ?>
              </figcaption>
            </figure>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</section>


<?= snippet('html-foot') ?>