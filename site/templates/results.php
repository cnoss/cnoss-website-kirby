<?= snippet('html-head', ["mainCssClass" => "page"]) ?>




<section class="section">
  <h2 class="semi-brutal"><?= $page->headline() ?></h2>

  <div class="section herotext">
    <p><?= $page->text()->kt()?></p>
  </div>

  <?= snippet('results', ["context" => "gg"]) ?>

</section>


<?= snippet('html-foot') ?>