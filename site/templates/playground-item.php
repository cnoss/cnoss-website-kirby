<?php
$colorChanges = [];
if ($page->bgcolor()->isNotEmpty()) {
    $colorChanges["color-background"] = $page->bgcolor();
}

if ($page->fgcolor()->isNotEmpty()) {
    $colorChanges["color-headline"] = $page->fgcolor();
    $colorChanges["color-text"] = $page->fgcolor();
    $colorChanges["color-title"] = $page->fgcolor();
    $colorChanges["color-hero"] = $page->fgcolor();
    $colorChanges["color-interaction"] = $page->fgcolor();
}

?>

<?= snippet('html-head', [
  "bodyCssClass" => "layout-playground",
  "header" => "hide",
  "colorChanges" => $colorChanges
]) ?>


<?php
// Initialize styles
$styles = '';

// Add background color
if ($page->bgcolor()->isNotEmpty()) {
    $styles .= "background-color: " . $page->bgcolor() . "; ";
}

// Add foreground color
if ($page->fgcolor()->isNotEmpty()) {
    $styles .= "color: " . $page->fgcolor() . " !important; ";
    $styles .= "* {color: " . $page->fgcolor() . " !important;} ";
}

// Get blend mode class
$cssClass = $page->blendmode()->isNotEmpty() ? $page->blendmode() : null;
?>

<div class="layout-wrap">
  <div class="content">
    <main class="page <?= $page->class() ?>">
      <figure <?= $cssClass ? 'class="' . $cssClass . '"' : '' ?>>
        <?php if ($page->featuredImage()->isNotEmpty()): ?>
        <img src="<?= $page->featuredImage()->toFile()->url()?>" alt="<?= $page->featuredImage()->alt() ?>">
        <?php endif; ?>
      </figure>

      <section class="section text">
        <h2><?= $page->title()->html() ?></h2>
        <h3 class="date"><?= $page->year() ?></h3>

        <div class="herotext">
          <?= $page->text()->kirbytext() ?>
        </div>

        <figure <?= $cssClass ? 'class="' . $cssClass . '"' : '' ?>>
          <?php foreach ($page->images() as $item): ?>  
          <img src="<?= $item->url() ?>" alt="<?= $item->alt() ?>">
          <?php endforeach; ?>
        </figure>
        <a href="<?= $site->find('playground')->url()?>">zurück zur Übersicht</a>
      </section>
    </main>

  </div>
</div>


<?= snippet('html-foot') ?>