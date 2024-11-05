<?php

add_shortcode('gallerier', 'webspeed_gallerier');
function webspeed_gallerier($atts) {
	global $post;
	ob_start();

	// define attributes and their defaults
	extract(shortcode_atts(array(
    'grid' => 'g-d-4',
		'number' => '-1',
		'type' => '',
	), $atts));




/* -------------------------------------- */
if (empty($type)) {
	$loop = new WP_Query( array(
		'post_type' => 'galleri',
		'posts_per_page' => $number, 
	));
} else {
	$loop = new WP_Query( array(
		'post_type' => 'galleri',
		'posts_per_page' => $number,
		'tax_query' => array(
				array(
					'taxonomy' => 'galleri-type',
					'field' => 'slug',
					'terms' => $type,
				),
			), 
	));
}
/* -------------------------------------- */


	if ($loop->have_posts()) {

		echo '<div class="galleri-shortcode grid gap ' . $grid . '">';
		while ($loop->have_posts()): $loop->the_post();
			echo '<div id="post-id-' . get_the_ID() . '" class="galleri-item item-bg">';
        web_blog_thumbnail();
				echo '<div class="galleri-item_txt">';
        	echo '<p class="galleri-title"><strong><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></strong></p>';
        	the_excerpt();
					echo '</div>';
      echo '</div>';

		endwhile;
		wp_reset_query();
		echo '</div>';

	}

	$myvariable = ob_get_clean();
	return $myvariable;
}
