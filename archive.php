<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
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

<?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_news' ) ); ?>

<div class="row">

  <div class="small-12 large-8 large-push-2 columns">

    <?php if ( have_posts() ): ?>

    <ul class="no-bullet">
      <?php while ( have_posts() ) : the_post(); ?>
    	<li class="margin-bottom-1">
    		<article class="post archive">
          <header>
            <div class="post-meta"><time datetime="<?php the_time('Y-n-D'); ?>" pubdate><?php the_time('F j'); ?></time></div>
            <h1><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    			</header>
          <?php //the_excerpt(); ?>
    		</article>
    	</li>
      <?php endwhile; ?>
    </ul>

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