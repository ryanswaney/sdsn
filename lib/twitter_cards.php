<?php
function add_twitter_cards() {
  if(is_single()) {
  $tc_url    = get_permalink();
  $tc_title  = get_the_title();
  $tc_description   = get_the_excerpt();
  $tc_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $size = 'full');
  $tc_image_thumb  = $tc_image[0];
  $tc_author   = 'UNSDSN';
?>
  <meta name="twitter:card" value="summary_large_image" />
  <meta name="twitter:site" value="@UNSDSN" />
  <meta name="twitter:title" value="<?php echo $tc_title; ?>" />
  <meta name="twitter:description" value="<?php echo $tc_description; ?>" />
  <meta name="twitter:url" value="<?php echo $tc_url; ?>" />
  <?php if($tc_image) { ?>
  <meta name="twitter:image" value="<?php echo $tc_image_thumb; ?>" />
  <?php } if($tc_author) { ?>
  <meta name="twitter:creator" value="@<?php echo $tc_author; ?>" />
<?php
  }
  }
}
?>
