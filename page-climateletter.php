<?php
/**
 * Template Name: Climate Letter
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

    <div class="small-12 large-5 large-push-7 columns" style="margin-bottom: 3rem;">

      <?php the_field('climate_letter_sidebar_text'); ?>

      <?php Starkers_Utilities::get_template_parts( array( 'template-parts/content/form-sf-climateletter' ) ); ?>

    </div>

    <div class="small-12 large-7 large-pull-5 columns">
      
      <?php the_content(); ?>

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