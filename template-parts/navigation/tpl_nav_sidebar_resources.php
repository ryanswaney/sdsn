<?php
  $args = array(
    'orderby' => 'title',
    'show_count' => 0,
    'pad_counts' => 0,
    'hide_empty' => 1,
    'exclude' => array( '44','47', '66', '97', '98', '102', '103'), // Exclude Feature, Thematic Group, and Relevant Thematic Group, Climdate, Data/Financing categories
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
  <li>Topics</li>
  <li class="divider"></li>
  <li><a href="/resources/publication/type/climate-change/">Climate Change</a></li>
  <li><a href="/resources/publication/type/data-monitoring-accountability/">Data, Monitoring &amp; Accountability</a></li>
  <li><a href="/resources/publication/type/financing/">Financing</a></li>
  <li><a href="/resources/publication/type/sdgs/">SDGs</a></li>
</ul>

<ul class="side-nav">
  <li>Publication Archive</li>
  <li class="divider"></li>
  <li><a href="/resources/publications">View By Date</a></li>
</ul>
