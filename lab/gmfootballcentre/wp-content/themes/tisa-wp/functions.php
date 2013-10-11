<?php
/* Remove Unwanted Stuff */
require_once('inc/remove.php');

/* Creating Custom Post Types */
require_once('inc/admin/sd_register_post_type.1.3.php');
sd_register_post_type( 'main-slider' );
$theme_options = get_option('blackops_theme'); 
$pages = $theme_options["custom_pages"]; 
$c_pages = explode(",",$pages);
foreach ($c_pages as $custom_pages):
	sd_register_post_type( $custom_pages );
	$trimmed = trim($custom_pages);
	$filter = "manage_edit-".$trimmed."_columns";
	add_filter($filter, "edit_columns");
endforeach;
	
	function edit_columns($portfolio_columns){
		$portfolio_columns = array(
			"cb" => "<input type=\"checkbox\" />",
			"title" => "Project Title",
			"description" => "Description",
		);
		return $portfolio_columns;
	}
	 
	function columns_display($portfolio_columns){
		switch ($portfolio_columns)
		{
			case "description":
				the_content();
				break;				
		}
	}
	add_action("manage_posts_custom_column",  "columns_display");

/* Admin Page */
require_once('inc/admin.php');

/* WP-Pagenavi */
if ( !function_exists('wp_pagenavi') ) :
require_once('inc/wp-pagenavi.php');
endif;

/* Enable WP Post Thumbnails */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 48, 48, true );
}

/* Meta Box for Pages */
require_once('inc/page-metabox.php');

/* Activate WP3 Menu Support */
require_once('inc/wp3menu.php');

/* Register Sidebers */

if ( function_exists('register_sidebar') ){
register_sidebar(array('name' => 'Blackops Sidebar', 'before_widget' => '<li id="%1$s" class="widget %2$s">', 'after_widget' => '</li>', 'before_title' => '<h2>', 'after_title' => '</h2>'));
}
if ( function_exists('register_sidebar') ){
register_sidebar(array('name' => 'Blackops Post Sidebar', 'before_widget' => '<li id="%1$s" class="widget %2$s">', 'after_widget' => '</li>', 'before_title' => '<h2>', 'after_title' => '</h2>'));
}
if ( function_exists('register_sidebar') ){
register_sidebar(array('name' => 'Blackops Page Sidebar', 'before_widget' => '<li id="%1$s" class="widget %2$s">', 'after_widget' => '</li>', 'before_title' => '<h2>', 'after_title' => '</h2>'));
}
if ( function_exists('register_sidebar') ){
register_sidebar(array('name' => 'Blackops Footer Sidebar', 'before_widget' => '<li id="%1$s" class="widget %2$s">', 'after_widget' => '</li>', 'before_title' => '<h2>', 'after_title' => '</h2>'));
}
if ( function_exists('register_sidebar') ){
register_sidebar(array('name' => 'Blackops Main Page Sidebar', 'before_widget' => '<li id="%1$s" class="widget %2$s">', 'after_widget' => '</li>', 'before_title' => '<h2>', 'after_title' => '</h2>'));
}
if ( function_exists('register_sidebar') ){
register_sidebar(array('name' => 'Blackops Main Page Footer', 'before_widget' => '<li id="%1$s" class="widget %2$s">', 'after_widget' => '</li>', 'before_title' => '<h2>', 'after_title' => '</h2>'));
}

/* Widgets */
require_once('inc/widgets.php');
add_filter('widget_text', 'do_shortcode');

/* Related Posts */
require_once('inc/related.php');

/* Shortcodes */
require_once('inc/shortcodes.php');

/* Comment Styling */
require_once('inc/comments.php');

?>