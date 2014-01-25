<?php

function dynamic_image_format_init() {
	register_taxonomy( 'dynamic-image-format', array( 'dynamic-image' ), array(
		'hierarchical'      => true,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts'
		),
		'labels'            => array(
			'name'                       => __( 'Dynamic image formats', 'dynamic-images' ),
			'singular_name'              => _x( 'Dynamic image format', 'taxonomy general name', 'dynamic-images' ),
			'search_items'               => __( 'Search dynamic image formats', 'dynamic-images' ),
			'popular_items'              => __( 'Popular dynamic image formats', 'dynamic-images' ),
			'all_items'                  => __( 'All dynamic image formats', 'dynamic-images' ),
			'parent_item'                => __( 'Parent dynamic image format', 'dynamic-images' ),
			'parent_item_colon'          => __( 'Parent dynamic image format:', 'dynamic-images' ),
			'edit_item'                  => __( 'Edit dynamic image format', 'dynamic-images' ),
			'update_item'                => __( 'Update dynamic image format', 'dynamic-images' ),
			'add_new_item'               => __( 'New dynamic image format', 'dynamic-images' ),
			'new_item_name'              => __( 'New dynamic image format', 'dynamic-images' ),
			'separate_items_with_commas' => __( 'Dynamic image formats separated by comma', 'dynamic-images' ),
			'add_or_remove_items'        => __( 'Add or remove dynamic image formats', 'dynamic-images' ),
			'choose_from_most_used'      => __( 'Choose from the most used dynamic image formats', 'dynamic-images' ),
			'menu_name'                  => __( 'Dynamic image formats', 'dynamic-images' ),
		),
	) );

}
add_action( 'init', 'dynamic_image_format_init' );
