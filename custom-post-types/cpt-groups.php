<?php
// Register Custom Post Type
function cpt_register_sdsn_groups() {
	$labels = array(
		'name'                => _x( 'Thematic Groups', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Thematic Group', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Thematic Groups', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Group:', 'text_domain' ),
		'all_items'           => __( 'All Groups', 'text_domain' ),
		'view_item'           => __( 'View Group', 'text_domain' ),
		'add_new_item'        => __( 'Add New Group', 'text_domain' ),
		'add_new'             => __( 'New Group', 'text_domain' ),
		'edit_item'           => __( 'Edit Group', 'text_domain' ),
		'update_item'         => __( 'Update Group', 'text_domain' ),
		'search_items'        => __( 'Search Thematic Groups', 'text_domain' ),
		'not_found'           => __( 'No Group found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Group found in trash', 'text_domain' ),
	);

	$rewrite = array(
		'slug'                => '/what-we-do/thematic-networks',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'groups', 'text_domain' ),
		'description'         => __( 'The Thematic Groups of SDSN', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 51,
		'menu_icon'						=> 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);

	register_post_type( 'sdsn-groups', $args );
}

// Hook into the 'init' action
add_action( 'init', 'cpt_register_sdsn_groups', 0 );
?>