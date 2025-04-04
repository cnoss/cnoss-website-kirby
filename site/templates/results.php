<?= snippet('html-head', ["mainCssClass" => "page"]) ?>

<?php
// Fetch and sort "books" collection by year in ascending order
$books = page('results')->children()->sortBy('term', 'asc')->flip(); // Flip to reverse the order

// Find the first featured book
$featured = $books->filterBy('featured', true)->first();
?>


<section class="section">
  <h2 class="semi-brutal"><?= $page->headline() ?></h2>

  <div class="section herotext">
    <p><?= $page->text()->kt()?></p>
  </div>



<?php if ($featured): ?>
  <div class="featured">

    <figure data-columns="2">
      <a href="<?= $featured->target()->url() ?>" class="book-img">
        <img loading="lazy" src="<?= $featured->image()->url() ?>" alt="<?= $featured->title()->html() ?>">
      </a>
      <figcaption>
        <a href="<?= $featured->target()->url() ?>">
          <h3><?= $featured->title()->html() ?></h3>
        </a>
        <ul class="tight-list">
          <li><?= $featured->author()->html() ?>, <?= $featured->year()->html() ?></li>
          <li><?= $featured->location()->html() ?></li>
        </ul>

        <a href="<?= $featured->target()->url() ?>" class="cta">
          <span class="text">zum Buch</span><span>yeah!</span>
        </a>
      </figcaption>
    </figure>
  </div>
<?php endif; ?>

<ul class="book-overview">
  <?php foreach ($books as $book): ?>
    <?php if ($featured && $book->is($featured)) {
        continue;
    } // Skip the featured book?>

    <li class="book-item">
      <figure>
        <a href="<?= $book->target()->url() ?>" class="book-img">
          <img loading="lazy" src="<?= $book->image()->url()  ?>" alt="<?= $book->title()->html() ?>">
        </a>
        <figcaption>
          <a href="<?= $book->target()->url() ?>">
            <h3><?= $book->title()->html() ?></h3>
          </a>
          <ul class="tight-list">
            <li><?= $book->author()->html() ?>, <?= $book->year()->html() ?></li>
            <li><?= $book->location()->html() ?></li>
          </ul>

          <a href="<?= $book->target()->url() ?>" class="cta">
            <span class="text">zum Buch</span><span>yeah!</span>
          </a>
        </figcaption>
      </figure>
    </li>
  <?php endforeach; ?>
</ul>

</section>


<?= snippet('html-foot') ?>