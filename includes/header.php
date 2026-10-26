<?php
require_once __DIR__ . '/i18n.php';
$site = [
    'name'  => 'Juan I. Fabián',
    'email' => 'info@juanfabian.com',
    'phone' => '+41 44 523 61 24',
];
$current = basename($_SERVER['SCRIPT_NAME'], '.php');

$nav = [
    ['key' => 'nav.home',         'href' => 'index.php',        'page' => 'index'],
    ['key' => 'nav.about',        'href' => 'about.php',        'page' => 'about'],
    ['key' => 'nav.practice',     'href' => 'practice.php',     'page' => 'practice', 'dropdown' => true],
    ['key' => 'nav.experience',   'href' => 'experience.php',   'page' => 'experience'],
    ['key' => 'nav.results',      'href' => 'results.php',      'page' => 'results'],
    ['key' => 'nav.publications', 'href' => 'publications.php', 'page' => 'publications', 'dropdown' => true],
    ['key' => 'nav.insights',     'href' => 'insights.php',     'page' => 'insights'],
    ['key' => 'nav.contact',      'href' => 'contact.php',      'page' => 'contact'],
];
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle ?? t('title')) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="topbar">
    <div class="container topbar__inner">
        <div class="topbar__contact">
            <a href="mailto:<?= $site['email'] ?>">&#9993; <?= $site['email'] ?></a>
            <a href="tel:<?= preg_replace('/\s+/', '', $site['phone']) ?>">&#9742; <?= $site['phone'] ?></a>
        </div>
        <div class="topbar__lang">
            <?php foreach (SUPPORTED_LANGS as $l): ?>
                <a href="?lang=<?= $l ?>" class="<?= $lang === $l ? 'is-active' : '' ?>"><?= strtoupper($l) ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<header class="header">
    <div class="container header__inner">
        <a class="brand" href="index.php">
            <span class="brand__logo">JF</span>
            <span class="brand__text">
                <strong><?= $site['name'] ?></strong>
                <small><?= htmlspecialchars(mb_strtoupper(t('tagline'))) ?></small>
            </span>
        </a>
        <nav class="nav">
            <?php foreach ($nav as $item): ?>
                <a href="<?= $item['href'] ?>" class="nav__link <?= $current === $item['page'] ? 'is-active' : '' ?>">
                    <?= t($item['key']) ?><?php if (!empty($item['dropdown'])): ?> <span class="caret">&#9662;</span><?php endif; ?>
                </a>
            <?php endforeach; ?>
        </nav>
        <a href="contact.php" class="btn btn--dark btn--sm">&#128197; <?= t('btn.book_short') ?></a>
    </div>
</header>
