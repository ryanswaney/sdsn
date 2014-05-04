<?php
// Register Custom Post Type
function cpt_register_sdsn_people() {
	$labels = array(
		'name'                => _x( 'People', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Person', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'People', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Person:', 'text_domain' ),
		'all_items'           => __( 'All People', 'text_domain' ),
		'view_item'           => __( 'View Person', 'text_domain' ),
		'add_new_item'        => __( 'Add New Person', 'text_domain' ),
		'add_new'             => __( 'New Person', 'text_domain' ),
		'edit_item'           => __( 'Edit Person', 'text_domain' ),
		'update_item'         => __( 'Update Person', 'text_domain' ),
		'search_items'        => __( 'Search People', 'text_domain' ),
		'not_found'           => __( 'No Person found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Person found in trash', 'text_domain' ),
	);

	$rewrite = array(
		'slug'                => 'about-us/people',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'people', 'text_domain' ),
		'description'         => __( 'The people of SDSN', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 53,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);

	register_post_type( 'sdsn-people', $args );
}

// Hook into the 'init' action
add_action( 'init', 'cpt_register_sdsn_people', 0 );
?>