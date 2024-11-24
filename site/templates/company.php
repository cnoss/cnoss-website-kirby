<?= snippet('html-head') ?>

<h1><?= $page->title() ?></h1>

<!-- About Us Section -->
<section id="about-us">
    <h2><?= $page->headlineAboutUs()->kti() ?></h2>
    <?php if ($page->subtitleAboutUs()->isNotEmpty()): ?>
        <h3><?= $page->subtitleAboutUs()->kti() ?></h3>
    <?php endif; ?>

    <?php if ($page->copyTextAboutUs()->isNotEmpty()): ?>
        <?= $page->copyTextAboutUs()->kti() ?>
    <?php endif; ?>

    <!-- Video or Image Toggle -->
    <?= snippet('video-or-image', [
        'useVideo' => $page->useVideoAboutus(),
        'videoSnippet' => $page->videoAboutUs(),
        'imageSnippet' => $page->imageAboutUs(),
    ]) ?>
</section>

<!-- History Section -->
<section id="history">
    <h2><?= $page->headlineHistory()->html() ?></h2>
    <?php if ($page->linkTitleHistory()->isNotEmpty()): ?>
        <p class="link-title"><?= $page->linkTitleHistory()->html() ?></p>
    <?php endif; ?>

    <?php foreach ($page->datesAndEvents()->toStructure() as $item): ?>
        <?php if ($item->online()->isTrue()): ?>
            <div class="event">
                <strong><?= $item->year() ?>:</strong>
                <p><?= $item->event() ?></p>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</section>

<!-- Team Section -->
<section id="team">
    <h2><?= $page->headlineTeam()->kti() ?></h2>
    <?php if ($page->subtitleTeam()->isNotEmpty()): ?>
        <h3><?= $page->subtitleTeam()->kti() ?></h3>
    <?php endif; ?>
    <div class="text"><?= $page->textTeam()->kti() ?></div>
    <div class="team-images">
        <?= snippet('gallery', ['images' => $page->imageTeam()->toFiles()]) ?>
    </div>
</section>

<!-- Career Section -->
<section id="career">
    <h2><?= $page->headlineCareer()->kti() ?></h2>
    <?php if ($page->linkTitleCareer()->isNotEmpty()): ?>
        <h3><?= $page->subtitleCareer()->kti() ?></h3>
    <?php endif; ?>
    <div class="text"><?= $page->textCareer()->kti() ?></div>
</section>

<!-- Job Offers Section -->
<section id="job-offers">
    <h2><?= $page->headlineJobOffers()->html() ?></h2>
    <?php if ($page->linkTitleJobOffers()->isNotEmpty()): ?>
        <p class="link-title"><?= $page->linkTitleJobOffers()->html() ?></p>
    <?php endif; ?>

    <?php if ($page->imageJobOffers()->isNotEmpty()): 
        $img = $page->imageJobOffers()->toFile();
        snippet('small-image', ['image' => $img, 'width' => 600]);
    endif; ?>

    <?php if ($page->textJobOffers()->isNotEmpty()): ?>
        <div class="text"><?= $page->textJobOffers()->kti() ?></div>
    <?php endif; ?>

    <div class="job-offers-list">
        <?php foreach ($pages->find("stellenangebote")->children()->listed()->template('job-offer') as $jobOffer): ?>
            <article>
                <h3><a href="<?= $jobOffer->url() ?>"><?= $jobOffer->title()->html() ?></a></h3>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?= snippet('html-foot') ?>
