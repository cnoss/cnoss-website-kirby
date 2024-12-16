<h2 class="brutal">Hi,</h2>

<?php
// Fetch the last diary entry
$intro = page('diaries')->children()->last();
echo $intro->text()->kt(); // Render the content with KirbyText
?>