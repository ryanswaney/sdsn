<?php
/**
 * The Template for displaying all single posts
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

  <?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_single-post' ) ); ?>

  <div class="row">

    <div class="small-12 large-2 columns show-for-large-up">
      <?php Starkers_Utilities::get_template_parts( array( 'template-parts/navigation/tpl_nav_sidebar_resources' ) ); ?>
    </div>

    <div class="small-12 large-8 end columns">

    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'thumb', array( 'class' => 'feature-photo thmb right margin-left-2' ) ); ?>
    <?php endif; ?>

    <?php
    /** Get ACF Fields
    *** Field Group: CPT -- Publications
    *** Queried Field(s): sdsn_publication_flex_file
    **/
    ?>
    <?php if( have_rows('sdsn_publication_flex_file') ): ?>

      <?php // Find out how many files we have available for download ?>
      <?php $rows = get_field('sdsn_publication_flex_file'); ?>
      <?php $row_count = count( $rows ); ?>

      <?php if( $row_count > 1 ) : ?>

        <button href="#" data-dropdown="publication-download" class="button tiny radius dropdown">Download Publication</button>
        <ul id="publication-download" data-dropdown-content class="medium f-dropdown">
        <?php while ( have_rows('sdsn_publication_flex_file') ) : the_row(); ?>

          <li><a href="<?php the_sub_field('sdsn_publication_flex_file_attachment'); ?>" onclick="trackOutboundLink('<?php the_sub_field('sdsn_publication_flex_file_attachment'); ?>'); return false;"><?php the_sub_field('sdsn_publication_flex_file_title'); ?></a></li>

        <?php endwhile; ?>
        </ul>

        <?php //echo $row_count; ?>

      <?php else : ?>

        <?php while ( have_rows('sdsn_publication_flex_file') ) : the_row(); ?>

        <a href="<?php the_sub_field('sdsn_publication_flex_file_attachment'); ?>" onclick="trackOutboundLink('<?php the_sub_field('sdsn_publication_flex_file_attachment'); ?>'); return false;" class="button tiny radius">Download Publication</a>

      <?php endwhile; ?>


      <?php endif; ?>


    <?php endif; ?>


    <?php
    /** Get ACF Fields
    *** Field Group: CPT -- Publications
    *** Queried Field(s): sdsn_publication_supplemental_flex_file
    **/
    ?>
    <?php if( have_rows('sdsn_publication_supplemental_flex_file') ): ?>

      <?php // Find out how many files we have available for download ?>
      <?php $row = ''; ?>
      <?php $rows = get_field('sdsn_publication_supplemental_flex_file'); ?>
      <?php $row_count = count( $rows ); ?>

      <?php if( $row_count > 1 ) : ?>

        <a href="#" data-dropdown="publication-sup-download" class="button tiny radius dropdown">Download Supplemental Files</a>
        <ul id="publication-sup-download" data-dropdown-content class="medium f-dropdown">
        <?php while ( have_rows('sdsn_publication_supplemental_flex_file') ) : the_row(); ?>

          <li><a href="<?php the_sub_field('sdsn_publication_supplemental_flex_file_attachment'); ?>" onclick="trackOutboundLink('<?php the_sub_field('sdsn_publication_supplemental_flex_file_attachment'); ?>'); return false;"><?php the_sub_field('sdsn_publication_supplemental_flex_file_title'); ?></a></li>

        <?php endwhile; ?>
        </ul>

        <?php //echo $row_count; ?>

      <?php else : ?>

        <?php while ( have_rows('sdsn_publication_supplemental_flex_file') ) : the_row(); ?>

        <a href="<?php the_sub_field('sdsn_publication_supplemental_flex_file_attachment'); ?>" onclick="trackOutboundLink('<?php the_sub_field('sdsn_publication_supplemental_flex_file_attachment'); ?>'); return false;" class="button tiny radius">Download <?php the_sub_field('sdsn_publication_supplemental_flex_file_title'); ?></a>

      <?php endwhile; ?>


      <?php endif; ?>


    <?php endif; ?>

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
