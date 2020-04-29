<?php
/**
 * Block Name: Featured Fighter
 *
 * This is the template that displays the featured figther block.
 */

?>

<div class="container-featured-fighter wrapper bg-white">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col text-center">
				
				<h2 class="d-md-inline-block bg-accent text-white p-4 mb-5"><?php the_field('title'); ?></h2>	
				
			</div>
			
		</div>
		
		<div class="row justify-content-center no-gutters align-items-stretch">
			
			<div class="col-md-10 col-lg-5 align-self-lg-center">
				
				<?php echo wp_get_attachment_image( get_field('image'), 'Fighter', false, array('class'=>'img-fluid w-100') ); ?>
				
			</div>
			
			<div class="col-md-10 col-lg-7 align-content-center">
				
				<div class="bg-md-light py-4 p-md-5 h-100 d-flex">
					
					<div class="align-self-center">
					
						<h3><?php the_field('name'); ?></h3>
						
						<div class="mb-4">
							
							<?php the_field('story'); ?>
							
						</div>
						
						<div class="call-out mb-4">
						
							<?php the_field('call_out'); ?>
							
						</div>
						
						<div class="text-center text-lg-left">
							
							<a href="<?php echo home_url('/our-fighters'); ?>" class="btn btn-accent">Read More Stories</a>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>