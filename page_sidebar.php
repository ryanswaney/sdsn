<?php
/**
 * Template Name: Page with Sidebar
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

	<?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_page' ) ); ?>

  <div class="row">

    <div class="small-12 medium-3 columns">
     <?php Starkers_Utilities::get_template_parts( array( 'template-parts/navigation/tpl_nav_sidebar_page' ) ); ?>
    </div>

    <div class="small-12 medium-8 end columns">

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
  