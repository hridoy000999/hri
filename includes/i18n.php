<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

const SUPPORTED_LANGS = ['en', 'de', 'es'];

if (isset($_GET['lang']) && in_array($_GET['lang'], SUPPORTED_LANGS, true)) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = $_SESSION['lang'] ?? 'en';

$translations = [
    'en' => [
        'title'            => 'Juan I. Fabián – Legal Counsel in Zürich, Switzerland',
        'tagline'          => 'Lic. iur. LL.B · Legal Counsel',
        'nav.home'         => 'Home',
        'nav.about'        => 'About',
        'nav.practice'     => 'Practice Areas',
        'nav.experience'   => 'Experience',
        'nav.results'      => 'Results',
        'nav.publications' => 'Publications',
        'nav.insights'     => 'Insights',
        'nav.contact'      => 'Contact',
        'btn.book_short'   => 'Book Consultation',
        'btn.book'         => 'Book a Consultation',
        'hero.eyebrow'     => 'Legal Counsel · Zürich · Switzerland',
        'hero.title_a'     => 'Trusted legal counsel in',
        'hero.title_b'     => 'Switzerland',
        'hero.lead_name'   => 'Lic. Juan I. Fabián LL.B',
        'hero.lead'        => 'is a licensed legal counsel and director of SWISS LAW INTERNATIONAL GmbH. He advises on immigration, corporate formation, debt recovery and mediation — in six languages, backed by USD 3M in international legal insurance.',
        'hero.badge'       => 'Years of practice',
        'hero.label'       => 'JURIST',
        'footer.rights'    => 'Swiss Law International GmbH',
    ],
    'de' => [
        'title'            => 'Juan I. Fabián – Rechtsberater in Zürich, Schweiz',
        'tagline'          => 'Lic. iur. LL.B · Rechtsberater',
        'nav.home'         => 'Startseite',
        'nav.about'        => 'Über mich',
        'nav.practice'     => 'Tätigkeitsbereiche',
        'nav.experience'   => 'Erfahrung',
        'nav.results'      => 'Ergebnisse',
        'nav.publications' => 'Publikationen',
        'nav.insights'     => 'Einblicke',
        'nav.contact'      => 'Kontakt',
        'btn.book_short'   => 'Termin buchen',
        'btn.book'         => 'Beratungstermin buchen',
        'hero.eyebrow'     => 'Rechtsberatung · Zürich · Schweiz',
        'hero.title_a'     => 'Vertrauenswürdige Rechtsberatung in der',
        'hero.title_b'     => 'Schweiz',
        'hero.lead_name'   => 'Lic. Juan I. Fabián LL.B',
        'hero.lead'        => 'ist zugelassener Rechtsberater und Direktor der SWISS LAW INTERNATIONAL GmbH. Er berät in den Bereichen Einwanderung, Unternehmensgründung, Forderungsmanagement und Mediation – in sechs Sprachen und mit einer internationalen Rechtsschutzversicherung über 3 Mio. USD.',
        'hero.badge'       => 'Jahre Erfahrung',
        'hero.label'       => 'JURIST',
        'footer.rights'    => 'Swiss Law International GmbH',
    ],
    'es' => [
        'title'            => 'Juan I. Fabián – Asesor jurídico en Zúrich, Suiza',
        'tagline'          => 'Lic. iur. LL.B · Asesor jurídico',
        'nav.home'         => 'Inicio',
        'nav.about'        => 'Acerca de',
        'nav.practice'     => 'Áreas de práctica',
        'nav.experience'   => 'Experiencia',
        'nav.results'      => 'Resultados',
        'nav.publications' => 'Publicaciones',
        'nav.insights'     => 'Artículos',
        'nav.contact'      => 'Contacto',
        'btn.book_short'   => 'Reservar consulta',
        'btn.book'         => 'Reservar una consulta',
        'hero.eyebrow'     => 'Asesoría jurídica · Zúrich · Suiza',
        'hero.title_a'     => 'Asesoría jurídica de confianza en',
        'hero.title_b'     => 'Suiza',
        'hero.lead_name'   => 'Lic. Juan I. Fabián LL.B',
        'hero.lead'        => 'es asesor jurídico autorizado y director de SWISS LAW INTERNATIONAL GmbH. Asesora en inmigración, constitución de empresas, recuperación de deudas y mediación, en seis idiomas y con un seguro jurídico internacional de 3 millones de USD.',
        'hero.badge'       => 'Años de experiencia',
        'hero.label'       => 'JURISTA',
        'footer.rights'    => 'Swiss Law International GmbH',
    ],
];

function t(string $key): string
{
    global $translations, $lang;
    return $translations[$lang][$key] ?? $translations['en'][$key] ?? $key;
}
