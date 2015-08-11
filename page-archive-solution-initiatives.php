<?php
/**
 * Template Name: Solutions Initiatives Overview
 *
 * The template for displaying the overview page for Thematic Groups.
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

<?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_page-nosidebar' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="row">

  <div class="small-12 large-8 columns">

    <? the_content(); ?>

  </div>

</div>

  <div class="row">

    <div class="small-12 large-10 columns">

      <h4 id="groups" class="border-top">Solutions Initiatives</h4>

    <?php 

        $args = array(
        'post_type' => 'solution-initiatives',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1

      ); ?>

      <?php $cpt_thematic_groups_query = new WP_Query( $args ); ?>

      <ul class="small-block-grid-1 medium-block-grid-2">

      <?php while ($cpt_thematic_groups_query ->have_posts()) : $cpt_thematic_groups_query ->the_post(); ?>

        <li>
          <article class="post blurb clearfix">
            <header>
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'thumb', array( 'class' => 'feature-photo thmb right' ) ); ?>
            <?php endif; ?>
              <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
            </header>
            <?php the_excerpt(); ?>
          </article>
        </li>

      <?php endwhile; ?>

    </ul>

  </div>

</div>

<?php endwhile ;?>

<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    ) 
  ); ?>