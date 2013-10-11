<?php
  // Use a different single post template for the work category.
  $post = $wp_query->post;
  if (in_category('Work')) {
      include(TEMPLATEPATH.'/single-work.php');
  }
  else{
      include(TEMPLATEPATH.'/single-default.php');
  }
?>