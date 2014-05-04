<?php
/**
 * The main template file
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
  );
?>

<?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_news' ) ); ?>

  <div class="row">

    <div class="small-12 large-8 large-push-2 end columns">

    <?php if ( have_posts() ) : $count = 0; ?>

      <?php while ( have_posts() ) : the_post(); $count++; ?>

      <article class="post">
        <header>
          <?php //echo $count; ?>
          <h1><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
          <div class="post-meta"><time datetime="<?php the_time('Y-n-D'); ?>" pubdate><?php the_time('F j'); ?></time></div>
        </header>
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'large', array( 'class' => 'feature-photo margin-bottom-2' ) ); ?>
        <?php endif; ?>
    		<?php the_excerpt(); ?>
    	</article>
    <?php endwhile; ?>

    <?php $args = array(
      'posts_per_page'   => 4,
      'offset'           => 3,
      'post_type'        => 'post' );
    ?>


    <?php  $news_older_posts = get_posts( $args ); ?>

    <?php if ( !empty( $news_older_posts ) ) : ?>

      <h4 class="border-top margin-bottom-2">Older News</h4>

      <ul class="small-block-grid-1 medium-block-grid-2">

      <?php foreach ( $news_older_posts as $post ) : setup_postdata( $post ); ?>
        <li>
          <article class="post blurb">
            <header>
              <div class="post-meta"><time datetime="<?php the_time('Y-n-D'); ?>" pubdate><?php the_time('F j'); ?></time></div>
              <h1><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            </header>
            <?php the_excerpt(); ?>
          </article>
        </li>
      <?php endforeach; ?>

      </ul>

      <?php wp_reset_postdata(); ?>

    <?php endif; ?>


    <a href="/news/archive/" class="button small radius">News Archive</a>


    <?php else: ?>
    <h2>No posts to display</h2>
    <?php endif; ?>

    </div>

    <div class="small-12 large-2 large-pull-10 columns">
      <?php Starkers_Utilities::get_template_parts( array( 'template-parts/navigation/tpl_nav_sidebar_news' ) ); ?>
    </div>

  </div>

<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    ) 
  ); ?>