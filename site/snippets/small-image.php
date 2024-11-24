<?php
$quality = 95;
$cssClass = isset($cssClass) ? "class={$cssClass}" : "";
$ratio = $image->height() / $image->width();
$height = ceil($width * $ratio);

$smallImage = $image->thumb([
  'width' => $width, 
  'height' => $height, 
  'quality' => $quality,
  'format'  => 'webp',
  'sharpen' => true
]);
?>

<img src="<?= $smallImage->url() ?>" <?= $cssClass ?> alt="<?= $image->alt() ?>" loading="lazy">