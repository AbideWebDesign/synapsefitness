<?php
/**
 * Template Name: Event Page
 *
 * @package synapsefitness
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="container wrapper">
	
	<div class="bg-white p-5">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>
			
		<?php endwhile; // end of the loop. ?>

	</div>
	
</div><!-- #page-wrapper -->

<?php get_footer();
