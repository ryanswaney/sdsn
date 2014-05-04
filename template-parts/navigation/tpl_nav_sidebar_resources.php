<?php
  $args = array(
    'orderby' => 'title',
    'show_count' => 0,
    'pad_counts' => 0,
    'hide_empty' => 1,
    'exclude' => array( '44','47', '66'), // Exclude Feature, Thematic Group, and Relevant Thematic Group categories
    'depth' => 1,
    'hierarchical' => true,
    'taxonomy' => 'location', // Publication Type, cpt-publications.php
    'title_li' => ''
  );
?>
<ul class="side-nav">
  <li>Publication Types</li>
  <li class="divider"></li>
<?php wp_list_categories($args); ?>
</ul>

<ul class="side-nav">
  <li>Publication Archive</li>
  <li class="divider"></li>
  <li><a href="/resources/publications">View By Date</a></li>
</ul>
