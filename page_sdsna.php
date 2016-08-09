<?php
/**
 * Template Name: SDSN Association
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

  <?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_page-nosidebar' ) ); ?>

  <div class="row">

    <div class="small-12 large-8 end columns">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>

    <?php
      Starkers_Utilities::get_template_parts(
        array(
          'template-parts/fields/acf-profiles-section'
        )
      );
    ?>

    </div>
  </div>

<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    )
  ); ?>
