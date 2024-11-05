<?php

// Galleri

add_action('init', 'create_posttype_galleri');

function create_posttype_galleri() {
	register_post_type(
		'galleri',
		array(
			'labels' => array(
				'name' => __('Gallerier', 'websepeed-galleri-domain'),
				'singular_name' => __('Galleri', 'websepeed-galleri-domain'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array(
				'title',
				'excerpt',
        'editor',
				'thumbnail',
				'page-attributes',
			),
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'galleri',
			),
		)
	);

}

