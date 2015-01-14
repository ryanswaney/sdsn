<?php
// Register Custom Post Type
function cpt_register_sdsn_publications() {
	$labels = array(
		'name'                => _x( 'Publications', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Publication', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Publications', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Publication:', 'text_domain' ),
		'all_items'           => __( 'All Publications', 'text_domain' ),
		'view_item'           => __( 'View Publication', 'text_domain' ),
		'add_new_item'        => __( 'Add New Publication', 'text_domain' ),
		'add_new'             => __( 'New Publication', 'text_domain' ),
		'edit_item'           => __( 'Edit Publication', 'text_domain' ),
		'update_item'         => __( 'Update Publication', 'text_domain' ),
		'search_items'        => __( 'Search Publications', 'text_domain' ),
		'not_found'           => __( 'No Publication found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Publication found in trash', 'text_domain' ),
	);

	$rewrite = array(
		'slug'                => 'resources/publications',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'sdsn-publications', 'text_domain' ),
		'description'         => __( 'SDSN Publications', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 50,
    'menu_icon'           => 'dashicons-media-text',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);

	register_post_type( 'sdsn-publications', $args );
}

// Hook into the 'init' action
add_action( 'init', 'cpt_register_sdsn_publications', 0 );


// Add custom taxonomy to Publications CPT
function add_custom_pub_taxonomies() {
	// Add new taxonomy to Publications
	register_taxonomy('location', 'sdsn-publications', array(
		'hierarchical' => true,
		// This array of options controls the labels displayed in the WordPress Admin UI
		'labels' => array(
			'name' => _x( 'Publication Types', 'taxonomy general name' ),
			'singular_name' => _x( 'Publication Type', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Publication Types' ),
			'all_items' => __( 'All Publication Types' ),
			'parent_item' => __( 'Parent Publication Type' ),
			'parent_item_colon' => __( 'Parent Publication Type:' ),
			'edit_item' => __( 'Edit Publication Type' ),
			'update_item' => __( 'Update Publication Type' ),
			'add_new_item' => __( 'Add New Publication Type' ),
			'new_item_name' => __( 'New Publication Type' ),
			'menu_name' => __( 'Publication Types' ),
		),
		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => 'resources/publication/type', // This controls the base slug that will display before each term
			'with_front' => false, // Don't display the category base before "resources/publications/type"
			'hierarchical' => true // This will allow URL's like "/resources/publications/type/report/tg01/"
		),
		'show_ui' => true, // Add taxonomy to WordPress menus
		'show_admin_column' => true
	));
}
add_action( 'init', 'add_custom_pub_taxonomies', 0 );


?>