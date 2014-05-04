<?php
/**
 * Customize the output of menus for Foundation top bar
 */


// Add "has-dropdown" CSS class to navigation menu items that have children in a submenu.
function nav_menu_item_parent_classing( $classes, $item )
{
    global $wpdb;
    
    $has_children = $wpdb -> get_var( "SELECT COUNT(meta_id) FROM {$wpdb->prefix}postmeta WHERE meta_key='_menu_item_menu_item_parent' AND meta_value='" . $item->ID . "'" );
    
    if ( $has_children > 0 )
    {
        array_push( $classes, "has-dropdown" );
    }
    
    return $classes;
}
 
add_filter( "nav_menu_css_class", "nav_menu_item_parent_classing", 10, 2 );

// Deletes empty classes and changes the sub menu class name
function change_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/',' class="dropdown"',$menu);
    return $menu;
}
add_filter ('wp_nav_menu','change_submenu_class');


// Use the active class of the ZURB Foundation for the current menu item. (From: https://github.com/milohuang/reverie/blob/master/functions.php)
function required_active_nav_class( $classes, $item ) {
    if ( is_front_page() ) {
        $classes[] = '';
    } elseif ( $item->current == 1 || $item->current_item_ancestor == true ) {
        $classes[] = 'active';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );


?>