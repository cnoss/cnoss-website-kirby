<?= snippet('html-head', ["mainCssClass" => "page"]) ?>

<section class="section text">
  <h2><?= $page->title() ?></h2>
  <h3 class="date"><?= $page->date()->toDate('d.m.Y'); ?></h3>

  <div class="text-content">
    <?= $page->text()->kt() ?>
  </div>
</section>

<?= snippet('html-foot') ?>
