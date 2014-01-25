<?php

function dynamic_image_init() {
	register_post_type( 'dynamic-image', array(
		'hierarchical'      => false,
		'public'            => true,
		'exclude_from_search' => true,
		'publicly_queryable' => false,
		'show_in_nav_menus' => false,
		'show_in_menu'      => true,
		'show_ui'           => true,
		'supports'          => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'       => true,
		'query_var'         => true,
		'rewrite'           => true,
		'menu_icon'         => 'dashicons-images-alt',
		'labels'            => array(
			'name'                => __( 'Dynamic Images', 'dynamic-images' ),
			'singular_name'       => __( 'Dynamic Image', 'dynamic-images' ),
			'description'         => __( 'An image, to be randomly placed in a specific section of the theme.', 'dynamic-images' ),
			'all_items'           => __( 'Dynamic Images', 'dynamic-images' ),
			'new_item'            => __( 'New Dynamic Image', 'dynamic-images' ),
			'add_new'             => __( 'Add New', 'dynamic-images' ),
			'add_new_item'        => __( 'Add New Dynamic Image', 'dynamic-images' ),
			'edit_item'           => __( 'Edit Dynamic Image', 'dynamic-images' ),
			'view_item'           => __( 'View Dynamic Image', 'dynamic-images' ),
			'search_items'        => __( 'Search Dynamic Images', 'dynamic-images' ),
			'not_found'           => __( 'No Dynamic Images found', 'dynamic-images' ),
			'not_found_in_trash'  => __( 'No Dynamic Images found in trash', 'dynamic-images' ),
			'parent_item_colon'   => __( 'Parent Dynamic Image', 'dynamic-images' ),
			'menu_name'           => __( 'Dynamic Images', 'dynamic-images' ),
		),
	) );

}
add_action( 'init', 'dynamic_image_init' );

function dynamic_image_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['dynamic-image'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Dynamic Image updated. <a target="_blank" href="%s">View Dynamic Image</a>', 'dynamic-images'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'dynamic-images'),
		3 => __('Custom field deleted.', 'dynamic-images'),
		4 => __('Dynamic Image updated.', 'dynamic-images'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Dynamic Image restored to revision from %s', 'dynamic-images'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Dynamic Image published. <a href="%s">View Dynamic Image</a>', 'dynamic-images'), esc_url( $permalink ) ),
		7 => __('Dynamic Image saved.', 'dynamic-images'),
		8 => sprintf( __('Dynamic Image submitted. <a target="_blank" href="%s">Preview Dynamic Image</a>', 'dynamic-images'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Dynamic Image scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Dynamic Image</a>', 'dynamic-images'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Dynamic Image draft updated. <a target="_blank" href="%s">Preview Dynamic Image</a>', 'dynamic-images'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'dynamic_image_updated_messages' );
