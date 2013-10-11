<?php
/*
Template Name: Index Page with Slider
*/

$theme_options = get_option('blackops_theme'); 
$auto = $theme_options['auto'];
if (!$auto) { $auto = "false"; }
$sliderspeed = $theme_options['sliderspeed'];
if (!$sliderspeed) { $sliderspeed = "500"; }
$slidercount = $theme_options['slidercount'];
if (!$slidercount) { $slidercount = "3"; }
$teaser = $theme_options['teaser'];
?>

<?php get_header(); ?>
<div id="slider-container">
    <div id="slider">
    <?php query_posts('post_type=main-slider&showposts='.$slidercount.''); ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    	<?php $alttext = $post->post_title ?>
    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('full', array('title' => $alttext)); ?></a>
    <?php endwhile; else: ?>
	<?php endif; ?>
    <?php wp_reset_query(); ?> 
    </div>
    <script>
		$(document).ready(function(){ 
			/* Home page slider */
			$('#slider').nivoSlider({
				effect:'random',
				slices:15,
				animSpeed: <?php echo $sliderspeed; ?>,
				pauseTime:4000,
				startSlide:0, //Set starting Slide (0 index)
				directionNav:false, //Next & Prev
				controlNav:true, //1,2,3...
				controlNavThumbs:false, //Use thumbnails for Control Nav
				keyboardNav:true, //Use left & right arrows
				pauseOnHover:true, //Stop animation while hovering
				manualAdvance:<?php echo $auto; ?>, //Force manual transitions
				captionOpacity:1, //Universal caption opacity
				beforeChange: function(){},
				afterChange: function(){},
				slideshowEnd: function(){} //Triggers after all slides have been shown
			});					
		});
	</script>
</div>
<?php if ($teaser) { ?>
<div id="teasertext">
	<?php echo $teaser; ?>
</div>
<?php } ?>
<div id="mainpagewidgets">

	<ul>
    	<?php 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blackops Main Page Sidebar') ) : 
			endif;
		?> 
    </ul>
</div>
</div> <!-- Pagewrapper end -->
<?php 
$theme_options = get_option('blackops_theme'); 
$ga = $theme_options['google_analytics'];
$copy = $theme_options['copyright'];
?>

<div id="copyright">
	<div>
    <p><?php echo $copy; ?><a href="#top" class="toplink">top</a></p>
    </div>
</div>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/blackops.js"></script>
<?php if($ga) echo $ga; ?>
</body>
</html>