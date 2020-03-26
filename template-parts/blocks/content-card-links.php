<?php
/**
 * Block Name: Card Links
 *
 * This is the template that displays the card links block.
 */

?>

<div class="container-card-links wrapper bg-primary">
	
	<div class="container">
		
		<div class="row justify-content-center">
			
			<?php while ( have_rows('cards') ): the_row(); ?>
			
				<div class="col-lg-4 mb-5 mb-lg-0 text-center">
					
					<?php if ( get_sub_field('card_image') ): ?>
					
						<div class="card-link-image mb-3">
							
							<?php echo wp_get_attachment_image( get_sub_field('card_image'), 'Full', false, array('class'=>'img-fluid') ); ?>
							
						</div>
						
					<?php endif; ?>
					
					<div class="mb-3">
						
						<h2><?php the_sub_field('card_title'); ?></h2>	
						
					</div>
					
					<p class="text-sm"><?php the_sub_field('card_text'); ?></p>
					
					<?php if ( get_sub_field('include_button') ): ?>
					
						<a href="<?php the_sub_field('button_link'); ?>" class="btn btn-light btn-light-primary"><?php the_sub_field('button_label'); ?></a>
					
					<?php endif; ?>
					
				</div>
			
			<?php endwhile; ?>
			
		</div>
		
	</div>
	
</div>