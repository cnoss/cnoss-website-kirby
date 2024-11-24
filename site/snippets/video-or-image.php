<?php

if($useVideo == 'true'){
  snippet('video', ['videoSnippet' => $videoSnippet]);
}else{
  $img = $imageSnippet->toFile();
  snippet('small-image', ['image' => $img, 'width' => 600]);
}
?>