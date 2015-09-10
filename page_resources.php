<?php
/**
 * Template Name: Resources Archive
 *
 * The template for displaying the Resources frontpage.
 *
 */
?>
<?php 
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/headers/tpl_header_site',
      'template-parts/headers/tpl_header_branding',
      'template-parts/navigation/tpl_nav_topbar',
      'template-parts/navigation/tpl_nav_offcanvas'
    )
); ?>

<?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_resources' ) ); ?>


<div class="row">

  <div class="small-12 large-2 columns show-for-large-up">
    <?php Starkers_Utilities::get_template_parts( array( 'template-parts/navigation/tpl_nav_sidebar_resources' ) ); ?>
  </div>

  <div class="small-12 large-10 columns">

  <?php
      /** CPT Query: sdsn-publications
      *** Get recent posts from publications, limited to a subset of custom taxonomies.
      *** Taxonomy ref: Feature
      **/
      $args = array(
        'post_type' => 'sdsn-publications',
        'posts_per_page' => 5,
        'tax_query' => array(
          array (
            'taxonomy' => 'location',
            'field' => 'slug',
            'terms' => array( 'feature' ),
            'operator' => 'IN'
          )
        )
        
    ); ?>

    <?php $pubs_by_term = get_posts( $args ); ?>

    <?php if ( !empty($pubs_by_term) ) :?>

    <div class="row">
      <div class="small-12 large-10 columns">

    <?php foreach ( $pubs_by_term as $post ) : setup_postdata( $post ); ?>
        <article class="post border-bottom-0 clearfix">
          <header>
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_post_thumbnail( 'medium', array( 'class' => 'feature-photo thmb right' ) ); ?></a>
          <?php endif; ?> 
            <div class="post-meta">Feature</div>
            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
          </header>
          <?php the_excerpt(); ?>


<?php
    /** Get ACF Fields
    *** Field Group: CPT -- Publications
    *** Queried Field(s): sdsn_publication_flex_file
    **/
    ?> 
    <?php if( have_rows('sdsn_publication_flex_file') ): ?>

      <?php // Find out how many files we have available for download ?>
      <?php $rows = get_field('sdsn_publication_flex_file'); ?>
      <?php $row_count = count( $rows ); ?>

      <?php if( $row_count > 1 ) : ?>

        <button href="#" data-dropdown="publication-download" class="button tiny radius dropdown">Download Publication</button>
        <ul id="publication-download" data-dropdown-content class="medium f-dropdown">
        <?php while ( have_rows('sdsn_publication_flex_file') ) : the_row(); ?>

          <li><a href="<?php the_sub_field('sdsn_publication_flex_file_attachment'); ?>"><?php the_sub_field('sdsn_publication_flex_file_title'); ?></a></li>

        <?php endwhile; ?>
        </ul>

        <?php //echo $row_count; ?>

      <?php else : ?>

        <?php while ( have_rows('sdsn_publication_flex_file') ) : the_row(); ?>

        <a href="<?php the_sub_field('sdsn_publication_flex_file_attachment'); ?>" class="button tiny radius">Download Publication</a>

      <?php endwhile; ?>


      <?php endif; ?>


    <?php endif; ?>


    <?php
    /** Get ACF Fields
    *** Field Group: CPT -- Publications
    *** Queried Field(s): sdsn_publication_supplemental_flex_file
    **/
    ?> 
    <?php if( have_rows('sdsn_publication_supplemental_flex_file') ): ?>

      <?php // Find out how many files we have available for download ?>
      <?php $row = ''; ?>
      <?php $rows = get_field('sdsn_publication_supplemental_flex_file'); ?>
      <?php $row_count = count( $rows ); ?>

      <?php if( $row_count > 1 ) : ?>

        <a href="#" data-dropdown="publication-sup-download" class="button tiny radius dropdown">Download Supplemental Files</a>
        <ul id="publication-sup-download" data-dropdown-content class="medium f-dropdown">
        <?php while ( have_rows('sdsn_publication_supplemental_flex_file') ) : the_row(); ?>

          <li><a href="<?php the_sub_field('sdsn_publication_supplemental_flex_file_attachment'); ?>"><?php the_sub_field('sdsn_publication_supplemental_flex_file_title'); ?></a></li>

        <?php endwhile; ?>
        </ul>

        <?php //echo $row_count; ?>

      <?php else : ?>

        <?php while ( have_rows('sdsn_publication_supplemental_flex_file') ) : the_row(); ?>

        <a href="<?php the_sub_field('sdsn_publication_supplemental_flex_file_attachment'); ?>" class="button tiny radius">Download <?php the_sub_field('sdsn_publication_supplemental_flex_file_title'); ?></a>

      <?php endwhile; ?>


      <?php endif; ?>


    <?php endif; ?>





        </article>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>

      </div>
    </div>

    <?php endif; ?>



    <?php
      /** CPT Query: sdsn-publications
      *** Get recent posts from publications, limited to a subset of custom taxonomies.
      *** Taxonomy ref: SDSN Reports
      **/
      $args = array(
        'post_type' => 'sdsn-publications',
        'posts_per_page' => 2,
        'tax_query' => array(
          'relationship' => 'AND',
          array (
            'taxonomy' => 'location',
            'field' => 'slug',
            'terms' => array( 'sdsn-reports' ),
            'operator' => 'IN'
          ),
          array(
            'taxonomy' => 'location',
            'field' => 'slug',
            'terms' => array( 'feature' ),
            'operator' => 'NOT IN'

          )
        )
        
    ); ?>

    <?php $pubs_by_term = get_posts( $args ); ?>

    <h4 class="border-top margin-bottom-2"><a href="/resources/publication/type/sdsn-reports/">SDSN Reports</a></h4>

    <ul class="small-block-grid-1 medium-block-grid-2">

    <?php foreach ( $pubs_by_term as $post ) : setup_postdata( $post ); ?>
      <li>
        <article class="post blurb clearfix">
          <header>
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_post_thumbnail( 'thumb', array( 'class' => 'feature-photo thmb right' ) ); ?></a>
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


    <?php
      /** CPT Query: sdsn-publications
      *** Get recent posts from publications, limited to a subset of custom taxonomies.
      *** Taxonomy ref: Thematic Group Reports NOT Briefing Papers, NOT Feature
      **/
      $args = array(
        'post_type' => 'sdsn-publications',
        'posts_per_page' => 2,
        'tax_query' => array(
          'relation' => 'AND',
          array (
            'taxonomy' => 'location',
            'field' => 'slug',
            'terms' => array( 'working-papers', 'feature' ),
            'operator' => 'NOT IN'
          ),
          array (
            'taxonomy' => 'location',
            'field' => 'slug',
            'terms' => array( 'thematic-group-reports' ),
            'include_children' => true,
            'operator' => 'IN' ) 
          )
        
    ); ?>

    <?php $pubs_by_term = get_posts( $args ); ?>

    <h4 class="border-top margin-bottom-2"><a href="/resources/publication/type/thematic-group-reports/">Thematic Group Reports</a></h4>

    <ul class="small-block-grid-1 medium-block-grid-2">

    <?php foreach ( $pubs_by_term as $post ) : setup_postdata( $post ); ?>
      <li>
        <article class="post blurb clearfix">
          <header>
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_post_thumbnail( 'thumb', array( 'class' => 'feature-photo thmb right' ) ); ?></a>
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



<?php Starkers_Utilities::get_template_parts( array( 'template-parts/content/tpl-pubtype-issues-briefs' ) ); ?>




    <?php
      /** CPT Query: sdsn-publications
      *** Get recent posts from publications, limited to a subset of custom taxonomies.
      *** Taxonomy ref: Working Papers, NOT Feature
      **/
      $args = array(
        'post_type' => 'sdsn-publications',
        'posts_per_page' => 3,
        'tax_query' => array(
          'relationship' => 'AND',
          array (
            'taxonomy' => 'location',
            'field' => 'slug',
            'terms' => array( 'working-papers' ),
            'operator' => 'IN'
          ),
          array (
            'taxonomy' => 'location',
            'field' => 'slug',
            'terms' => array( 'feature' ),
            'operator' => 'NOT IN'
          )
        )
        
    ); ?>

    <?php $pubs_by_term = get_posts( $args ); ?>

    <h4 class="border-top margin-bottom-2"><a href="/resources/publication/type/working-papers/">Working Papers</a></h4>

    <ul class="small-block-grid-1 medium-block-grid-3">

    <?php foreach ( $pubs_by_term as $post ) : setup_postdata( $post ); ?>
      <li>
        <article class="post blurb clearfix">
          <header>
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_post_thumbnail( 'thumb', array( 'class' => 'feature-photo right' ) ); ?></a>
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
            'terms' => array( 'about-the-sdsn' ),
            'operator' => 'IN'
          )
        )
        
    ); ?>

    <?php $pubs_by_term = get_posts( $args ); ?>

    <h4 class="border-top margin-bottom-2"><a href="/resources/publication/type/about-the-sdsn/">About the SDSN</a></h4>

    <ul class="small-block-grid-1 medium-block-grid-3">

    <?php foreach ( $pubs_by_term as $post ) : setup_postdata( $post ); ?>
      <li>
        <article class="post blurb clearfix">
          <header>
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_post_thumbnail( 'thumb', array( 'class' => 'feature-photo right' ) ); ?></a>
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


    <?php
      /** CPT Query: sdsn-publications
      *** Get recent posts from publications, limited to a subset of custom taxonomies.
      *** Taxonomy ref: Presentations
      **/
      $args = array(
        'post_type' => 'sdsn-publications',
        'posts_per_page' => 3,
        'tax_query' => array(
          array (
            'taxonomy' => 'location',
            'field' => 'slug',
            'terms' => array( 'presentations' ),
            'operator' => 'IN'
          )
        )
        
    ); ?>

    <?php $pubs_by_term = get_posts( $args ); ?>

    <?php if ( !empty( $pubs_by_term ) ) : ?>

    <h4 class="border-top margin-bottom-2"><a href="/resources/publication/type/about-the-sdsn/">Presentations</a></h4>

    <ul class="small-block-grid-1 medium-block-grid-3">

    <?php foreach ( $pubs_by_term as $post ) : setup_postdata( $post ); ?>
      <li>
        <article class="post blurb clearfix">
          <header>
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_post_thumbnail( 'thumb', array( 'class' => 'feature-photo right' ) ); ?></a>
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


  </div>

</div>

<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    ) 
  ); ?>