<?php
/**
 * Template Name: Page | Events
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

	<?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_page-nosidebar' ) ); ?>

  <div class="row">

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

        <ul id="evnt" class="event-list">
          <script id="evnt-template" type="text/x-handlebars-template">
            <li class="event">
              {{#if cells.URL }}
              <h4 class="event-title">
                <a href="{{cells.URL}}">
                {{cells.EventTitle}}
                 </a>
              </h4>
              {{else}}
              <h4 class="event-title">{{cells.EventTitle}}</h4>
              {{/if}}
              {{#if cells.DisplayDate}}
              <div class="event-date">
                {{cells.DisplayDate}}
              </div>
              {{/if}}
              {{#if cells.StartTime}}
                <div class="event-time">
                  {{cells.StartTime}}
                  {{#if cells.EndTime}}
                  &ndash; {{cells.EndTime}}
                  {{/if}}
                </div>
              {{/if}}
              {{#if cells.Location}}
                <div class="event-location">
                  {{cells.Location}}
                </div>
              {{/if}}
              {{#if cells.Organizers}}
                <div class="event-orgs">
                  Organized by: {{ cells.Organizers}}
                </div>
              {{/if}}
              {{#if cells.Description}}
                <div class="event-desc">
                  <p>
                    <strong>About the event:</strong><br/>
                    {{cells.Description}}
                  </p>
                </div>
              {{/if}}
          </li>
          </script>
        </ul>

      </article>
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
