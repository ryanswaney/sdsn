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
    <div class="small-12 medium-4 medium-push-8 columns people-contact">
      <!-- Contact Information -->

      <?php if( get_field('people_email') ) : ?>
        <p>
          <strong>Email Address</strong><br>
          <?php echo '<a href="mailto:' . get_field('people_email') . '">' . get_field('people_email') . '</a>'; ?>
        </p>
      <?php endif; // email ?>

      <?php if( get_field('people_phone') ) : ?>
        <p>
          <strong>Phone</strong><br>
          <?php echo get_field('people_phone'); ?>
        </p>
      <?php endif; // phone ?>

      <?php if( get_field('people_address') ) : ?>
        <p>
          <strong>Address</strong><br>
          <?php echo get_field('people_address'); ?>
        </p>
      <?php endif; // address ?>

      <?php if( get_field('people_twitter') ) : ?>
        <p>
          <strong>Twitter</strong><br>
          <?php echo '<a href="' . get_field('people_twitter') . '">' . get_field('people_twitter') . '</a>'; ?>
        </p>
      <?php endif; // Twitter ?>
      <hr class="show-for-small">
    </div>
    <div class="small-12 medium-8 medium-pull-4 columns">
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