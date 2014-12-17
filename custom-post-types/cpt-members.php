<?php
// Register Custom Post Type
function cpt_register_sdsn_members() {
	$labels = array(
		'name'                => _x( 'Members', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Member', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Members', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Member:', 'text_domain' ),
		'all_items'           => __( 'All Members', 'text_domain' ),
		'view_item'           => __( 'View Member', 'text_domain' ),
		'add_new_item'        => __( 'Add New Member', 'text_domain' ),
		'add_new'             => __( 'New Member', 'text_domain' ),
		'edit_item'           => __( 'Edit Member', 'text_domain' ),
		'update_item'         => __( 'Update Member', 'text_domain' ),
		'search_items'        => __( 'Search Members', 'text_domain' ),
		'not_found'           => __( 'No Member found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Member found in trash', 'text_domain' ),
	);

	$rewrite = array(
		'slug'                => 'where-we-work/members',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'members', 'text_domain' ),
		'description'         => __( 'The members of SDSN', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'author' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 53,
		'menu_icon'						=> 'dashicons-location-alt',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);

	register_post_type( 'members', $args );
}

// Hook into the 'init' action
add_action( 'init', 'cpt_register_sdsn_members', 0 );
?>