<?php
// Register Custom Post Type
function cpt_register_sdsn_press() {
	$labels = array(
		'name'                => _x( 'Press', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Press', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Press', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Press:', 'text_domain' ),
		'all_items'           => __( 'All Press', 'text_domain' ),
		'view_item'           => __( 'View Press', 'text_domain' ),
		'add_new_item'        => __( 'Add New Press', 'text_domain' ),
		'add_new'             => __( 'New Press', 'text_domain' ),
		'edit_item'           => __( 'Edit Press', 'text_domain' ),
		'update_item'         => __( 'Update Press', 'text_domain' ),
		'search_items'        => __( 'Search Press', 'text_domain' ),
		'not_found'           => __( 'No Press found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Press found in trash', 'text_domain' ),
	);

	$rewrite = array(
		'slug'                => 'press',
		'with_front'          => false,
		'pages'               => false,
		'feeds'               => false,
	);

	$args = array(
		'label'               => __( 'press', 'text_domain' ),
		'description'         => __( 'SDSN in Press', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 50,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'query_var'           => false,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);

	register_post_type( 'sdsn-press', $args );
}

// Hook into the 'init' action
add_action( 'init', 'cpt_register_sdsn_press', 0 );
?>