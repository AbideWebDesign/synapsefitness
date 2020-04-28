<?php
/**
 * Block Name: Card Links
 *
 * This is the template that displays the card links block.
 */

$card_class = ( get_field('type') == 'Images' ? 'card-link-image' : 'card-link-icon' );

?>

<div class="container-card-links wrapper bg-primary">
	
	<div class="container">
		
		<div class="row justify-content-center">
			
			<?php while ( have_rows('cards') ): the_row(); ?>
			
				<div class="col-lg-4 mb-5 mb-lg-0 text-center">
					
					<?php if ( get_sub_field('card_image') ): ?>
					
						<div class="<?php echo $card_class; ?> mb-3">
							
							<?php if ( get_field('type') == 'Images' ): ?>
								
								<div class="bg-white p-2">
									
									<?php if ( get_sub_field('include_button') ): ?>
					
										<a href="<?php the_sub_field('button_link'); ?>">
											
									<?php endif; ?>
									
									<?php echo wp_get_attachment_image( get_sub_field('card_image'), 'Card Image', false, array('class'=>'img-fluid') ); ?>
									
									<?php if ( get_sub_field('include_button') ): ?>
					
										</a>
											
									<?php endif; ?>
									
								</div>
								
							<?php else: ?>
							
								<?php echo wp_get_attachment_image( get_sub_field('card_image'), 'Full', false, array('class'=>'img-fluid') ); ?>
							
							<?php endif; ?>
							
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