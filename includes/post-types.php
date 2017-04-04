<?php
function yourprofile_testimonial_custom_post_type() {
	// Testimonial
	$labels = [ 
		'name'	=> __('Testimonials','yourprofile'), 
		'singular_name' => __('Testimonial','yourprofile') 
	];
	$args = [
		'labels'      => $labels,
		'public'      => true,
		'has_archive' => true,
		'capability_type'	=> 'post',
		'supports'	=>	[
			'thumbnail',
			'title',
			'editor'
		],
		'exclude_from_search'	=> true,
		'menu_icon'	=>	'dashicons-editor-quote'
	];
	register_post_type('testimonial', $args);

	// Portfolio
	$labels = [ 
		'name'	=> __('Service','yourprofile'), 
		'singular_name' => __('Services','yourprofile') 
	];
	$args = [
		'labels'      => $labels,
		'public'      => true,
		'has_archive' => true,
		'capability_type'	=> 'post',
		'supports'	=>	[
			'thumbnail',
			'title',
			'editor',
			'excerpt'
		],
		'exclude_from_search'	=> false,
		'menu_icon'	=>	'dashicons-pressthis'
	];
	register_post_type('Services', $args);
}
add_action('init', 'yourprofile_testimonial_custom_post_type');