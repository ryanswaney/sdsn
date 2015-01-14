<?php
/**
 * Search results page
 * 
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
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

<div class="page-header">
  <div class="row">
    <div class="small-12 large-offset-2 columns">
      <span>Search Results</span>
      <h1 class="page-title">Search: '<?php echo get_search_query(); ?>'</h1>
    </div>
  </div>
</div>


<div class="row">

  <div class="small-12 large-8 large-offset-2 columns">

  <?php if ( have_posts() ): ?> 

    <ul class="no-bullet">
      <?php while ( have_posts() ) : the_post(); ?>
      <li>
        <article class="post archive margin-bottom-1">
          <header>
            <h1 class="border-top"><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <!-- <div class="post-meta"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time></div> -->
            <div class="post-meta">Permalink: <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>" style="text-transform: none;"><?php the_permalink(); ?></a></div>
          </header>
        </article>
      </li>
      <?php endwhile; ?>
    </ul>

  <?php else: ?>
    <p>No results found for '<?php echo get_search_query(); ?>'</p>
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