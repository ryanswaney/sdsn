<?php
/**
 * The template for display single posts in the CPT sdsn-people
 * Ref: custom-post-types/cpt-people.php
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

  <?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_single-sdsn-people' ) ); ?>

  <div class="row">
    <div class="small-12 medium-8 columns">
      <?php the_content(); ?>
    </div>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="small-12 medium-3 end columns">
      <?php the_post_thumbnail('medium'); ?>
    </div>
  <?php endif; ?>
  </div>			

<?php endwhile; ?>

<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    ) 
  ); ?>