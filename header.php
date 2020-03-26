<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package synapsefitness
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$logo = get_field('logo','options');

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site" id="page">

	<div id="wrapper-navbar" class="py-2">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'synapsefitness' ); ?></a>

		<h2 id="main-nav-label" class="sr-only">
			<?php esc_html_e( 'Main Navigation', 'synapsefitness' ); ?>
		</h2>

		
		<div class="container">
			
			<div class="row justify-content-between justify-content-lg-center no-gutters">
				
				<div class="col-lg-auto align-self-center d-none d-lg-block order-2 order-xl-1">
					
					<nav id="main-nav-left" class="navbar navbar-expand-lg navbar-light" aria-labelledby="main-nav-label">
					
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary-left',
							'container_class' => 'ml-auto',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu-left',
							'depth'           => 1,
							'walker'          => new synapsefitness_WP_Bootstrap_Navwalker(),
						)
					); ?>
					
					</nav><!-- .site-navigation-left -->
					
				</div>
				
				<div class="col-auto order-1 order-xl-2 pr-lg-4 pr-xl-0">
					
					<a href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field('logo','options'), 'Full', false, array('class'=>'logo', 'style'=>'width:175px') ); ?></a>
					
				</div>
				
				<div class="col-lg-auto align-self-center d-none d-lg-block order-3">
					
					<nav id="main-nav-right" class="navbar navbar-expand-lg navbar-light" aria-labelledby="main-nav-label">
						
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary-right',
							'container_class' => 'mr-aut0',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu-right',
							'depth'           => 1,
							'walker'          => new synapsefitness_WP_Bootstrap_Navwalker(),
						)
					); ?>
					
					</nav><!-- .site-navigation-right -->
					
				</div>
				
				<div class="col-auto d-lg-none align-self-center order-2">
					
					<div class="d-flex d-md-inline-block mb-1 mb-md-0 ">
					
						<a href="<?php echo home_url('/donate'); ?>" class="btn btn-secondary d-xl-none">Donate</a>
						
					</div>
					
					<div class="d-flex d-md-inline-block">
					
						<?php shiftnav_toggle( 'shiftnav-main' , 'Menu' , array( 'icon' => 'bars' , 'class' => 'shiftnav-toggle-button') ); ?>
					
					</div>
					
				</div>
				
			</div>
		
		</div><!-- .container -->		

	</div><!-- #wrapper-navbar end -->
