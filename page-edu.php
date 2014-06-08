<?php
/**
 * Template Name: SDSN.Edu
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
        <span style="font-size: 90%;">Online Education For Sustainable Development</span>

    </div>
  </div>
</div>

  <div class="row">

    <div class="small-12 large-7 columns">
      
      <?php the_content(); ?>

    </div>

    <div class="small-12 large-4 columns">

      <h4>Pre-register Now</h4>

      <p>Come join this global movement and become part of a global student community! Pre-register today for our second offering of  the Age of Sustainable Development, taught by Professor Jeffrey Sachs and launching in Fall 2014!</p>

      <?php Starkers_Utilities::get_template_parts( array( 'template-parts/content/form-edu-signup' ) ); ?>

      <?php the_field('sdsn.edu_sidebar'); ?>

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