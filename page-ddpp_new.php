<?php
/**
 * Template Name: DDPP Landing Page
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

<div class="page-header tg-header">
  <div class="row">
    <div class="small-12 large-10 columns">
      <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
  </div>
</div>

  <div class="row">

    <div class="small-12 large-6 columns">
      <?php the_content(); ?>

      <?php Starkers_Utilities::get_template_parts( array( 'template-parts/content/acf-supplemental-list' ) ); ?>
    </div>

    <div class="small-12 large-6 columns">
      <?php the_field('sidebar_feature'); ?>
    </div>

  </div>


    <?php
      /** Get ACF Fields
      *** Field Group: Thematic Group -- CPT
      *** Queried Field: thematic_group_publication_category
      **/
    ?>
    
    <?php $thematic_group_publication_category = get_field('thematic_group_publication_category'); ?>

    <?php if( !empty($thematic_group_publication_category) ) : ?>

      <hr>

    <div class="row">
      
      <div class="small-12 large-6 columns">

        <?php $args = array(
          'post_type' => 'post',
          'posts_per_page' => $news_post_limit,
          'category_name' => $thematic_group_publication_category->slug,
          'category__not_in' => array( 31 ) ); // in news but not events
        ?>

        <?php $related_tg_news = get_posts( $args ); ?>

        <?php if( !empty( $related_tg_news ) ) : ?>

          <h6>News</h6>

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

      </div>

      <div class="small-12 large-6 columns">

        <?php $args = array(
          'post_type' => 'post',
          'posts_per_page' => $news_post_limit,
          'category_name' => $thematic_group_publication_category->slug . '+events' ); // DDPP News/Event
        ?>

        <?php $related_tg_news = get_posts( $args ); ?>

        <?php if( !empty( $related_tg_news ) ) : ?>

          <h6>Events</h6>

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
          <?php if ( count( $related_tg_news ) >= 20 ) : ?>
            <li>
              <a class="button tiny radius" href="/news/category/<?php echo $thematic_group_publication_category->slug; ?>">View All</a>
            </li>
          <?php endif; ?>

          </ul>

        <?php endif; ?>

      </div>

    </div>

    <?php endif; // thematic_group_publication_category !empty ?>

<?php endwhile; ?>


<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    ) 
  ); ?>