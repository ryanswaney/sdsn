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
      <?php Starkers_Utilities::get_template_parts( array( 'template-parts/navigation/tpl_nav_sidebar_news' ) ); ?>
    </div>

    <div class="small-12 large-8 end columns">
      <article class="post">
        <?php if ( has_post_thumbnail() ) : ?>
          <header class="margin-bottom-2">
          <?php the_post_thumbnail( 'large', array( 'class' => 'feature-photo' ) ); ?>
          <?php if( get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
            <div class="post-meta"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></div>
          <?php endif; ?>
          </header>
        <?php endif; ?>

        <?php the_content(); ?>

        <footer class="border-top">
          <div class="small-12 large-6 columns">
            <h6 >Categorized as:</h6>
            <?php the_category(); ?>
          </div>
          <div class="small-12 large-6 columns">
            <?php
              $share_link_title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
              $share_link_URL = urlencode(wp_get_shortlink());
            ?>
            <h6>Share this:</h6>
            <ul class="icon-bar">
              <li class="icon facebook">
                <a href="<?php echo 'https://www.facebook.com/sharer/sharer.php?u='.$share_link_URL;?>" title="Share on Facebook: <?php the_title(); ?>" class="js-social-share">
                  <svg viewBox="0 0 72 72">
                     <use xlink:href="#facebook" />
                   </svg>
                 </a>
              </li>
              <li class="icon twitter">
                <a href="<?php echo 'https://twitter.com/intent/tweet/?text='.$share_link_title.'&url='.$share_link_URL; ?>" title="Share on Twitter: <?php the_title(); ?>" class="js-social-share">
                  <svg viewBox="0 72 72 72">
                   <use xlink:href="#twitter" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </footer>

      </article>
    </div>

    <?php endwhile; ?>

  </div>

<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    )
  ); ?>
