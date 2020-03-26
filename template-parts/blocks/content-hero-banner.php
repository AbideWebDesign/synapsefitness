<?php
/**
 * Block Name: Hero Banner
 *
 * This is the template that displays the hero banner block.
 */

// get group field (array)
$banner_settings = get_field('hero_banner_settings');
$banner_content = get_field('hero_banner_content');

$image = wp_get_attachment_image_src( $banner_content['image']['id'], 'Hero Banner' );

if ( $banner_settings['banner_type'] == 'Plain' ) {

	$banner_classes = 'hero-banner-default';
	
} elseif ( $banner_settings['banner_type'] == 'Text' ) {
	
	$banner_classes = 'hero-banner-text';
	
} elseif ( $banner_settings['banner_type'] == 'Box' ) {

	$banner_classes = 'hero-banner-box d-flex align-items-end';
	
}

?>

<div class="container-hero">

	<?php if ( $banner_settings['banner_type'] == 'Text' ): ?>

		<div class="hero-banner <?php echo $banner_classes; ?>" style="background-image: url( <?php echo $image[0]; ?> )">

			<div class="container">
				
				<div class="row <?php echo ($banner_settings['banner_type'] == 'Text' ? $banner_settings['text_position'] : ''); ?>">
	
					<div class="col-md-10 col-lg-7 col-xl-7">
	
						<div class="hero-header <?php echo $banner_settings['text_color']; ?>">
	
							<h1><?php echo $banner_content['title']; ?></h1>
							
						</div>
	
					</div>
					
				</div>
				
			</div>
			
		</div>
				
	<?php elseif ( $banner_settings['banner_type'] == 'Box' ): ?>
	
		<div class="hero-banner" style="background-image: url( <?php echo $image[0]; ?> )"></div>

		<div class="hero-banner-box container">
			
			<div class="row justify-content-center">
				
				<div class="col-12 col-md-10 col-xl-6">
					
					<div class="bg-white py-3 px-2 p-md-4">
						
						<h1 class="mb-0"><?php echo $banner_content['title']; ?></h1>
						
					</div>
					
					<?php if ( $banner_content['include_button'] ): ?>
					
						<div class="hero-banner-box-btn">
						
							<a href="<?php echo $banner_content['button_link'];?>" class="btn btn-secondary"><?php echo $banner_content['button_label'];?></a>
						
						</div>
						
					<?php endif; ?>
					
				</div>
				
			</div>
			
		</div>
			
	<?php endif; ?>
		
</div>