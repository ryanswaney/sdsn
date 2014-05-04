<?php
  /** CPT Query: sdsn-publications
  *** Get recent posts from publications, limited to a subset of custom taxonomies.
  *** Taxonomy ref: About the SDSN
  **/
  $args = array(
    'post_type' => 'sdsn-publications',
    'posts_per_page' => 3,
    'tax_query' => array(
      array (
        'taxonomy' => 'location',
        'field' => 'slug',
        'terms' => array( 'sdsn-issue-briefs' ),
        'operator' => 'IN'
        )
      )    
    ); ?>

<?php $pubs_by_term = get_posts( $args ); ?>

<?php if ( !empty( $pubs_by_term ) ) : ?>

<h4 class="border-top margin-bottom-2"><a href="/resources/publication/type/sdsn-issue-briefs/">SDSN Issue Briefs</a></h4>

<ul class="small-block-grid-1 medium-block-grid-3">
<?php foreach ( $pubs_by_term as $post ) : setup_postdata( $post ); ?>
  <li>
    <article class="post blurb clearfix">
      <header>
      <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumb', array( 'class' => 'feature-photo right' ) ); ?></a>
      <?php endif; ?> 
        <div class="post-meta"><time datetime="<?php the_time('Y-n-D'); ?>" pubdate><?php the_time('M j, Y'); ?></time></div>
        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
      </header>
      <?php the_excerpt(); ?>
    </article>
  </li>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
</ul>

<?php endif; ?>