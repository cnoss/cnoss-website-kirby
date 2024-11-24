<?= snippet('html-head', ["mainCssClass" => "page"]) ?>

<div class="section herotext">
<?= snippet('intro') ?>
</div>

<section class="section is-somewhere">
  <h2>Mal austesten?</h2>
  <?= snippet('check-it-out') ?>
</section>

<section class="section">
  <h2>Schöne Ergebnisse aus dem Kurs <a href="{{site.data.links.module.gg}}">Generative Gestaltung</a></h2>
  <?= snippet('results', ["context" => "gg", "flag" => "home"]) ?>
  <a href="/works/generative-gestaltung.html">Mehr schöne Ergebnisse anschauen</a>
</section>

<section class="section">
<?= snippet('courses') ?>
</section>

<?= snippet('html-foot') ?>