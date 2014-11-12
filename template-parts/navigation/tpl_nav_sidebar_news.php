<ul class="side-nav">
  <li>Upcoming Events</li>
  <li class="divider"></li>
  <li><a href="/get-involved/events/">Calendar</a></li>
</ul>

<?php
  /*
  $args = array(
    'orderby' => 'title',
    'show_count' => 0,
    'pad_counts' => 0,
    'hide_empty' => 1,
    'exclude' => '1', // Exclude "Uncategorized"
    'depth' => 1,
    'hierarchical' => true,
    'taxonomy' => 'category',
    'title_li' => ''
  );
  */
?>
<!--
<ul class="side-nav">
  <li>News Categories</li>
  <li class="divider"></li>
<?php wp_list_categories($args); ?>
</ul>
-->

<?php
  wp_nav_menu(
    array(
      'theme_location' => 'news-cat-menu',
      'items_wrap' => '<ul class="side-nav"><li id="item-id">News Categories</li><li class="divider"></li>%3$s</ul>' )
  ); ?>

<ul class="side-nav">
  <li>Archives</li>
  <li class="divider"></li>
  <li><a href="/news/archive">View By Date</a></li>
</ul>

<ul class="side-nav">
  <li>Media Requests</li>
  <li class="divider"></li>
  <li><a href="mailto:media@unsdsn.org">Contact</a></li>
</ul>