<?php
/**
 * The template for displaying Category Archive pages
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



<?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_category' ) ); ?>

  <div class="row">

    <div class="small-12 large-2 columns hide-for-small">
    <?php Starkers_Utilities::get_template_parts( array( 'template-parts/navigation/tpl_nav_sidebar_news' ) ); ?>
    </div>

    <div class="small-12 large-8 end columns">



    <?php if ( have_posts() ): ?>

      <?php $prev_year = null; ?>

    <?php while ( have_posts() ) : the_post(); ?>
      
      <?php $this_year = get_the_date('Y'); ?>

      <?php if ($prev_year != $this_year) : // Year boundary ?>
        <?php if (!is_null($prev_year)) : // A list is already open, close it ?>
          <li class="margin-bottom-1">
            <a href="#top" class="button tiny radius right">Back to Top</a>
          </li>
        </ul>
        <?php endif; ?>
        <h3 class="post-year"><?php echo $this_year; ?></h3>
        <ul class="no-bullet clearfix">
      <?php endif; ?>
      <li class="margin-bottom-1">
        <article class="post archive">
          <header>
            <div class="post-meta"><time datetime="<?php the_time('Y-n-D'); ?>" pubdate><?php the_time('F j'); ?></time></div>
            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
          </header>
        </article>
      </li>
      <?php $prev_year = $this_year; ?>

    <?php endwhile; ?>
      <li class="margin-bottom-1">
        <a href="#top" class="button tiny radius right">Back to Top</a>
      </li>
    </ul>

  <?php else: ?>

    <p>No posts to display in <?php echo single_cat_title( '', false ); ?></p>

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