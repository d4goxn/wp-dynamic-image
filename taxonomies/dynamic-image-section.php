<?php

function dynamic_image_section_init() {
	register_taxonomy( 'dynamic-image-section', array( 'dynamic-image' ), array(
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
			'name'                       => __( 'Dynamic image sections', 'dynamic-images' ),
			'singular_name'              => _x( 'Dynamic image section', 'taxonomy general name', 'dynamic-images' ),
			'search_items'               => __( 'Search dynamic image sections', 'dynamic-images' ),
			'popular_items'              => __( 'Popular dynamic image sections', 'dynamic-images' ),
			'all_items'                  => __( 'All dynamic image sections', 'dynamic-images' ),
			'parent_item'                => __( 'Parent dynamic image section', 'dynamic-images' ),
			'parent_item_colon'          => __( 'Parent dynamic image section:', 'dynamic-images' ),
			'edit_item'                  => __( 'Edit dynamic image section', 'dynamic-images' ),
			'update_item'                => __( 'Update dynamic image section', 'dynamic-images' ),
			'add_new_item'               => __( 'New dynamic image section', 'dynamic-images' ),
			'new_item_name'              => __( 'New dynamic image section', 'dynamic-images' ),
			'separate_items_with_commas' => __( 'Dynamic image sections separated by comma', 'dynamic-images' ),
			'add_or_remove_items'        => __( 'Add or remove dynamic image sections', 'dynamic-images' ),
			'choose_from_most_used'      => __( 'Choose from the most used dynamic image sections', 'dynamic-images' ),
			'menu_name'                  => __( 'Dynamic image sections', 'dynamic-images' ),
		),
	) );

}
add_action( 'init', 'dynamic_image_section_init' );
