<?php

  // Fixes empty paragraph tags in shortcodes
  // https://gist.github.com/maxxscho/2058547
  function shortcode_empty_paragraph_fix($content)
  {
      $array = array (
          '<p>[' => '[',
          ']</p>' => ']',
          ']<br />' => ']'
      );

      $content = strtr($content, $array);

      return $content;
  }

  add_filter('the_content', 'shortcode_empty_paragraph_fix');

  function shortcode_button_func( $atts, $content = null ) {

    // Shortcode to create the buttoncompontent found in Foundation
    // http://foundation.zurb.com/docs/components/buttons.html

    extract(
      shortcode_atts(
        array(
          'title' => '',
          'url' => '',
          'class' => '' // Extends default styles
          ), $atts));

    if ( !empty( $title ) && !empty( $url ) ) :

      $output = '<a href="' . esc_attr( $url ) . '" title="Permalink to: ' . esc_attr( $title ) . '" class="button radius dark'. esc_attr( $class ). '">' . esc_attr( $title ) . '</a>';

      return $output;

    endif;


  }

  add_shortcode( 'button', 'shortcode_button_func' );

  function shortcode_pullquote_func( $atts, $content = null) {

    // Shortcode to create a pullquote within text. Differs from normal <blockquote>.

    extract(
      shortcode_atts(
        array(
          'align' => '' // accepts left or right
          ), $atts));

    if( !empty( $content ) ) :

      $output = '<blockquote class="pullquote ';
      $output .= esc_attr( $align );
      $output .= '">';
      $output .= do_shortcode( $content );
      $output .= '</blockquote>';

      return $output;

    endif;
  }

  add_shortcode( 'pullquote', 'shortcode_pullquote_func' );

  function shortcode_tooltip_func( $atts, $content = null ) {

    // Shortcode to create the tooltip compontent found in Foundation
    // http://foundation.zurb.com/docs/components/tooltips.html

    extract(
      shortcode_atts(
        array(
          'title' => '',
          'location' => '', // Accepts: tip-top, tip-bottom, tip-left, tip-right
          'layout' => '' // Accepts: radius, round
          ), $atts));

    if ( !empty( $title) ) :

      // Add base tooltip CSS class.
      $class = 'has-tip';

      // Check layout attribute for location of the tooltip.
      if ( !empty( $location) ) :

        $class .= ' ' . esc_attr( $location );

      else :

        $class .= ' tip-top';

      endif;

      if ( !empty( $layout ) ) :

        $class .= ' ' . esc_attr( $layout );

      endif;

      $output = '<span data-tooltip class="' . $class . '" title="'. esc_attr( $title ) .'">';
      $output .= $content;
      $output .= '</span>';

      return $output;

    endif;

  }

  add_shortcode( 'tooltip', 'shortcode_tooltip_func' );


  function shortcode_accordian_func( $atts, $content = null ) {

    wp_deregister_script('scrollTo_js');
    wp_deregister_script('localScroll_js');

    // Shortcode to create the accordian compontent found in Foundation
    // http://foundation.zurb.com/docs/components/accordion.html

    // Accepts no attributes. Requires secondary shortcode for accordian items.

    $output = '<dl class="accordion" data-accordion>';
    $output .= do_shortcode( $content );
    $output .= '</dl>';

    return $output;


  }

  add_shortcode( 'accordian', 'shortcode_accordian_func' );

  function shortcode_accordianitem_func( $atts, $content = null ) {

    // Shortcode to create the accordian compontent found in Foundation
    // http://foundation.zurb.com/docs/components/accordion.html

    extract(
      shortcode_atts(
        array(
          'title' => '',
          'itemid' => ''
          ), $atts));

    if ( !empty( $title ) && !empty( $itemid ) ) :

    $output = '<dd>';
    $output .= '  <a href="#panel' . esc_attr( $itemid ) . '" class="accordian-chevron">' . esc_attr( $title ) . '</a>';
    $output .= '  <div id="panel' . esc_attr( $itemid ) . '" class="content">';
    $output .= do_shortcode( $content );
    $output .= '  </div>';
    $output .= '</dd>';

    endif;

    return $output;


  }

  add_shortcode( 'accordian-item', 'shortcode_accordianitem_func' );

?>
