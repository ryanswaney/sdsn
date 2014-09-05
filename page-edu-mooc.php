<?php
/**
 * Template Name: SDSN.edu -- MOOC 
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
        <span style="font-size: 105%;"><?php the_field('mooc_subtitle'); ?></span>

    </div>
  </div>
</div>

  <div class="row">
    <div class="small-12 large-7 columns">
      <?php the_field('mooc_call_to_action'); ?>
    </div>

    <div class="small-12 large-5 columns">
      <?php Starkers_Utilities::get_template_parts( array( 'template-parts/content/form-mooc' ) ); ?>
    </div>
  </div>

  <div class="row">

    <div class="small-12 large-7 columns">
      <?php the_content(); ?>
    </div>

    <div class="small-12 large-5 columns">
      <?php the_field('mooc_sidebar'); ?>
    </div>

  </div>

<?php if ( get_field('sdsn.edu_block_2_main') ) : ?>

  <div class="row border-top">

    <div class="small-12 large-7 columns">
      <?php the_field('sdsn.edu_block_2_main'); ?>
    </div>

    <div class="small-12 large-5 columns">
      <?php the_field('sdsn.edu_block_2_sidebar'); ?>
    </div>

  </div>

<?php endif; ?>

<?php endwhile; ?>


<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    ) 
  ); ?>