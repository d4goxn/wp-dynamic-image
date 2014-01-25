<?php
/*
Plugin Name: Dynamic Images
Version: 1.0
Description: Populates image and gallery placeholders with images, matched by section name and size.
Author: Dan Ross <ross9885@gmail.com>
*/

require_once( dirname( __FILE__ ) . '/post-types/dynamic-image.php' );
require_once( dirname( __FILE__ ) . '/taxonomies/dynamic-image-section.php' );

function getRandomDynamicImage( $section, $size = 'post_thumbnail', $class = '' ) {
	// Theme function - get a random image for a section.

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
	// Theme function - get all images for a section.

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
