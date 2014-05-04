<nav class="tab-bar hide-for-large-up">
  <section class="left-small">
    <a class="left-off-canvas-toggle menu-icon">
      <span></span> 
    </a>
  </section>

  <section class="middle tab-bar-section">
    <h1 class="title">Navigation</h1>
  </section>


  <section class="right-small">
    <a class="right-off-canvas-toggle menu-icon">
      <span></span>
    </a>
  </section>
  

</nav>

<aside class="left-off-canvas-menu">

  <div class="row">
    <div class="small-12 columns">
      <?php echo get_search_form(); ?>
    </div>
  </div>

  <?php foundation_offcanvas_l(); ?>

</aside>

<aside class="right-off-canvas-menu">
  <div class="row">
    <div class="large-12 columns">
      <h6 class="reversed-text margin-top-2">Sign up for monthly updates from the SDSN.</h6>
    </div>
  </div>

  <div class="row">
    <div class="small-12 columns">
      <?php Starkers_Utilities::get_template_parts( array( 'template-parts/content/form-salesforce', ) ); ?>
    </div>
  </div>

  <ul class="off-canvas-list">
    <li><label>Contact the SDSN</label></li>
    <li><a href="mailto:info@unsdsn.org">General Inquiries</a></li>
    <li><a href="mailto:erin.trowbridge@unsdsn.org">Media Requests</a></li>
    <li><label>Social Media</label></li>
    <li><a href="https://www.facebook.com/UNSDSN">Like SDSN on Facebook</a></li>
    <li><a href="https://twitter.com/UNSDSN">Follow SDSN on Twitter</a></li>
    <li><a href="http://unsdsn.org/feed/">Subscribe to SDSN Updates</a></li>
  </ul>

</aside>

<a class="exit-off-canvas" href="#"></a>