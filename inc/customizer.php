<?php
/**
 * Dusk 2019: Customizer
 *
 * @package WordPress
 * @subpackage Dusk 2019
 * @since 1.0.0
 */

/**
 * Change the label of the Site Title option.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dusk2019_customize_register( $wp_customize ) {
    $wp_customize->get_control( 'header_text' )->label = __( 'Display Site Title', 'dusk2019' );
}
add_action( 'customize_register', 'dusk2019_customize_register' );