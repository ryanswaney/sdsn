<?php

  /** Custom Category Archive Filter
  *** Allows for a custom amount of posts to be show on category pages
  **/
  function custom_category_limit( $query ) {
    // Ignore this filter if this is the main query or in WP admin
    if ( is_admin() || ! $query->is_main_query() )
      return;

    if ( is_archive(category-i.d) ) {
      $query->set( 'posts_per_page', -1 ); // show all posts -1
      return;
    }
  }

  add_action( 'pre_get_posts', 'custom_category_limit', 1 );

?>