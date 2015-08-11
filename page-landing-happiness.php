<?php
  /**
  * Template Name: Landing Page -- Happiness Report
  */
?>
<?php 
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/headers/tpl_header_site',
      //'template-parts/headers/tpl_header_branding',
      //'template-parts/navigation/tpl_nav_topbar',
      //'template-parts/navigation/tpl_nav_offcanvas'
    )
); ?>

<style>
  .whr-container { 
    background-image: url('http://unsdsn.org/wp-content/uploads/2015/03/whr_background.png');
    background-position: center top;
    background-size: contain;
    background-repeat: no-repeat;
    background-color: #0e76bc; color: #fff; padding: 2.5rem 0; }
  .whr-title { 
    color: #fff;
    border: 3px solid #fff;
    font-size: 266%;
    line-height: 1.2;
    text-align: center;
    padding: 1rem; }
  .whr-title span { font-weight: 300; }
  .whr-teaser p { font-size: 120%; line-height: 1.4; font-weight: 300; text-align: center; }
  .whr-prev-title { color: #fff; font-size: 1.333rem; font-weight: 300; text-align: center; margin-top: 2rem; }
  .download-links a { color: #fff; -webkit-transition: color 0.25s linear;
  transition: color 0.25s linear;}
  .download-links { font-size: 85%; }
  .download-links a:hover { color: #AFDFFF; }
  .whr-report-cover { float: left; margin-right: .75rem; }
  .whr-cover-feature { width: 40%; margin: 1rem auto; display: block; }

</style>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="whr-container">
  
  <div class="row">
    <div class="small-12 large-8 large-centered columns">

    <?php if ( has_post_thumbnail() ) : ?>

      <?php the_post_thumbnail( 'large', array( 'class'=>'whr-cover-feature' ) ); ?>

    <?php else : ?>

      <h1 class="whr-title">
        <?php the_title(); ?>
        <span>2015</span>
      </h1>

    <?php endif; ?>

      <div class="whr-teaser">
        <?php the_content(); ?>
      </div>

      <div class="row">
      <div class="small-12 medium-6 large-6 small-centered columns">
      <form
        id="subscribe-form"
        action="http://unsdsn.us8.list-manage.com/subscribe/post-json?u=a04105bfca6c4cb8c24ff8680&amp;id=b1ce5589c9"
        method="get"
        data-abide="ajax">


        <div class="email-field">
          <input type="email" value="" name="EMAIL" required>
          <small class="error">An email address is required.</small>
        </div>

        <!-- hidden MC fields -->
            
        <button type="submit" name="submit" class="button green postfix mchimp-sub">
          Subscribe
          <div class="loadingtrail" style="display:none"></div>
        </button>

        <div id="subscribe-result" style="display: none; line-height: 1.4;"></div>

      </form>
      </div></div>

      <h3 class="whr-prev-title">Launch Event</h3>

      <div class="whr-teaser">
        <p>Report co-editors John Helliwell, Richard Layard, and Jeffrey Sachs will hold a special public event on April 24, 2015 to discuss the findings of the 2015 World Happiness Report. You can register for the free event below:</p>

        <div class="row">
          <div class="small-12 medium-4 large-4 small-centered columns">
            <a class="button small green" style="width: 100%;" href="http://www.eventbrite.com/e/happiness-report-2015-tickets-16317504094?ref=ebtn">Register</a>
          </div>
        </div>

      </div>

      <h3 class="whr-prev-title">Previous Editions</h3>

      <ul class="small-block-grid-1 large-block-grid-2">
        <li>
          <h5 class="whr-prev-title">2013</h5>
          <a href="http://unsdsn.org/wp-content/uploads/2014/02/WorldHappinessReport2013_online.pdf">
            <img width="108" height="150" src="http://unsdsn.org/wp-content/uploads/2014/02/world_happiness_report_2013_cvr.jpg" class="whr-report-cover thmb wp-post-image" alt="world_happiness_report_2013_cvr">
          </a>
          <p class="download-links">
            <a href="http://unsdsn.org/wp-content/uploads/2014/02/WorldHappinessReport2013_online.pdf">Download Report</a><br>
            <a href="http://unsdsn.org/wp-content/uploads/2013/09/Chapter-2_online-appendix_9-5-13_final.pdf">Download Chapter 2 Index</a><br>
            <a href="http://unsdsn.org/wp-content/uploads/2013/09/WHR-2013_FAQs_final.pdf">Download FAQ</a><br>
            <a href="http://unsdsn.org/resources/publications/world-happiness-report-2013/">Press Release</a>
          </p>
        </li>
        <li>
          <h5 class="whr-prev-title">2012</h5>
          <a href="http://www.earth.columbia.edu/sitefiles/file/Sachs%20Writing/2012/World%20Happiness%20Report.pdf">
            <img width="108" height="150" src="http://unsdsn.org/wp-content/uploads/2015/03/whr_2012_cover.jpg" class="whr-report-cover thmb wp-post-image" alt="world_happiness_report_2013_cvr">
          </a>
          <p class="download-links">
            <a href="http://www.earth.columbia.edu/sitefiles/file/Sachs%20Writing/2012/World%20Happiness%20Report.pdf">Download Report</a><br>
            <a href="http://www.earth.columbia.edu/articles/view/2960">Press Release</a>
          </p>
        </li>
      </ul>
      

      <h3 class="whr-prev-title">Media Inquiries</h3>
      <div class="whr-teaster">
        <p class="download-links" style="text-align:center">For media inquiries, contact <a href="mailto:happiness@unsdsn.org">happiness@unsdsn.org</a></p>
      </div>
      

    </div>
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