<?php

global $post;

if ( $post->post_parent ) {

     echo '<!--'. $post->post_parent .'-->';

     $args = array(
          'sort_column' => 'menu_order',
          'title_li'    => '',
          'child_of'    => $post->post_parent,
          'depth'       => 2,
          'echo'        => 1
     );

} else {

     $args = array(
          'sort_column' => 'menu_order',
          'title_li'    => '',
          'child_of'    => $post->ID,
          'depth'       => 1,
          'echo'        => 1
     );

}
?>
<ul class="side-nav">
<li><?php echo get_the_title($post->post_parent); ?></li>
<li class="divider"></li>
<?php wp_list_pages( $args ); ?>
</ul>