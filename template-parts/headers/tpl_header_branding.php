    <header id="branding">
      <div class="row">
        <div class="small-8 medium-5 large-3 columns">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdsn_logo_fc.png" alt="Sustainable Development Solutions Network"></a>
        </div>
        <div class="small-6 large-4 columns hide-for-small">
          <div class="button-bar social-media-bar">
            <ul class="button-group radius right">
              <li class="small button icon-button green">
                <a href="https://www.facebook.com/UNSDSN" title="Follow SDSN on Facebook"><i class="fi-social-facebook"></i></a>
              </li>
              <li class="small button icon-button green">
                <a href="https://twitter.com/UNSDSN" title="Follow SDSN on Twitter"><i class="fi-social-twitter"></i></a>
              </li>
              <li class="small button icon-button green">
                <a href="http://unsdsn.org/feed/"><i class="fi-rss"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <?php if( !is_front_page() ) : // hide on front page ?>
    <section role="main" class="page">
    <?php endif; ?>