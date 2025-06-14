<?= snippet('html-head', ["mainCssClass" => "page"]) ?>

<div class="section herotext">
<?= snippet('intro') ?>
</div>

<section class="section is-somewhere">
  <h2>Mal austesten?</h2>
  <?= snippet('check-it-out') ?>
</section>

<section class="section">
  <h2>Schöne Ergebnisse aus dem Kurs <a href="https://cnoss.github.io/generative-gestaltung/">Generative Gestaltung</a></h2>

  <p class="text-desc">Im Studiengang <a href="https://coco.study">Code & Context</a> unterrichte ich den Kurs Generative Gestaltung. Hier sind ein paar Ergebnisse aus den letzten Semestern.</p>
  <?= snippet('results', ["context" => "gg", "flag" => "home"]) ?>
  <a href="/results">Mehr schöne Ergebnisse anschauen</a>
</section>

<section class="section">
  <h2>Meine Module und Kurse</h2>
<?= snippet('courses') ?>
</section>

<?= snippet('html-foot') ?>