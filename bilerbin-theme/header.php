<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="description" content="Bilerbin vyrábí bylinkové sirupy a džemy z čistého prostředí Orlických hor. Navštivte naši kavárnu v Lanškrouně nebo si objednejte online."/>
  <meta name="keywords" content="bylinkové sirupy, domácí džemy, kavárna Lanškroun, přírodní produkty, Orlické hory, Bilerbin"/>
  <meta name="author" content="Bilerbin — Helenka &amp; Martin"/>
  <link rel="canonical" href="https://bilerbin.cz/"/>
  <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilerbin-logo.png"/>
  <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilerbin-logo.png"/>

  <!-- Open Graph -->
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://bilerbin.cz/"/>
  <meta property="og:title" content="Bilerbin — Bylinkové sirupy, džemy &amp; kavárna"/>
  <meta property="og:description" content="Přírodní produkty a rodinná kavárna z podhůří Orlických hor. Sirupy, džemy, polední menu."/>
  <meta property="og:locale" content="cs_CZ"/>

  <!-- Structured data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Bilerbin",
    "description": "Bylinkové sirupy, džemy a malá kavárna v podhůří Orlických hor.",
    "url": "https://bilerbin.cz",
    "telephone": "+420608726323",
    "email": "helena@bilerbin.cz",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Kozinova 71",
      "postalCode": "563 01",
      "addressLocality": "Lanškroun",
      "addressCountry": "CZ"
    },
    "openingHours": ["Mo-Fr 09:00-18:00", "Sa 09:00-12:00"]
  }
  </script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- ═══════════════════════════════════════════
     HEADER
════════════════════════════════════════════ -->
<header class="site-header" id="site-header" role="banner">
  <div class="header-inner">

    <!-- Logo -->
    <a href="#hero" class="header-logo" aria-label="Bilerbin — domů" onclick="smoothJump(event,'hero')">
      <div class="logo-ring">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilerbin-logo.png" alt="Bilerbin logo" width="86" height="86"/>
      </div>
    </a>

    <!-- Left nav (landing only) -->
    <nav class="nav-left" aria-label="Hlavní navigace levá">
      <a href="#o-nas"   class="nav-link" onclick="smoothJump(event,'o-nas')">O nás</a>
      <a href="#kavarna" class="nav-link" onclick="smoothJump(event,'kavarna')">Kavárna</a>
    </nav>

    <!-- Right nav -->
    <nav class="nav-right" id="nav-right" aria-label="Hlavní navigace pravá">
      <a href="#oaza"     class="nav-link" onclick="smoothJump(event,'oaza')">Oáza zdraví</a>
      <a href="#produkty" class="nav-link" onclick="smoothJump(event,'produkty')">Produkty</a>
      <a href="#kontakt"  class="nav-link" onclick="smoothJump(event,'kontakt')">Kontakt</a>
    </nav>

    <!-- Dropdown trigger (desktop, landing only) -->
    <button class="nav-menu-btn" id="nav-menu-btn" aria-expanded="false" aria-haspopup="true" aria-label="Otevřít navigaci">
      Menu
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <path d="M5 9l7 7 7-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>

    <!-- Dropdown panel -->
    <nav class="nav-dropdown" id="nav-dropdown" aria-label="Navigační menu">
      <a href="#o-nas"    class="dropdown-link" onclick="smoothJump(event,'o-nas');closeDropdown()">O nás</a>
      <a href="#kavarna"  class="dropdown-link" onclick="smoothJump(event,'kavarna');closeDropdown()">Kavárna</a>
      <a href="#oaza"     class="dropdown-link" onclick="smoothJump(event,'oaza');closeDropdown()">Oáza zdraví</a>
      <a href="#produkty" class="dropdown-link" onclick="smoothJump(event,'produkty');closeDropdown()">Produkty</a>
      <a href="#kontakt"  class="dropdown-link" onclick="smoothJump(event,'kontakt');closeDropdown()">Kontakt</a>
    </nav>

    <!-- Mobile toggle -->
    <button class="mobile-toggle" id="mobile-toggle" aria-label="Otevřít menu" aria-expanded="false" aria-controls="mobile-drawer">
      <svg width="22" height="22" viewBox="0 0 22 22" fill="none" aria-hidden="true">
        <line x1="1" y1="5"  x2="21" y2="5"  stroke="#000" stroke-width="1.5" stroke-linecap="round"/>
        <line x1="1" y1="11" x2="21" y2="11" stroke="#000" stroke-width="1.5" stroke-linecap="round"/>
        <line x1="1" y1="17" x2="21" y2="17" stroke="#000" stroke-width="1.5" stroke-linecap="round"/>
      </svg>
    </button>
  </div>

  <!-- Mobile drawer -->
  <div class="mobile-drawer" id="mobile-drawer" role="navigation" aria-label="Mobilní navigace">
    <a href="#o-nas"    onclick="smoothJump(event,'o-nas');closeMobile()">O nás</a>
    <a href="#kavarna"  onclick="smoothJump(event,'kavarna');closeMobile()">Kavárna</a>
    <a href="#oaza"     onclick="smoothJump(event,'oaza');closeMobile()">Oáza zdraví</a>
    <a href="#produkty" onclick="smoothJump(event,'produkty');closeMobile()">Produkty</a>
    <a href="#kontakt"  onclick="smoothJump(event,'kontakt');closeMobile()">Kontakt</a>
  </div>
</header>
