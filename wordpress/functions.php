<?php
/**
 * Twenty Twenty-Five Child Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

add_action( 'wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_styles' );

/**
 * Enqueue styles for the parent and child themes.
 */
function twentytwentyfive_child_enqueue_styles() {
	$parent_style = 'twentytwentyfive-style';
	$theme        = wp_get_theme();

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array(), $theme->parent()->get( 'Version' ) );
	wp_enqueue_style( 'twentytwentyfive-child-style', get_stylesheet_uri(), array( $parent_style ), $theme->get( 'Version' ) );
}