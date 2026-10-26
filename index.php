<?php
include __DIR__ . '/includes/header.php';

$photo = file_exists(__DIR__ . '/assets/img/juan.jpg') ? 'assets/img/juan.jpg' : null;
?>
<main>
    <section class="hero">
        <div class="hero__symbol" aria-hidden="true">&sect;</div>
        <div class="container hero__inner">
            <div class="hero__text">
                <p class="eyebrow"><span class="eyebrow__line"></span><?= t('hero.eyebrow') ?></p>
                <h1><?= t('hero.title_a') ?> <em><?= t('hero.title_b') ?></em></h1>
                <p class="hero__lead">
                    <strong><?= t('hero.lead_name') ?></strong>
                    <?= t('hero.lead') ?>
                </p>
                <a href="contact.php" class="btn btn--dark btn--lg">&#128197; <?= t('btn.book') ?></a>
            </div>

            <div class="hero__media">
                <div class="frame">
                    <div class="frame__photo">
                        <?php if ($photo): ?>
                            <img src="<?= $photo ?>" alt="Juan I. Fabián">
                        <?php else: ?>
                            <div class="frame__placeholder">Add photo:<br>assets/img/juan.jpg</div>
                        <?php endif; ?>
                        <span class="frame__label"><?= t('hero.label') ?></span>
                    </div>
                    <div class="badge"><strong>20<span>+</span></strong><small><?= t('hero.badge') ?></small></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
