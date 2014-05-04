<?php

/**
 * Left top bar
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
function foundation_top_bar_l() {
    wp_nav_menu(array( 
        'container' => false,                     // remove nav container
        'container_class' => '',                  // class of container
        'menu' => '',                             // menu name
        'menu_class' => 'left',      // adding custom nav class
        'theme_location' => 'primary', // where it's located in the theme
        'before' => '',                           // before each link <a> 
        'after' => '',                            // after each link </a>
        'link_before' => '',                      // before each link text
        'link_after' => '',                       // after each link text
        'depth' => 5                             // limit the depth of the nav
        //'fallback_cb' => false,                   // fallback function (see below)
        //'walker' => new top_bar_walker()
  ));
}


/**
 * Off Canvas
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
function foundation_offcanvas_l() {
    wp_nav_menu(array( 
        'container' => false,                     // remove nav container
        'container_class' => '',                  // class of container
        'menu' => '',                             // menu name
        'menu_class' => 'off-canvas-list',      // adding custom nav class
        'theme_location' => 'primary', // where it's located in the theme
        'before' => '',                           // before each link <a> 
        'after' => '',                            // after each link </a>
        'link_before' => '',                      // before each link text
        'link_after' => '',                       // after each link text
        'depth' => 5                             // limit the depth of the nav
        //'fallback_cb' => false,                   // fallback function (see below)
        //'walker' => new top_bar_walker()
  ));
}

?>