<?php
// Fetch and sort "lehrveranstaltungen" (courses) and filter by "published" not being false
$veranstaltungen = page('courses')->children()
    ->filterBy('published', '==', true) // Exclude items where "published" is false
    ->sortBy('title', 'asc');
?>

<div class="course-overview">
  <?php foreach ($veranstaltungen as $veranstaltung): ?>
    <div class="course-item">
      
      <h3 class="course-item-headline" id="<?= $veranstaltung->id() ?>">
        <a href="<?= $veranstaltung->website()->url() ?>">
          <?= $veranstaltung->title()->html() ?>&nbsp;<span class="icon">open_in_new</span>
        </a>
      </h3>
      <p class="grow">
        <?= $veranstaltung->studiengang() ?>, 
        <?= $veranstaltung->weitereInfos() ?>, 
        <?= $veranstaltung->angebotenIm() ?>
      </p>
      <ul class="taglist taglist--linear taglist--small">
        <?php foreach (explode(", ", $veranstaltung->tags()->value()) as $tag): ?>
          <li class="taglist__item">
            <a href="https://twitter.com/search?q=<?= urlencode($tag) ?>">
              <?= htmlspecialchars($tag) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
      
    </div>
  <?php endforeach; ?>
</div>
