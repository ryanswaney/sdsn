<?php
/**
 * Template Name: Goals & Targets | Single
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

	<?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_single-goal' ) ); ?>

  <div class="row">

    <div class="small-12 large-8 columns">
      <article class="post">
        <?php if ( has_post_thumbnail() ) : ?>
          <header class="margin-bottom-2">
          <?php the_post_thumbnail( 'large', array( 'class' => 'feature-photo' ) ); ?>
          <?php if( get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
            <div class="post-meta"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></div>
          <?php endif; ?>
          </header> 
        <?php endif; ?>

        <?php the_content(); ?>

      </article>
    </div>

    <div class="small-12 large-4 columns">
      <?php Starkers_Utilities::get_template_parts( array( 'template-parts/navigation/tpl_nav_sidebar_page' ) ); ?>

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
  