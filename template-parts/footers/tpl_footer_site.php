			
      </div>
      <!-- inner wrap -->
    </div>
    <!-- off canvas wrap -->

    <?php wp_footer(); ?>

    <script>
      jQuery(document).foundation();
    </script>

    <?php if ( wp_script_is( 'scrollTo_js', 'done' ) && wp_script_is( 'localScroll_js', 'done' ) ) : ?>

    <script>jQuery.localScroll({ offset: { top: -50} });</script>

    <?php endif; ?>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-34440011-1']);
      _gaq.push(['_trackPageview']);
                    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();    
    </script>

  </body>
</html>