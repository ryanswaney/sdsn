<?php
/**
 * Template Name: News Archive
 *
 * The template for displaying a complete archive of news by year.
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

    <?php 
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1
    ); ?>

    <?php $archivepage_news_query = new WP_Query( $args ); ?>

    <?php $prev_year = null; ?>

    <?php while ($archivepage_news_query ->have_posts()) : $archivepage_news_query ->the_post(); ?>
      
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

    </ul>

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