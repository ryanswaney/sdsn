<?php
/**
 * CPT: Solutions Initiatives
 * custom-post-types/cpt-solutions-initiatives.php
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

  <?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_single-solution-initiatives' ) ); ?>

  <div class="row">

    <div class="small-12 large-7 columns">
      <article class="post">
        <header class="margin-bottom-2">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'large', array( 'class' => 'feature-photo' ) ); ?>
          <?php if( get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
            <div class="post-meta"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></div>
          <?php endif; ?>
        <?php endif; ?>
        </header> 

        <?php the_content(); ?>

        <?php Starkers_Utilities::get_template_parts( array( 'template-parts/content/acf-supplemental-list' ) ); ?>

        </article>

    </div>

    <div class="small-12 large-4 columns">

      <?php
      /** Get ACF Fields
      *** Field Group: Thematic Group -- CPT
      *** Queried Field: initiatives_publication_category
      **/
      ?>
      <?php $initiatives_publication_category = get_field('initiatives_publication_category'); ?>

      <?php //echo '<!--'; print_r($initiatives_publication_category); echo '-->'; ?>

      <?php if( !empty($initiatives_publication_category) ) : ?>

        <?php $args = array(
          'post_type' => 'sdsn-publications',
          'posts_per_page' => 5,
          'tax_query' => array(
            array (
              'taxonomy' => 'location',
              'field' => 'slug',
              'terms' => array( $initiatives_publication_category->slug ),
              'operator' => 'IN' )
            )
          );
        ?>

        <?php $related_tg_pubs = get_posts( $args ); ?>

        <?php if( !empty($related_tg_pubs) ) : ?>

          <?php echo '<!--'. count( $related_tg_pubs ) . '-->'; ?>

          <h6 class="border-top">Related Publications</h6>

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
              <a class="button tiny radius" href="/resources/publication/type/<?php echo $initiatives_publication_category->slug; ?>">View All</a>
            </li>
          <?php endif; ?>

          </ul>

        <?php endif; ?>

        <?php if ( empty( $related_tg_pubs ) ) : ?>
          <?php $news_post_limit = 10; //echo '<!--'.$news_post_limit.'-->'; ?>
        <?php else : ?>
          <?php $news_post_limit = 5; //echo '<!--'.$news_post_limit.'-->'; ?>
        <?php endif; ?>

        <?php $args = array(
          'post_type' => 'post',
          'posts_per_page' => $news_post_limit,
          'category_name' => $initiatives_publication_category->slug );
        ?>

        <?php $related_tg_news = get_posts( $args ); ?>

        <?php if( !empty( $related_tg_news ) ) : ?>

          <h6 class="border-top">Related News</h6>

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
              <a class="button tiny radius" href="/news/category/<?php echo $initiatives_publication_category->slug; ?>">View All</a>
            </li>
          <?php endif; ?>

          </ul>

        <?php endif; ?>

      <?php endif; ?>

    </div>

  </div>

  <div class="row">

    <div class="small-12 columns">

      <h4 class="border-top">Other Solutions Initiatives</h4>

      <?php wp_reset_postdata(); ?>

      <?php 

        $current_tg_id = get_the_ID();

        $exclude_ids = array( $current_tg_id );

        $args = array(
        'post_type' => 'solution-initiatives',
        'post__not_in' => $exclude_ids,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1

      ); ?>

      <?php $cpt_initiatives_query = new WP_Query( $args ); ?>

      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">

      <?php while ($cpt_initiatives_query ->have_posts()) : $cpt_initiatives_query ->the_post(); ?>

        <li>
          <article class="post blurb">
            <header>
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'thumb', array( 'class' => 'feature-photo thmb right' ) ); ?>
            <?php endif; ?>
              <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
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