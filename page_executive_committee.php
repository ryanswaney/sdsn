<?php
/**
 * Template Name: Executive Committee
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

    <div class="small-12 large-2 columns hide-for-small">
    <?php Starkers_Utilities::get_template_parts( array( 'template-parts/navigation/tpl_nav_sidebar_page' ) ); ?>
    </div>

    <div class="large-8 end columns">

    
      <?php the_content(); ?>

    <?php
    /** Get ACF Fields
    *** Field Group: Executive Committee -- Members
    *** Queried Field: executive_committee_co-chairs
    **/
    ?>
    <?php $post_objects = get_field('executive_committee_co-chairs'); ?>

    <?php if($post_objects) : ?>

      <h4>Co-Chairs</h4>

      <ul class="small-block-grid-1 medium-block-grid-3">
      <?php foreach( $post_objects as $post ) : ?>
        <?php setup_postdata($post); ?>
        <?php $p_affiliation = get_field('people_title'); ?>
        <li>
          <article class="post blurb">
            <header>
              <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'feature-photo' ) ); ?></a>
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
    *** Field Group: Executive Committee -- Members
    *** Queried Field: executive_committee_members
    **/
    ?>
    <?php $post_objects = get_field('executive_committee_members'); ?>

    <?php if($post_objects) : ?>

      <h4>Members</h4>

      <ul class="small-block-grid-1 medium-block-grid-3">
      <?php foreach( $post_objects as $post ) : ?>
        <?php setup_postdata($post); ?>
        <?php $p_affiliation = get_field('people_title'); ?>
        <li>
          <article class="post blurb">
            <header>
              <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'feature-photo' ) ); ?></a>
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

<?php endwhile; ?>

<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    ) 
  ); ?>