<?php
/**
 * CPT: Thematic Groups
 * custom-post-types/cpt-groups.php
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


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_single-sdsn-groups' ) ); ?>

  <div class="row">

    <div class="small-12 large-7 columns">
      <a id="overview"></a>
      <?php the_content(); ?>

      <?php
    /** Get ACF Fields
    *** Field Group: Thematic Group -- CPT
    *** Queried Field: thematic_group_leadership
    **/
    ?>
    <?php $post_objects = get_field('thematic_group_leadership'); ?>

    <?php if($post_objects) : ?>

      <a id="members"></a>
      <h4>Co-chairs</h4>

<ul class="small-block-grid-2 medium-block-grid-3">
      <?php foreach( $post_objects as $post ) : ?>
        <?php setup_postdata($post); ?>
        <?php $p_affiliation = get_field('people_title'); ?>
        <li>
          <article class="post blurb">
            <header>
              <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'feature-photo' ) ); ?></a>
              <?php endif; ?>
              <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
              <div class="post-meta"><?php echo $p_affiliation;?></div>
            </header>
          </article>
        </li>
      <?php endforeach; ?>
      </ul>
      <?php wp_reset_postdata(); ?>

    <?php endif; ?>

    <?php
    /** Get ACF Fields
    *** Field Group: Thematic Group -- CPT
    *** Queried Field: thematic_group_members
    **/
    ?>
    <?php $post_objects = get_field('thematic_group_members'); ?>

    <?php if($post_objects) : ?>

      <h4>Members</h4>

      <ul class="small-block-grid-2 medium-block-grid-3">
      <?php foreach( $post_objects as $post ) : ?>
        <?php setup_postdata($post); ?>
        <?php $p_affiliation = get_field('people_title'); ?>
        <li>
          <article class="post blurb">
            <header>
              <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'feature-photo' ) ); ?></a>
              <?php endif; ?>
              <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
              <div class="post-meta"><?php echo $p_affiliation;?></div>
            </header>
          </article>
        </li>
      <?php endforeach; ?>
      </ul>
      <?php wp_reset_postdata(); ?>

    <?php endif; ?>

    <?php Starkers_Utilities::get_template_parts( array( 'template-parts/content/acf-supplemental-list' ) ); ?>

    </div>

    <div class="small-12 large-5 columns">

      <?php
      /** Get ACF Fields
      *** Field Group: Thematic Group -- CPT
      *** Queried Field: thematic_group_publication_category
      **/
      ?>
      <?php $thematic_group_publication_category = get_field('thematic_group_publication_category'); ?>

      <?php if( !empty($thematic_group_publication_category) ) : ?>

        <?php 

          $termChildren = get_term_children($thematic_group_publication_category->term_id, 'location');

          //echo '<!--'; print_r($thematic_group_publication_category); echo '-->';

          //echo '<!--'; print_r($termChildren); echo '-->';

          $args = array(
          'post_type' => 'sdsn-publications',
          'posts_per_page' => 5,
          'tax_query' => array(
            array (
              'taxonomy' => 'location',
              'field' => 'slug',
              'terms' => array( $thematic_group_publication_category->slug ),
              'operator' => 'IN' ),
            array (
              'taxonomy' => 'location',
              'field' => 'id',
              'terms' => $termChildren,
              'operator' => 'NOT IN'
            )
            )
          );
        ?>

        <?php $related_tg_pubs = get_posts( $args ); ?>

        <?php if( !empty($related_tg_pubs) ) : ?>

          <?php echo '<!--'. count( $related_tg_pubs ) . '-->'; ?>

          <a id="resources"></a>
          <h6 class="border-top">Thematic Network Resources</h6>

          <ul class="no-bullet margin-bottom-2">

          <?php foreach ( $related_tg_pubs as $post ) : setup_postdata( $post ); ?>
            <li class="margin-bottom-1">
              <article class="post archive">
                <header>
                  <div class="post-meta"><time datetime="<?php the_time('Y-n-D'); ?>" pubdate><?php the_time('M j, Y'); ?></time></div>
                  <h1><a href="<?php the_permalink();?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
                </header>
              </article>
            </li>
          <?php endforeach; ?>
          <?php if ( count( $related_tg_pubs ) >= 5 ) : ?>
            <li>
              <a class="button tiny radius" href="/resources/publication/type/<?php echo $thematic_group_publication_category->slug; ?>">View All</a>
            </li>
          <?php endif; ?>

          </ul>

          <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        <?php

          $termChildren = get_term_children($thematic_group_publication_category->term_id, 'location');

          $args = array(
          'post_type' => 'sdsn-publications',
          'posts_per_page' => 5,
          'tax_query' => array(
            array (
              'taxonomy' => 'location',
              'field' => 'id',
              'terms' => $termChildren,
              'operator' => 'IN' )
           ));
        ?>

        <?php $relevant_tg_pubs = get_posts( $args ); ?>

        <?php //echo '<!--'; print_r($relevant_tg_pubs); echo '-->'; ?>

        <?php //echo '<!--'; echo $termChildren['0']; echo '-->'; ?>

        <?php //$term_link = get_term_link( $termChildren['0'], 'location' ); ?>

        <?php //echo '<!-- '. $term_link . ' -->'; ?>

        <?php if( !empty( $relevant_tg_pubs ) ) : ?>

          <h6>SDSN Relevant Resources</h6>

          <ul class="no-bullet margin-bottom-2">

          <?php foreach ( $relevant_tg_pubs as $post ) : setup_postdata( $post ); ?>
            <li class="margin-bottom-1">
              <article class="post archive">
                <header>
                  <div class="post-meta"><time datetime="<?php the_time('Y-n-D'); ?>" pubdate><?php the_time('M j, Y'); ?></time></div>
                  <h1><a href="<?php the_permalink();?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
                </header>
              </article>
            </li>
          <?php endforeach; ?>
          <?php if ( count( $relevant_tg_pubs ) >= 5 ) : ?>
            <?php $term_link = get_term_link( $termChildren['0'], 'location' ); ?>
            <li>
              <a class="button tiny radius" href="/resources/publication/type/<?php echo esc_url($term_link);  ?>">View All</a>
            </li>
          <?php endif; ?>

          </ul>

          <?php wp_reset_postdata(); ?>


        <?php endif; ?>

        <?php
          /** Get ACF Fields
          *** Field Group: Thematic Group -- CPT
          *** Queried Field: thematic_group_external_links
          **/
        ?>
        <?php if( get_field('thematic_group_external_links') ): ?>

        <h6 class="border-top">External Resources</h6>

        <ul class="no-bullet margin-bottom-2">
          <?php while( has_sub_field('thematic_group_external_links') ) : ?>
            <li class="margin-bottom-1">
              <a href="<?php the_sub_field('thematic_group_external_link_title'); ?>"><?php the_sub_field('thematic_group_external_link_url'); ?></a>
            </li>
          <?php endwhile; ?>
        </ul>

        <?php endif; // ACF: thematic_group_external_links ?>

        <?php if ( empty( $related_tg_pubs ) ) : ?>
          <?php $news_post_limit = 10; //echo '<!--'.$news_post_limit.'-->'; ?>
        <?php else : ?>
          <?php $news_post_limit = 5; //echo '<!--'.$news_post_limit.'-->'; ?>
        <?php endif; ?>

        <?php $args = array(
          'post_type' => 'post',
          'posts_per_page' => $news_post_limit,
          'category_name' => $thematic_group_publication_category->slug );
        ?>

        <?php $related_tg_news = get_posts( $args ); ?>

        <?php if( !empty( $related_tg_news ) ) : ?>

          <a id="news"></a>
          <h6 class="border-top">News</h6>

          <ul class="no-bullet">

          <?php foreach ( $related_tg_news as $post ) : setup_postdata( $post ); ?>
            <li class="margin-bottom-1">
              <article class="post archive">
                <header>
                  <div class="post-meta"><time datetime="<?php the_time('Y-n-D'); ?>" pubdate><?php the_time('M j, Y'); ?></time></div>
                  <h1><a href="<?php the_permalink();?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
                </header>
              </article>
            </li>
          <?php endforeach; ?>
          <?php if ( count( $related_tg_news ) >= 5 ) : ?>
            <li>
              <a class="button tiny radius" href="/news/category/<?php echo $thematic_group_publication_category->slug; ?>">View All</a>
            </li>
          <?php endif; ?>

          </ul>

        <?php endif; ?>

      <?php endif; ?>

    </div>

  </div>

  <div class="row">

    <div class="small-12 columns">

      <h4 id="other-tgs" class="border-top">Other Thematic Networks</h4>

      <div class="row">
        <div class="small-12 large-8 columns">
          <p>The Sustainable Development Solutions Network (SDSN) has established 12 Thematic Networks comprising leading scientists, engineers, academics and practitioners from business and civil society to promote solutions to key challenges of sustainable development. The Thematic Networks are solution oriented rather than research oriented and aim to identify practical solutions to the challenges of sustainable development.</p>
        </div>
      </div>

      <?php

        $current_tg_id = get_the_ID();

        $exclude_ids = array( $current_tg_id );

        $args = array(
        'post_type' => 'sdsn-groups',
        'post__not_in' => $exclude_ids,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1

      ); ?>

      <?php $cpt_thematic_groups_query = new WP_Query( $args ); ?>

      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">

      <?php while ($cpt_thematic_groups_query ->have_posts()) : $cpt_thematic_groups_query ->the_post(); ?>

        <li>
          <article class="post blurb">
            <header>
              <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php echo $post->menu_order; ?>: <?php the_title(); ?></a></h1>
            </header>
            <?php the_excerpt(); ?>
          </article>
        </li>

      <?php endwhile; ?>

      </ul>

    </div>

  </div>	

<?php endwhile; ?>


<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    ) 
  ); ?>