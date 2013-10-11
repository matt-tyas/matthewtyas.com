    <div class="home-footer">
				<div class="inner-home">
					<?php include (TEMPLATEPATH . '/sidebar-home-bottom.php'); ?>
				</div>
			</div><!-- End #home-footer -->
    </div><!-- End Wrap for sticky footer -->
    </div> <!-- end #container -->
	<footer role="contentinfo" class="clearfix">
	<?php include (TEMPLATEPATH . '/sidebar-footer-bar.php'); ?>
	</footer> <!-- end footer -->
	<!-- Plugins minified -- Smooth Scroll -- Isotope -- Flexslider -- PIE -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/plugins.js"></script>
	<!--[if (gte IE 6)&(lte IE 8)]>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/PIE.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/selectivizr-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/respond.min.js"></script>
	<![endif]-->
	<!-- scripts are now optimized via Modernizr.load -->	
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
	<!--[if lt IE 7 ]>
  	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	<?php wp_footer(); // js scripts are inserted using this function ?>
	<!--Google analytics - http://mths.be/aab -->
	<script>
	var _gaq=[['_setAccount','UA-27224148-1'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
</body>
</html>