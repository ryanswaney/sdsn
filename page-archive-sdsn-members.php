<?php
/**
 * Template Name: SDSN Members Overview
 *
 * The template for displaying the overview page for SDSN Members.
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

<?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_page' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="row">

  <div class="small-12 large-2 columns show-for-large-up">
    <?php Starkers_Utilities::get_template_parts( array( 'template-parts/navigation/tpl_nav_sidebar_page' ) ); ?>
  </div>

  <div class="small-12 large-8 end columns">
    <?php the_content(); ?>
  </div>

</div>

<div class="row">

  <div class="small-12 large-10 columns">

    <h4 class="border-top margin-bottom-2">Member Index</h4>

    <?php

        $args = array(
        'post_type' => 'members',
        'orderby' => 'title',
        'order' => 'ASC',
        'posts_per_page' => -1

      ); ?>

      <?php $cpt_members_query = new WP_Query( $args ); ?>

      <?php if ( $cpt_members_query->have_posts() ) : ?>
      <ul class="small-block-grid-4 medium-block-grid-8 large-block-grid-12 post-index" id="index">
      <?php $curr_letter = ''; ?>
      <?php while ( $cpt_members_query->have_posts() ) : $cpt_members_query->the_post() ?>
      <?php
          $title = get_the_title();
          $this_letter = strtoupper( $title[0] );
          if( $this_letter != $curr_letter ) : ?>
            <li><a class='button radius tiny' href='#letter-<?php echo $this_letter; ?>' ><?php echo $this_letter; ?></a></li>
          <?php $curr_letter = $this_letter; ?>
          <?php endif; ?>
      <?php endwhile; ?>
      </ul>
      <?php endif; ?>


      <?php $curr_letter = ''; ?>


      <ul class="no-bullet">

      <?php while ($cpt_members_query ->have_posts()) : $cpt_members_query ->the_post(); ?>

        <?php $title = get_the_title(); $this_letter = strtoupper($title[0]); ?>
        <?php if ($this_letter != $curr_letter) :
         if ($curr_letter !== '') : ?><li><a class="button tiny radius" href="#index">Back to top</a></li><?php endif; ?>
         <li><a name="letter-<?php echo $this_letter;?>"></a><br />
         <h2 class="post-index-anchor"><?php echo $this_letter; ?></h2></li>
        <?php $curr_letter = $this_letter; endif; ?>

        <li class="margin-bottom-1">
          <article class="post archive">
            <header>
              <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
              <div class="post-meta"></div>
            </header>
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
