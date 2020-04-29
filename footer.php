<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package synapsefitness
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div class="container-footer wrapper-sm bg-white">

	<div class="container">

		<div class="row justify-content-center justify-content-md-end">

			<div class="col-12 col-md-9 col-xl-6">
			
				<div class="d-flex flex-column flex-md-row text-center text-md-left">
					
					<div class="pr-md-5 mb-4 mb-md-0">
					
						<a href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field('logo','options'), 'Full', false, array('style'=>'width: 200px') ); ?></a>
					
					</div>
				
					<div class="d-flex flex-column align-self-center">
						
						<p class="text-sm"><?php the_field('footer_text','options'); ?></p>
						
						<ul class="list-inline mb-0">
							
							<li class="list-inline-item"><a href="<?php echo home_url('/contact'); ?>"><i class="fa fa-envelope"></i></a></li>
							
							<li class="list-inline-item"><a href="<?php the_field('facebook','options'); ?>"><i class="fa fa-facebook-f"></i></a></li>
							
<!-- 							<li class="list-inline-item"><a href="<?php the_field('linkedin','options'); ?>"><i class="fa fa-linkedin"></i></a></li> -->
							
						</ul>
						
					</div>
					
				</div>

			</div><!--col end -->
			
			<div class="col-12 col-md-3 col-xl-6 text-center text-md-right align-self-center mt-4 mt-md-0">
				
				<div class="mb-3">
					
					<a href="<?php echo home_url('/contact-us'); ?>" class="btn btn-primary">Contact Us</a>
					
				</div>
				
			</div>

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

