<?php
/**
 * Template Name: Leadership Council
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

  <?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_page' ) ); ?>


<div class="row">

  <div class="small-12 large-2 columns hide-for-small">
    <?php Starkers_Utilities::get_template_parts( array( 'template-parts/navigation/tpl_nav_sidebar_page' ) ); ?>
  </div>

  <div class="small-12 large-8 end columns">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>


    <?php
    /** Get ACF Fields
    *** Field Group: Leadership Council -- Members
    *** Queried Field: leadership_council_chairs
    **/
    ?>
    <?php $post_objects = get_field('leadership_council_chairs'); ?>

    <?php if($post_objects) : ?>

      <h4>Council Chairs</h4>

      <ul class="small-block-grid-1 medium-block-grid-3">
      <?php foreach( $post_objects as $post ) : ?>
        <?php setup_postdata($post); ?>
        <?php $p_affiliation = get_field('people_title'); ?>
        <li>
          <article class="post blurb">
            <header>
              <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'feature-photo' ) ); ?></a>
              <?php endif; ?>
              <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
              <div class="post-meta"><?php echo $p_affiliation;?></div>
            </header>
          </article>
        </li>
      <?php endforeach; ?>
      </ul>
      <?php wp_reset_postdata(); ?>

    <?php endif; ?>


    <?php
    /** Get ACF Fields
    *** Field Group: Leadership Council -- Members
    *** Queried Field: leadership_council_members
    **/
    ?>
    <?php $post_objects = get_field('leadership_council_members'); ?>

    <?php if($post_objects) : ?>

      <h4>Council Members</h4>

      <ul class="small-block-grid-1 medium-block-grid-3">
      <?php foreach( $post_objects as $post ) : ?>
        <?php setup_postdata($post); ?>
        <?php $p_affiliation = get_field('people_title'); ?>
        <li>
          <article class="post blurb">
            <header>
              <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'feature-photo' ) ); ?></a>
              <?php endif; ?>
              <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
              <div class="post-meta"><?php echo $p_affiliation;?></div>
            </header>
          </article>
        </li>
      <?php endforeach; ?>
      </ul>
      <?php wp_reset_postdata(); ?>

    <?php endif; ?>

        <?php
    /** Get ACF Fields
    *** Field Group: Leadership Council -- Emeritus
    *** Queried Field: leadership_council_emeritus
    **/
    ?>
    <?php $post_objects = get_field('leadership_council_emeritus'); ?>

    <?php if($post_objects) : ?>

      <h4>Emeritus Members</h4>

      <ul class="small-block-grid-1 medium-block-grid-3">
      <?php foreach( $post_objects as $post ) : ?>
        <?php setup_postdata($post); ?>
        <?php $p_affiliation = get_field('people_title'); ?>
        <li>
          <article class="post blurb">
            <header>
              <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'feature-photo' ) ); ?></a>
              <?php endif; ?>
              <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
              <div class="post-meta"><?php echo $p_affiliation;?></div>
            </header>
          </article>
        </li>
      <?php endforeach; ?>
      </ul>
      <?php wp_reset_postdata(); ?>

    <?php endif; ?>

  </div>
</div>

<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    ) 
  ); ?>