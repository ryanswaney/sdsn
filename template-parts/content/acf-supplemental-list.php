<?php
  /** Get ACF Fields
  *** Field Group: CPT -- Thematic Groups and SDSN Initiatives
  *** Queried Field: supplemental_list
  **/
?>

<?php if( have_rows('supplemental_list') ): ?>

  <?php while ( have_rows('supplemental_list') ) : the_row(); ?>

    <?php if( get_row_layout() == 'basic_list_layout' ) : ?>

      <h3><?php the_sub_field('basic_list_title'); ?></h3>

      <?php if( have_rows('basic_list_repeater') ): ?>

        <ul class="no-bullet">

        <?php while ( have_rows('basic_list_repeater') ) : the_row(); ?>
          <?php $link = get_sub_field('list_item_url') ; ?>
          <?php if ( !empty( $link )  ) : ?>
          <li><a href="<?php echo esc_url( $link ); ?>"><?php the_sub_field('list_item_name'); ?></a></li>
          <?php else : ?>
          <li><?php the_sub_field('list_item_name'); ?></li>
          <?php endif; ?>
        <?php endwhile; ?>

        </ul>

      <?php endif; ?>

    <?php elseif( get_row_layout() == 'basic_list_expanded_layout' ) : ?>

      <h3><?php the_sub_field('basic_list_expanded_title'); ?></h3>

      <?php if( have_rows('basic_list_expanded_repeater') ): ?>

        <?php while ( have_rows('basic_list_expanded_repeater') ) : the_row(); ?>

          <ul class="no-bullet">
            <li><h5><?php the_sub_field('basic_list_expanded_subtitle'); ?></h5></li>
          <?php if( have_rows('basic_list_expanded_nested_repeater') ): ?>
            <?php while ( have_rows('basic_list_expanded_nested_repeater') ) : the_row(); ?>
              <?php $link = get_sub_field('item_url') ; ?>
              <?php if( !empty( $link ) ) :?>
                <li><a href="<?php echo esc_url( $link ); ?>"><?php the_sub_field('item_name'); ?></a></li>
              <?php else : ?>
                <li><?php the_sub_field('item_name'); ?></li>
              <?php endif; ?>
            <?php endwhile; ?> 
          <?php endif; ?>
          </ul>

        <?php endwhile; ?>

      <?php endif; ?>

    <?php endif; ?>


  <?php endwhile; ?>

<?php endif; ?>