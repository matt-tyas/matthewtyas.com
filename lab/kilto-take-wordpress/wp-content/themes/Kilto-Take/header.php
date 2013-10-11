<?php
/**
 * The Header for our theme
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- Modernizr -->
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.6.1.min.js"></script>   
<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/selectivizr-min.js"></script>
<![endif]-->   
<script src="http://www.google.com/jsapi"></script>
<script>google.load("swfobject", "2.2");</script>
<!-- For everything else -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico">	
<!-- http://t.co/y1jPVnT -->
<link rel="canonical" href="/">	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="main hfeed site">
	<header role="banner">
			<h1 id="logo-fittext"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<nav id="site-navigation" class="nav-wrap main-navigation" role="navigation">
		<div class="table-main">
			<a href="#" id="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></a>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</div><!-- .table-main -->
	</nav><!-- #site-navigation -->
    </header><!-- #masthead -->
	<div id="main" class="wrapper">