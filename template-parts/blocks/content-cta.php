<?php
/**
 * Block Name: CTA
 *
 * This is the template that displays the cta block.
 */

?>

<div class="container-cta <?php the_field('background_color'); ?> wrapper-sm">
	
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-12 col-md-8 col-lg-auto align-self-center text-center text-md-left mb-4 mb-md-0">
				
				<h3 class="mb-0"><?php the_field('title'); ?></h3>
				
			</div>
			
			<?php if ( get_field('include_button') ): ?>
				
				<div class="col-12 col-md-auto text-center text-md-right">
				
					<a href="<?php the_field('button_link'); ?>" class="btn btn-white"><?php the_field('button_label'); ?></a>
			
				</div>
					
			<?php endif; ?>
			
		</div>
		
	</div>
	
</div>
