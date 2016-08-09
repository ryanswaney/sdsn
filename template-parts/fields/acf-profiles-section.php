<?php
  /*

  Code for ACF repeater field for reusable profile sections in templates.
  Ref: https://www.advancedcustomfields.com/resources/repeater/

  Fields
    profile_section (repeater)
      profile_section_title (text)
      profile_section_description (textarea)
      profiles_list (relationship)

  */

  if( have_rows('profile_section') ):
    while ( have_rows('profile_section') ) : the_row();

      if( get_sub_field('profile_section_title') ) :

        echo '<h4>'.get_sub_field('profile_section_title').'</h4>';

      endif; // profile_section_title field

      if( get_sub_field('profile_section_description') ):

        the_sub_field('profile_section_description');

      endif; // profile_section_description
      ?>

      <?php
        $posts = get_sub_field('profiles_list');

        if( $posts ): ?>
        <ul class="small-block-grid-1 medium-block-grid-3">
        <?php foreach( $posts as $post): ?>
          <?php setup_postdata($post); ?>
          <li>
              <article class="post blurb">
                <header>
                  <?php if ( has_post_thumbnail() ) : ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'feature-photo' ) ); ?></a>
                  <?php endif; ?>
                  <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h1>
                  <div class="post-meta"><?php the_field('people_title'); ?></div>
                </header>
              </article>
          </li>
        <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
      <?php endif; // profiles_list ?>

      <?php
    endwhile;
  endif; // profile_section repeater field
?>
