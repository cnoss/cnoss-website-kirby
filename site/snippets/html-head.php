<!DOCTYPE html>

<?php
$language = $kirby->language();
$mainCssClass = isset($mainCssClass) ? $mainCssClass : '';
$bodyCssClass = isset($bodyCssClass) ? "class={$bodyCssClass}" : '';
$headerVisibility = isset($header) ? $header : 'show';
$customProperties = '';

if (isset($colorChanges)) {
    $mainCssClass .= ' color-changes';
    $customProperties = '';
    foreach ($colorChanges as $key => $value) {
        $customProperties .= "--{$key}: {$value};";
    }
    $customProperties = ":root{{$customProperties}}";
}
?>

<html lang="<?= $language->code() ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= snippet('meta_information'); ?>
  <?= snippet('robots') ?>
  <?= css([
    'assets/_compiled/styles/combined-styles.css',
    '@auto'
  ]) ?>

  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.4.4/photoswipe.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="styles.css"></noscript>

  <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">  
  <?= js(['assets/scripts/main.js', '@auto'], ['async' => false, 'type' => 'module']) ?>

  <style>
    <?= $customProperties ?>
  </style>

  <!--script src="https://unpkg.com/pagedjs/dist/paged.polyfill.js"></script-->

</head>
<body <?= $bodyCssClass ?>>

  <?php if ($headerVisibility === 'show'): ?>
    <?= snippet('header') ?>
  <?php endif; ?>
  
  <main class="main-content <?= $page->slug() ?> <?= $mainCssClass ?>">
