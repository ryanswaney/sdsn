<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================

	Required external files

	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================

	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme

	======================================================================================================================== */

	add_theme_support('post-thumbnails');

	register_nav_menus(array('primary' => 'Primary Navigation'));

  register_nav_menus(array('news-cat-menu' => 'News Category Menu'));

	require_once( 'lib/foundation_topbar_filters.php' );
	require_once( 'lib/foundation_topbar_menu.php' );

  require_once( 'lib/shortcodes.php' );

	/* ========================================================================================================================

	Actions and Filters

	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

  require_once( 'external/admin-filters.php' );

	require_once( 'lib/pre_get_posts_filters.php' );

	require_once( 'lib/twitter_cards.php' );

	add_action('wp_head', 'add_twitter_cards');

	/* ========================================================================================================================

	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );

	======================================================================================================================== */

  // SDSN Solutions Iniatives
  require_once( 'custom-post-types/cpt-initiatives.php' );

  // SDSN Members
  require_once( 'custom-post-types/cpt-members.php' );

  // SDSN People
  require_once( 'custom-post-types/cpt-people.php' );

  // SDSN Thematic Groups
  require_once( 'custom-post-types/cpt-groups.php' );

  // SDSN Thematic Groups
  require_once( 'custom-post-types/cpt-publications.php' );

  // SDSN in Press
  //require_once( 'custom-post-types/cpt-press.php' );


	/* ========================================================================================================================

	Scripts

	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {

		// Normalize
		wp_register_style( 'normalize', get_stylesheet_directory_uri().'/assets/css/normalize.css', '', '', 'screen' );
		wp_enqueue_style( 'normalize' );

		// Foundation CSS
		wp_register_style( 'foundation', get_stylesheet_directory_uri().'/assets/css/foundation.min.css', '', '', 'screen' );
    wp_enqueue_style( 'foundation' );

    // Theme CSS
		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
    wp_enqueue_style( 'screen' );

    // Print CSS
    wp_register_style( 'print', get_stylesheet_directory_uri().'/print.css', '', '', 'print' );
    wp_enqueue_style( 'print' );

    // Modernizer
    wp_register_script( 'modernizr', get_stylesheet_directory_uri().'/assets/js/vendor/modernizr.js', array( 'jquery' ), '', false );
		wp_enqueue_script( 'modernizr' );

    // Foundation JS
    wp_register_script( 'foundation_js', get_stylesheet_directory_uri().'/assets/js/foundation.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foundation_js' );

		// SDSN JS
    wp_register_script( 'sdsn_js', get_stylesheet_directory_uri().'/assets/js/site.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'sdsn_js' );

		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );

		// Load Custom JS
		if ( is_page_template('page-events.php') ) {
        wp_enqueue_script('handlebars-js',get_stylesheet_directory_uri().'/assets/js/handlebars.min-latest.js', array('jquery'),'',true);
				wp_enqueue_script('sheetrock-js',get_stylesheet_directory_uri().'/assets/js/sheetrock.min.js', array('jquery'),'',true);
				wp_enqueue_script('sdsn-events-js',get_stylesheet_directory_uri().'/assets/js/events.js', array('jquery'),'',true);
    }

	}

	/* ========================================================================================================================

	Comments

	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
