<?php
/*
Plugin Name: Dynamic Images
Version: 1.0
Description: Populates image and gallery placeholders with images, matched by section name and size.
Author: Dan Ross <ross9885@gmail.com>
*/

require_once( dirname( __FILE__ ) . '/post-types/dynamic-image.php' );
require_once( dirname( __FILE__ ) . '/taxonomies/dynamic-image-section.php' );
require_once( dirname( __FILE__ ) . '/includes/template-tags.php' );

wp_enqueue_script( 'dynamic-images-carousel', plugins_url( 'scripts/dynamic-images-carousel.js', __FILE__ ), array( 'jquery' ));
wp_enqueue_style( 'dynamic-images-style', plugins_url( 'style/style.css', __FILE__ ));
