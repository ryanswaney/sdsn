<div class="contain-to-grid show-for-large-up">
        <nav class="top-bar" data-topbar>
          <ul class="title-area">
            <li class="name"></li>
          </ul>

          <section class="top-bar-section">
            <!-- Left Nav Section -->
            <?php foundation_top_bar_l(); ?>

            <!-- Right Nav Section -->
            <ul class="right">
              <li class="divider"></li>
              <li>
                <a href="#" data-dropdown="drop-newsletter">Newsletter</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#" data-dropdown="drop-translate">Translate</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#" data-dropdown="drop-search" class="icon-link">
                  <svg viewBox="0 261 72 72" style="height: .8em;width: .8em;margin-top: .5em; fill:#fff;">
                     <use xlink:href="#search" />
                   </svg>
                </a>
              </li>
              <li class="divider"></li>
            </ul>
          </section>
        </nav>

        <div id="drop-search" class="medium content f-dropdown" data-dropdown-content>
          <?php echo get_search_form(); ?>
        </div>

        <div id="drop-newsletter" class="medium content f-dropdown" data-dropdown-content>
          <div class="row">
            <div class="large-12 columns">
              <h6 class="reversed-text">Sign up for monthly updates from the SDSN.</h6>
            </div>
          </div>

          <div class="row">
            <div class="large-12 columns">
                <?php Starkers_Utilities::get_template_parts( array( 'template-parts/content/form-mc-basic-ajax' ) ); ?>
            </div>
          </div>

          <div class="row">
            <div class="large-12 columns">
              <h6 class="reversed-text border-top">Questions or Comments? </h6>
              <p class="reversed-text" style="font-size: 80%;">We welcome your questions or comments on our work. Please get in touch with us by writing to <a href="mailto:info@unsdsn.org">info@unsdsn.org</a>.</p>
            </div>
          </div>
        </div>

        <!-- Google translate -->
        <div id="drop-translate" class="medium content google-translate f-dropdown" data-dropdown-content>
          <div class="row">
            <div class="large-12 columns">

              <div id="google_translate_element"></div>
              <script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                }
              </script>
              <script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            </div>
          </div>
        </div>
        <!-- / Google translate -->


      </div>
