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

    // Foundation Icons CSS
		wp_register_style( 'foundation_icons', get_stylesheet_directory_uri().'/assets/fonts/foundation-icons.css', '', '', 'screen' );
    wp_enqueue_style( 'foundation_icons' );

    // Open Sans
		wp_register_style( 'open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700', '', '', 'screen' );
    wp_enqueue_style( 'open-sans' );

    // Theme CSS
		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
    wp_enqueue_style( 'screen' );

    // Print CSS
    wp_register_style( 'print', get_stylesheet_directory_uri().'/print.css', '', '', 'print' );
    wp_enqueue_style( 'print' );

    // Modernizer
    wp_register_script( 'modernizr', get_stylesheet_directory_uri().'/assets/js/vendor/modernizr.js', array( 'jquery' ), '', false );
		wp_enqueue_script( 'modernizr' );

    /*
		// Respond.js -- https://github.com/scottjehl/Respond/
    wp_register_script( 'respond', get_stylesheet_directory_uri().'/assets/js/respond.min.js', array( 'jquery' ), '', false );
		wp_enqueue_script( 'respond' );

		// html5shiv -- https://github.com/aFarkas/html5shiv
		wp_register_script( 'html5shiv', get_stylesheet_directory_uri().'/assets/js/html5shiv.js', array( 'jquery' ), '', false );
		wp_enqueue_script( 'html5shiv' );
    */

    // Foundation JS
    wp_register_script( 'foundation_js', get_stylesheet_directory_uri().'/assets/js/foundation.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foundation_js' );


		// SDSN JS
    wp_register_script( 'sdsn_js', get_stylesheet_directory_uri().'/assets/js/site.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'sdsn_js' );

    // ScrollTo JS
    wp_register_script( 'scrollTo_js', get_stylesheet_directory_uri().'/assets/js/jquery.scrollTo.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'scrollTo_js' );

    // localScroll JS
    wp_register_script( 'localScroll_js', get_stylesheet_directory_uri().'/assets/js/jquery.localScroll.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'localScroll_js' );

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