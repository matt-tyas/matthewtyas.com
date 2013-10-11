<?php $theme_options = get_option('blackops_theme'); 
$themePath = get_bloginfo('template_url');
$sidebars = $theme_options["sidebar"];
$twit = $theme_options["twitter"];
$rss = $theme_options["rss"];
$heart = $theme_options["heart"];
$fb = $theme_options["fb"];
$banner = $theme_options["banner"];
$logo = $theme_options["logo"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<title><?php if (is_home() || is_page_template('mainpage.php') ) { ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php } else { ?><?php wp_title($sep = ''); ?> - <?php bloginfo('name'); ?><?php } ?></title>
<?php 
	// Includes the jQuery framework
	if( !is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', ($themePath ."/js/jquery-1.4.2.min.js"), false, '1.4.2');
		wp_enqueue_script('jquery');
	}
?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_head(); ?>
<script type="text/javascript" src="<?php echo $themePath ?>/js/superfish.js"></script>
<script type="text/javascript" src="<?php echo $themePath ?>/js/supersubs.js"></script>
<script type="text/javascript" src="<?php echo $themePath ?>/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo $themePath ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo $themePath ?>/js/Comfortaa.js"></script>
<script type="text/javascript" src="<?php echo $themePath ?>/js/jquery.scrollTo-min.js"></script>
<script type="text/javascript" src="<?php echo $themePath ?>/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php echo $themePath ?>/js/jquery.prettyPhoto.js"></script>
</head>
<body>
<div id="pagewrapper">
	<div id="header">
    	<img src="<?php if(!$logo) { echo $themePath.'/images/header.png'; } else { echo $logo; } ?>" alt="<?php bloginfo('name'); ?>" />
    	<?php if($banner) { ?><div class="banner"><?php echo $banner; ?></div><?php } ?>
    </div>
	<div class="navbar">
	  	<?php wp_nav_menu( array( 'theme_location' => 'nav-menu' ) ); ?>
	
      <div class="icons">
      <ul>
      	<?php if($fb) { ?><li class="facebook"><a href="<?php echo $fb; ?>" title="Facebook"></a></li><?php } ?>
        <?php if($heart) { ?><li class="heart"><a href="<?php echo $heart; ?>" title="Love"></a></li><?php } ?>
        <?php if($rss) { ?><li class="rss"><a href="<?php echo $rss; ?>" title="RSS Feed"></a></li><?php } ?>
        <?php if($twit) { ?><li class="twitter"><a href="<?php echo $twit; ?>" title="Twitter"></a></li><?php } ?>
      </ul>
      </div>
  	</div>