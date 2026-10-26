<?php
$site = [
    'name'    => 'Juan I. Fabián',
    'tagline' => 'Lic. iur. LL.B · Legal Counsel',
    'email'   => 'info@juanfabian.com',
    'phone'   => '+41 44 523 61 24',
];
$current = basename($_SERVER['SCRIPT_NAME'], '.php');
$lang = isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'de', 'es'], true) ? $_GET['lang'] : 'en';

$nav = [
    ['label' => 'Home',           'href' => 'index.php',        'key' => 'index'],
    ['label' => 'About',          'href' => 'about.php',        'key' => 'about'],
    ['label' => 'Practice Areas', 'href' => 'practice.php',     'key' => 'practice', 'dropdown' => true],
    ['label' => 'Experience',     'href' => 'experience.php',   'key' => 'experience'],
    ['label' => 'Results',        'href' => 'results.php',      'key' => 'results'],
    ['label' => 'Publications',   'href' => 'publications.php', 'key' => 'publications', 'dropdown' => true],
    ['label' => 'Insights',       'href' => 'insights.php',     'key' => 'insights'],
    ['label' => 'Contact',        'href' => 'contact.php',      'key' => 'contact'],
];
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle ?? $site['name']) ?></title>
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
            <?php foreach (['en', 'de', 'es'] as $l): ?>
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
                <small><?= strtoupper($site['tagline']) ?></small>
            </span>
        </a>
        <nav class="nav">
            <?php foreach ($nav as $item): ?>
                <a href="<?= $item['href'] ?>" class="nav__link <?= $current === $item['key'] ? 'is-active' : '' ?>">
                    <?= $item['label'] ?><?php if (!empty($item['dropdown'])): ?> <span class="caret">&#9662;</span><?php endif; ?>
                </a>
            <?php endforeach; ?>
        </nav>
        <a href="contact.php" class="btn btn--dark btn--sm">&#128197; Book Consultation</a>
    </div>
</header>
