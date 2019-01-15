<?php
/**
 * Dusk (Twenty Nineteen) functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dusk_2019
 */

if ( ! function_exists( 'dusk2019_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dusk2019_setup() {
	/*
	 * Probably not necessary
	 */
}
endif; // dusk2019_setup
add_action( 'after_setup_theme', 'dusk2019_setup' );

function dusk2019_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$poppins = esc_html_x( 'on', 'Poppins font: on or off', 'dusk2019' );

	if ( 'off' !== $poppins ) {
		$font_families = array();

		if ( 'off' !== $poppins ) {
			$font_families[] = 'Poppins:400,600,700,400italic,600italic';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function dusk2019_scripts() {

	/**
	 * Styles
	 */
	wp_enqueue_style( 'dusk2019-fonts', dusk2019_fonts_url(), array(), null );

}
add_action( 'wp_enqueue_scripts', 'dusk2019_scripts' );

/**
 * Enqueue supplemental block editor scripts.
 */
function dusk2019_block_editor_scripts() {

	/**
	 * Block Editor Scripts
	 */
	//wp_enqueue_script( 'dusk2019-block-editor-filters', get_theme_file_uri( '/js/block-editor-filters.js' ), array(), '1.0', true );
}
add_action( 'enqueue_block_editor_assets', 'dusk2019_block_editor_scripts' );

/**
 * Load Jetpack compatibility file.
 */
//require get_stylesheet_directory() . '/inc/jetpack.php';

