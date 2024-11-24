<?php
$targetWidth = 600;
?>

<section class="image-gallery slideshow">
  <?php foreach($images as $image): ?>

    <?php
    $width = $image && $image->type() === 'image' ?  $image->width() : 0;
    $height = $image && $image->type() === 'image' ?  $image->height() : 0;

    $imageSrc = $image->url();
    $imageAlt = $image->alt();
    $cssClass = $image->orientation();
    ?>
    <a href="<?= $imageSrc ?>" 
      class="<?= $cssClass ?>-image"
      data-pswp-width="<?= $width ?>" 
      data-pswp-height="<?= $height ?>" 
      data-cropped="true"
      target="_blank">
      <?= snippet('small-image', ['image' => $image, 'alt' => $image->alt(), 'width' => $targetWidth]) ?>
    </a>
  <?php endforeach; ?>  
</section>
