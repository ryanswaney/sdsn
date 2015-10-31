<div class="page-header">
  <div class="row">
    <div class="small-12 large-8 columns">
      <h1 class="page-title"><?php the_title(); ?></h1>

      <?php
      /** Get ACF Fields
      *** Field Group: People -- Profile Information
      *** Queried Field: people_title
      **/
      $sdsn_people_title = get_field('people_title'); ?>

      <?php if( $sdsn_people_title != '' ) : ?>
      <h4><?php the_field('people_title'); ?></h4>
      <?php endif ;?>

    </div>
    <?php if ( has_post_thumbnail() ) : ?>
    <div class="small-12 large-4 columns">
      <?php the_post_thumbnail('thumbnail'); ?>
    </div>
    <?php endif; ?>
  </div>
</div>