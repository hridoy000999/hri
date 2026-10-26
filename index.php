<?php
$pageTitle = 'Juan I. Fabián – Legal Counsel in Zürich, Switzerland';
include __DIR__ . '/includes/header.php';

$photo = file_exists(__DIR__ . '/assets/img/juan.jpg') ? 'assets/img/juan.jpg' : null;
?>
<main>
    <section class="hero">
        <div class="hero__symbol" aria-hidden="true">&sect;</div>
        <div class="container hero__inner">
            <div class="hero__text">
                <p class="eyebrow"><span class="eyebrow__line"></span>Legal Counsel · Zürich · Switzerland</p>
                <h1>Trusted legal counsel in <em>Switzerland</em></h1>
                <p class="hero__lead">
                    <strong>Lic. Juan I. Fabián LL.B</strong> is a licensed legal counsel and director of
                    SWISS LAW INTERNATIONAL GmbH. He advises on immigration, corporate formation, debt
                    recovery and mediation — in six languages, backed by USD 3M in international legal insurance.
                </p>
                <a href="contact.php" class="btn btn--dark btn--lg">&#128197; Book a Consultation</a>
            </div>

            <div class="hero__media">
                <div class="frame">
                    <div class="frame__photo">
                        <?php if ($photo): ?>
                            <img src="<?= $photo ?>" alt="Juan I. Fabián">
                        <?php else: ?>
                            <div class="frame__placeholder">Add photo:<br>assets/img/juan.jpg</div>
                        <?php endif; ?>
                        <span class="frame__label">JURIST</span>
                    </div>
                    <div class="badge"><strong>20<span>+</span></strong><small>Years of practice</small></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
