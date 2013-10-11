<?php 
$theme_options = get_option('blackops_theme'); 
$ga = $theme_options['google_analytics'];
$copy = $theme_options['copyright'];
?>
<div id="footer">
	<div class="footer-wrap">
		<ul>
        	<?php
				if ( is_page_template('mainpage.php') ) {
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blackops Main Page Footer') ) :
					endif;
				} else {
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('BlackOps Footer Sidebar') ) :
					endif;
				}
			?>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<div id="copyright">
	<div>
    <p><?php echo $copy; ?><a href="#top" class="toplink">top</a></p>
    </div>
</div>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/blackops.js"></script>
<?php if($ga) echo $ga; ?>
</body>
</html>