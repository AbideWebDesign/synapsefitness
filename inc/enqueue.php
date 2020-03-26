<?php
/**
 * synapsefitness enqueue scripts
 *
 * @package synapsefitness
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'synapsefitness_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function synapsefitness_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'synapsefitness-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'synapsefitness-sans-font', 'https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap', array(), $css_version );
		wp_enqueue_style( 'synapsefitness-serif-font', 'https://use.typekit.net/inl8qyc.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'synapsefitness-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
	}
} // endif function_exists( 'synapsefitness_scripts' ).

add_action( 'wp_enqueue_scripts', 'synapsefitness_scripts' );
