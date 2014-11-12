<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
	<!-- For third-generation iPad with high-resolution Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-touch-icon-144x144-precomposed.png">
	<!-- For iPhone with high-resolution Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-touch-icon-114x114-precomposed.png">
	<!-- For first- and second-generation iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-touch-icon-72x72-precomposed.png">
	<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-touch-icon-precomposed.png">
	<!-- Catch all favicon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/favicon.ico"/>

	<meta name="google-translate-customization" content="31e34ac9c4453d0-493d04ba3be260eb-g5c114967ba17ecdb-9"></meta>

	<script>
		// Web Font Loader
// http://www.apache.org/licenses/LICENSE-2.0
WebFontConfig = {
    typekit: { id: 'ond0lpv' }
  };

  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
              '://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
  </script>

	<?php wp_head(); ?>

  <!--[if lt IE 9]>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/js/respond.min.js'></script>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/js/html5shiv.js'></script>
  <![endif]-->
</head>

<body <?php //body_class(); ?>>
	
	<div class="off-canvas-wrap">
		<div class="inner-wrap">

