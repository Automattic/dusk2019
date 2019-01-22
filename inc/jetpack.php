<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.com/
 *
 * @package Dusk_2019
 */
/**
 * Jetpack Setup
 */
function dusk2019_jetpack_setup() {
	/*
	 * The Parent theme alredy comes with Jetpack compatibility
	 *
	 * Tweaking the compatibility rules might be done here,
	 * if even necessary at all.
	 */
}
add_action( 'after_setup_theme', 'dusk2019_jetpack_setup' );

/**
 * Enqueue Jetpack-specific styles
 *
 * We need to enqueue some additional CSS to override the
 * parent theme’s fonts which are pre-baked into JetPack.
 *
 * See `dusk2019/style-jetpack.scss`
 * Also see: https://github.com/Automattic/jetpack/blob/master/modules/theme-tools/compat/twentynineteen.css
 */
function dusk2019_jetpack_styles() {
	wp_enqueue_style( 'dusk2019-jetpack', get_stylesheet_directory_uri() . '/style-jetpack.css', '20190122' );
}
add_action( 'wp_enqueue_scripts', 'dusk2019_jetpack_styles' );
