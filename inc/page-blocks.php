<?php 
	

add_action('acf/init', 'synapsefitness_acf_init');

function synapsefitness_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a hero block
		acf_register_block(array(
			'name'				=> 'hero-banner',
			'title'				=> __('Hero Banner'),
			'description'		=> __(''),
			'render_callback'	=> 'synapsefitness_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'align-center',
		));
		// register a text block
		acf_register_block(array(
			'name'				=> 'default-text',
			'title'				=> __('Text'),
			'description'		=> __(''),
			'render_callback'	=> 'synapsefitness_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'menu',
		));
		// register a card links
		acf_register_block(array(
			'name'				=> 'card-links',
			'title'				=> __('Card Links'),
			'description'		=> __(''),
			'render_callback'	=> 'synapsefitness_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'grid-view',
		));
		// register a featured fighter
		acf_register_block(array(
			'name'				=> 'featured-fighter',
			'title'				=> __('Featured Fighter'),
			'description'		=> __(''),
			'render_callback'	=> 'synapsefitness_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-users',
		));
		// register a side-by-side
		acf_register_block(array(
			'name'				=> 'side-by-side',
			'title'				=> __('Side by Side'),
			'description'		=> __(''),
			'render_callback'	=> 'synapsefitness_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'image-flip-horizontal',
		));
		// register a cta
		acf_register_block(array(
			'name'				=> 'cta',
			'title'				=> __('CTA'),
			'description'		=> __(''),
			'render_callback'	=> 'synapsefitness_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'megaphone',
		));
	}
}

function synapsefitness_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/blocks" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") ) ) {
		
		include( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") );
	
	}
}