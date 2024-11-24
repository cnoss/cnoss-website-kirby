<header class="header section">
  <a class="avatar-wrap" href="/"><img class="avatar" src="/assets/static-images/cab-sw-normal-1x1.jpg" alt="Christian with a cap on his head."></a>
  <div>
    <h1 class="title">Christian Noss</h1>
    <h2 class="subtitle">prof <a href="https://twitter.com/th_koeln">@th_koeln</a> // founder <a href="https://www.klickmeister.de/">@klickmeister</a> // part of <a href="https://medieninformatik.th-koeln.de">@micologne</a> & <a href="https://www.th-koeln.de/informatik-und-ingenieurwissenschaften/advanced-media-institute_69153.php">Advanced Media Institute</a> // supporter <a href="https://coco.study">@codeandcontext</a></h2>
  </div>

  <nav id="main">
    <ul>
      <?php foreach($site->children()->listed() as $item): ?>
        <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
      <?php endforeach; ?>

      <?php foreach($site->additionalLinks()->toStructure() as $item): ?>
        <li><a href="<?= $item->linkTarget() ?>"><?= $item->linkTitle() ?></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>

