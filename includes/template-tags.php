<?php

function getRandomDynamicImage( $section, $size = 'post_thumbnail', $class = '' ) {
	// Template tag - get a random image for a section.

	$images = get_posts( array(
		'post_type' => 'dynamic-image',
		'dynamic-image-section' => $section,
		'orderby' => 'rand'
	));

	return get_the_post_thumbnail( $images[0]->ID, $size, array(
		'class' => $class,
		'alt' => trim( strip_tags( $images[0]->post_content )),
		'title' => trim( strip_tags( $images[0]->post_title ))
	));
}

function getDynamicImages( $section, $size = 'post_thumbnail', $class = '' ) {
	// Template tag - get all images for a section.

	$images = get_posts( array(
		'post_type' => 'dynamic-image',
		'dynamic-image-section' => $section,
		'orderby' => 'rand'
	));

	$html = '';

	foreach( $images as $image ) {
		$html .= get_the_post_thumbnail( $image->ID, $size, array(
			'class' => $class,
			'alt' => trim( strip_tags( $image->post_content )),
			'title' => trim( strip_tags( $image->post_title ))
		));
	}

	return $html;
}
