<?php
/**
 * Theme basic setup
 *
 * @package synapsefitness
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'synapsefitness_setup' );

if ( ! function_exists( 'synapsefitness_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function synapsefitness_setup() {


		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary-left' => __( 'Primary Left Menu', 'synapsefitness' ),
			'primary-right' => __( 'Primary Right Menu', 'synapsefitness' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
		
	}
}

/*
 * Admin bar customizations
 *
 */
function admin_bar_render() {
	
    global $wp_admin_bar;
	$wp_admin_bar->remove_menu('customize');
    $wp_admin_bar->remove_node('wp-logo');
    $wp_admin_bar->remove_menu('new-post');
    $wp_admin_bar->remove_menu('search');
    $wp_admin_bar->remove_menu('themes');
    $wp_admin_bar->remove_menu('widgets');
    $wp_admin_bar->remove_node('updates');
    $wp_admin_bar->remove_menu('searchwp');
    $wp_admin_bar->remove_menu('delete-cache');
	$wp_admin_bar->remove_menu('litespeed-menu');
	
}
add_action( 'wp_before_admin_bar_render', 'admin_bar_render' );

/*
 * Remove unused dashboard widgets
 *
 */
function remove_dashboard_widgets() {
	
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); 
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);

}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

/*
 * Add custom favicon to admin pages
 *
 */
function add_login_favicon() {
	
	$favicon_url = get_stylesheet_directory_uri() . '/favicon.png';

	echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
	
}
add_action('login_head', 'add_login_favicon');
add_action('admin_head', 'add_login_favicon');
add_action('wp_head', 'add_login_favicon');

/*
 * Image sizes
 *
 */
add_image_size('Side Cover', 1067, 1600, true);
add_image_size('Hero Banner', 2000, 600, true);

/*
 * Set excerpt
 *
 */
add_filter( 'excerpt_more', 'synapsefitness_custom_excerpt_more' );

if ( ! function_exists( 'synapsefitness_custom_excerpt_more' ) ) {
	/**
	 * Removes the ... from the excerpt read more link
	 *
	 * @param string $more The excerpt.
	 *
	 * @return string
	 */
	function synapsefitness_custom_excerpt_more( $more ) {
		if ( ! is_admin() ) {
			$more = '';
		}
		return $more;
	}
}

add_filter( 'wp_trim_excerpt', 'synapsefitness_all_excerpts_get_more_link' );

if ( ! function_exists( 'synapsefitness_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function synapsefitness_all_excerpts_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . ' [...]<p><a class="btn btn-secondary synapsefitness-read-more-link" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'Read More...',
			'synapsefitness' ) . '</a></p>';
		}
		return $post_excerpt;
	}
}

/**
* ACF Options Page
*/
if ( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

// Relocate ical and gcal links below meta
add_action( 'tribe_events_single_event_after_the_meta', array( tribe( 'tec.iCal' ), 'single_event_links' ), 5 );
remove_action( 'tribe_events_single_event_after_the_content', array( tribe( 'tec.iCal' ), 'single_event_links' ) );

function tribe_get_event_website_link_label_default ($label) {
	if( $label == tribe_get_event_website_url() ) {
		$label = "Register &raquo;";
	}

	return $label;
}
 
add_filter( 'tribe_get_event_website_link_label', 'tribe_get_event_website_link_label_default' );