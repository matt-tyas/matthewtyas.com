<!DOCTYPE html> 

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
		
		wp_title( '-', true, 'right' );
		
		// Add the blog name.
		bloginfo( 'name' );
		
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " - $site_description";
		
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		
		?></title>		
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- mobile optimized -->
		<!--<meta name="viewport" content="width=device-width,initial-scale=1">-->
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<!-- IE6 toolbar removal -->
		<meta http-equiv="imagetoolbar" content="false" />
		<!-- allow pinned sites -->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!-- default stylesheet -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/normalize.css">
		<!-- Matt-Tyas theme stylesheet -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<!--[if lt IE 9]>
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">	
		<![endif]-->
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<!-- Call Jquery using WP enqueue, other scripts in footer.php -->
		<?php wp_enqueue_script("jquery"); ?>
		<!-- wordpress head -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- modernizr -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	</head>
	<body <?php body_class(); ?>>
		<div id="container">
			<div id="header-background">
			<header role="banner">
			<h1>
			    <a href="<?php echo home_url(); ?>" rel="nofollow">
			    <img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/matt-tyas/library/images/top-hat.png" width="76" height="76" alt="matthewtyas.com logo top hat image" />
				<?php bloginfo('name'); ?>
				</a>
			</h1>
					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>
			</header>
			
			</div><!-- end header-background -->