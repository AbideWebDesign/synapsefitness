<?php
/**
 * Block Name: Side by Side
 *
 * This is the template that displays the side by side block.
 */

?>

<div class="container-side <?php the_field('background_color'); ?> <?php the_field('text_color'); ?> wrapper">
	
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-md-10 col-lg-6 align-self-center text-white mb-4 mb-lg-0">
				
				<h2 class="mb-3"><?php the_field('title'); ?></h2>
				
				<div class="text-lg mb-0"><?php the_field('text'); ?></div>
				
				<?php if ( get_field('include_button') ): ?>
				
					<div class="mt-4">
					
						<a href="<?php the_field('button_link'); ?>" class="btn btn-white"><?php the_field('button_label'); ?></a>
				
					</div>
					
				<?php endif; ?>
				
			</div>
			
			<div class="col-md-10 col-lg-6">
			
				<div class="bg-light p-2">
					
					<?php echo wp_get_attachment_image( get_field('image'), 'Side by Side', false, array('class'=>'img-fluid') ); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
