<?php
/**
 * Bilerbin Theme — functions.php
 */

// ── Theme setup ──────────────────────────────────────────
add_action( 'after_setup_theme', 'bilerbin_setup' );
function bilerbin_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', [
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script',
	] );
}

// ── Enqueue assets ───────────────────────────────────────
add_action( 'wp_enqueue_scripts', 'bilerbin_enqueue_assets' );
function bilerbin_enqueue_assets() {
	// Google Fonts
	wp_enqueue_style(
		'bilerbin-fonts',
		'https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Italiana&family=Inter:wght@400;500&display=swap',
		[],
		null
	);

	// Main stylesheet (style.css in theme root)
	wp_enqueue_style(
		'bilerbin-style',
		get_stylesheet_uri(),
		[ 'bilerbin-fonts' ],
		'1.0.0'
	);

	// Main JavaScript (loaded in footer so DOM is ready)
	wp_enqueue_script(
		'bilerbin-main',
		get_template_directory_uri() . '/js/main.js',
		[],
		'1.0.0',
		true
	);
}

// ── Preconnect hints for Google Fonts (must come first) ──
add_action( 'wp_head', 'bilerbin_preconnect_fonts', 1 );
function bilerbin_preconnect_fonts() {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com"/>' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>' . "\n";
}
