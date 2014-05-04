<?php
/**
 * CPT: Members
 * custom-post-types/cpt-members.php
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

  <?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_single-members' ) ); ?>


  <div class="row">
    <div class="small-12 large-10 large-push-2 columns">

      <div class="row">
        <div class="small-12 large-9 columns">
          <?php the_content(); ?>

          <?php
              /** Get ACF Fields
              *** Field Group: Members — CPT
              *** Queried Field: member_projects
              **/
              ?>
              <?php if( get_field('member_projects') ) : ?>

                <h4 class="border-top margin-bottom-1">Member Projects</h4>

                <?php the_field('member_projects'); ?>

              <?php endif; ?>

              <?php
              /** Get ACF Fields
              *** Field Group: Members -- CPT
              *** Queried Field: member_initiatives
              **/
              ?>
              <?php $post_objects = get_field('member_initiatives'); ?>

              <?php if($post_objects) : ?>

                <h4 class="border-top margin-bottom-1">Related Initiatives</h4>

                <ul class="no-bullet">
                <?php foreach( $post_objects as $post ) : ?>
                  <?php setup_postdata($post); ?>
                  <li class="margin-bottom-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endforeach; ?>
                </ul>
                <?php wp_reset_postdata(); ?>

              <?php endif; ?>

              <?php
              /** Get ACF Fields
              *** Field Group: Members -- CPT
              *** Queried Field: member_areas_of_expertise
              **/
              ?>
              <?php $post_objects = get_field('member_areas_of_expertise'); ?>

              <?php if($post_objects) : ?>

                <h4 class="border-top margin-bottom-1">Areas of Expertise</h4>

                <ul class="no-bullet">
                <?php foreach( $post_objects as $post ) : ?>
                  <?php setup_postdata($post); ?>
                  <li class="margin-bottom-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endforeach; ?>
                </ul>
                <?php wp_reset_postdata(); ?>

              <?php endif; ?>
        </div>
        <div class="small-12 large-3 columns">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'medium', array( 'class' => 'margin-bottom-2' ) ); ?>
          <?php endif; ?>

         <?php
        /** Get ACF Fields
        *** Field Group: Members — CPT
        *** Queried Field(s): member_affiliation, member_location, member_external_link 
        **/
        ?>

        <ul class="side-nav">

            <?php if( get_field('member_location') ) : ?>
              <li><strong>Location</strong><li>
              <li class="divider"></li>
              <li><?php the_field('member_location'); ?></li>
            <?php endif; ?>

            <?php if( get_field('member_external_link') ) : ?>
              <li><strong>Website</strong><li>
              <li class="divider"></li>

              <?php 
                $url = get_field('member_external_link');

                if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
                  $url = "http://" . $url;
                }
              ?>

              <li><a href="<?php echo $url; ?>">Visit Site</a></li>
            <?php endif; ?>

            </ul>

        </div>
      </div> <?php //row ?>

    </div>
    <div class="small-12 large-2 large-pull-10 columns">

      <?php $args = array(
          'sort_column' => 'menu_order',
          'title_li'    => '',
          'child_of'    => 4799,
          'depth'       => 1,
          'echo'        => 1
      ); ?>

      <ul class="side-nav">
        <li>National and Regional Networks</li>
        <li class="divider"></li>
        <?php wp_list_pages( $args ); ?>
      </ul>

    </div>
  </div> <?php // row ?>

	

<?php endwhile; ?>


<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    ) 
  ); ?>