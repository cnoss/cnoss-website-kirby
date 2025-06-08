<?= snippet('html-head', ["mainCssClass" => "page"]) ?>

<section class="section layout-blocks">
  <h2><?= $page->title() ?></h2>
  <h3 class="date"><?= $page->date()->toDate('d.m.Y'); ?></h3>

<?php foreach ($page->layout()->toLayouts() as $layout): ?>
<section class="layout-grid <?= $layout->attrs()->class() ?>" id="<?= $layout->id() ?>" data-grid="6">
  <?php foreach ($layout->columns() as $column): ?>
  <div class="column" data-column-span="<?= $column->span(6) ?>">
    <div class="blocks">
      <?= $column->blocks() ?>
    </div>
  </div>
  <?php endforeach ?>
</section>
<?php endforeach ?>
</section>



<?= snippet('html-foot') ?>
