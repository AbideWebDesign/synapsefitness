<?php
/**
 * synapsefitness functions and definitions
 *
 * @package synapsefitness
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$synapsefitness_includes = array(
	'/setup.php',                           // Theme setup and custom theme supports.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/pagination.php',                      // Custom pagination for this theme.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/editor.php',                          // Load Editor functions.
	'/page-blocks.php',						// Load ACF page blocks.
);

foreach ( $synapsefitness_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}
