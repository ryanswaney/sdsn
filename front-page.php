<?php
/**
 * The template for the front page.
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


<div class="homepage-feature">
  <div class="row row-xlarge">
    <div class="small-12 large-8 columns">

    <?php
    /** Get ACF Fields
    *** Field Group: Home -- Feature Blocks
    *** Queried Field(s): home_feature_story
    **/
    ?> 
    <?php if( have_rows('home_feature_story') ): ?>

      <?php while ( have_rows('home_feature_story') ) : the_row(); ?>

        <?php $feature_block_image = get_sub_field('homepage_feature_story_image'); ?>

    <ul class="small-block-grid-1 medium-block-grid-2 margin-bottom-2" style="background: url('<?php echo $feature_block_image['sizes']['large']; ?>'); background-size: cover; background-position: top right; background-repeat: no-repeat;">
      <li>
        <div class="panel radius panel-ftr-stry">
          <h5 class="reversed-text lh-1-3 margin-bottom-1"><a href="<?php the_sub_field('homepage_feature_story_link'); ?>"><?php the_sub_field('homepage_feature_story_title'); ?></a></h5>

          <?php the_sub_field('homepage_feature_story_excerpt'); ?>

          <?php if( get_sub_field('homepage_feature_story_call_to_action') ) : ?>

          <a href="<?php the_sub_field('homepage_feature_story_link'); ?>" class="button tiny radius"><?php the_sub_field('homepage_feature_story_call_to_action'); ?></a>

          <?php endif; ?>

        </div>
      </li>
    </ul>

      <?php endwhile; ?>

    <?php endif; ?>

    <?php if( have_rows('home_feature_area') ): ?>

      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2 pattern-grid" data-match-height>

      <?php while ( have_rows('home_feature_area') ) : the_row(); ?>

        <?php if( get_row_layout() == 'feature_block' ) : ?>
    
        <li data-height-watch>
          <article class="post blurb reversed-text">
            <?php $feature_block_image = get_sub_field('home_feature_block_image'); ?>
            <a href="<?php the_sub_field('home_feature_block_link'); ?>"><img src="<?php echo $feature_block_image['sizes']['large']; ?>" alt="Permalink to: <?php the_sub_field('home_feature_block_title'); ?>" /></a>
            <header>
              <h4><a href="<?php the_sub_field('home_feature_block_link'); ?>"><?php the_sub_field('home_feature_block_title'); ?></a></h4>
            </header>
            <p><?php the_sub_field('home_feature_block_text'); ?></p>
          </article>
          <a href="<?php the_sub_field('home_feature_block_link'); ?>" class="pattern-grid-block-link button small">Learn More <i class="fi-arrow-right"></i></a>
        </li>

        <?php endif; ?>

      <?php endwhile; ?>

      </ul>

    <?php endif; ?>

    </div>

    <div class="small-12 large-4 columns">
      <div class="post-block-header">
        <h5><a href="<?php echo bloginfo('url'); ?>/news/">News</a></h5>
      </div>

      <?php 

        $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6

      ); ?>

      <?php $frontpage_news_query = new WP_Query( $args ); ?>

      <ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-1 article-grid">

      <?php while ($frontpage_news_query ->have_posts()) : $frontpage_news_query ->the_post(); ?>

        <li>
          <article class="post blurb">
            <header>
              <div class="post-meta"><time datetime="<?php the_time('Y-n-D'); ?>" pubdate><?php the_time('F j'); ?></time></div>
              <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
            </header>
            <?php the_excerpt(); ?>
          </article>
        </li>

      <?php endwhile; ?>

      </ul>

    </div>
  </div>
</div>

<?php 
  $args = array(
    'post_type' => 'sdsn-publications',
    'posts_per_page' => 3
); ?>

<?php $frontpage_pub_query = new WP_Query( $args ); ?>

<div class="row row-xlarge" >
  <div class="small-12 columns">

  <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4 article-grid" data-equalizer>
    <li>
      <article class="post blurb pub" data-equalizer-watch>
        <header>
          <h3><a href="/resources/">Publications</a></h3>
        </header>
        <?php
          $args = array(
            'orderby' => 'title',
            'show_count' => 0,
            'pad_counts' => 0,
            'hide_empty' => 1,
            'exclude' => array( '44', '47', '66'), // Exclude "Feature"
            'depth' => 1,
            'hierarchical' => true,
            'taxonomy' => 'location',
            'title_li' => ''
          );
        ?>
        <ul class="side-nav">
        <li>View By Type</li>
        <li class="divider"></li>
        <?php
          wp_list_categories($args);
        ?>
        </ul>
      </article>
    </li>
  <?php while ($frontpage_pub_query->have_posts()) : $frontpage_pub_query->the_post(); ?>
    <li>
      <article class="post blurb pub" data-equalizer-watch>
        <header>
          <div class="post-meta"><time datetime="<?php the_time('Y-n-D'); ?>" pubdate><?php the_time('F j'); ?></time></div>
          <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
        </header>
        <?php the_excerpt(); ?>
      </article>
    </li>
  <?php endwhile; ?>
    </ul>

  </div>
</div>


<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    ) 
  ); ?>