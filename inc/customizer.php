<?php
/**
 * Yeni Nostalji 16 Theme Customizer.
 *
 * @package Yeni_Nostalji_16
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function yeni_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'yeni_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function yeni_customize_preview_js() {
	wp_enqueue_script( 'yeni_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'yeni_customize_preview_js' );
