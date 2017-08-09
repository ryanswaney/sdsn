
      </div>
      <!-- inner wrap -->
    </div>
    <!-- off canvas wrap -->

    <?php wp_footer(); ?>

    <script>
      jQuery(document).foundation();
    </script>

    <?php if ( wp_script_is( 'scrollTo_js', 'done' ) && wp_script_is( 'localScroll_js', 'done' ) ) : ?>

    <script>//jQuery.localScroll({ offset: { top: -50} });</script>

    <?php endif; ?>

		<!-- Google Analytics -->
		<script>
		window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
		ga('create', 'UA-34440011-1', 'auto');
		ga('send', 'pageview');
		</script>
		<script>
		var trackOutboundLink = function(url) {
		   ga('send', 'event', 'outbound', 'click', url, {
		     'transport': 'beacon',
		     'hitCallback': function(){document.location = url;}
		   });
		}
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		<!-- End Google Analytics -->

  </body>
</html>
