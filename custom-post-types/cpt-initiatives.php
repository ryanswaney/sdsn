<?php
// Register Custom Post Type
function cpt_register_sdsn_initiatives() {
	$labels = array(
		'name'                => _x( 'Solutions Initiatives', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Initiative', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Solutions Initiatives', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Initiative:', 'text_domain' ),
		'all_items'           => __( 'All Initiatives', 'text_domain' ),
		'view_item'           => __( 'View Initiative', 'text_domain' ),
		'add_new_item'        => __( 'Add New Initiative', 'text_domain' ),
		'add_new'             => __( 'New Initiative', 'text_domain' ),
		'edit_item'           => __( 'Edit Initiative', 'text_domain' ),
		'update_item'         => __( 'Update Initiative', 'text_domain' ),
		'search_items'        => __( 'Search Initiatives', 'text_domain' ),
		'not_found'           => __( 'No Initiative found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Initiative found in trash', 'text_domain' ),
	);

	$rewrite = array(
		'slug'                => 'what-we-do/solution-initiatives',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'solution-initiatives', 'text_domain' ),
		'description'         => __( 'SDSN Solution Initiatives', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 51,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);

	//register_post_type( 'solution-initiatives', $args );
	register_post_type( 'solution-initiatives', $args );
}

// Hook into the 'init' action
add_action( 'init', 'cpt_register_sdsn_initiatives', 0 );
?>