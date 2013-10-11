		<div class="footer-background">
			<footer role="contentinfo" class="clearfix">
			<?php include (TEMPLATEPATH . '/sidebar-footer-bar.php'); ?>
			</footer> <!-- end footer -->
		</div>
	</div> <!-- end #container -->
	<!-- modernizr -->
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>
	<!-- Hashgrid - remove later  -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/hashgrid.js"></script>
	<!-- UItotop -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.ui.totop.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery.easing.js"></script>
	<!-- filterable -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/filterable.js"></script>
	<!-- scripts are now optimized via Modernizr.load -->	
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
	<!--[if lt IE 7 ]>
  		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	<?php wp_footer(); // js scripts are inserted using this function ?>
	<!-- Grab Twitter feed -->
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/matttyas.json?callback=twitterCallback2&count=1"></script>
</body>
</html>