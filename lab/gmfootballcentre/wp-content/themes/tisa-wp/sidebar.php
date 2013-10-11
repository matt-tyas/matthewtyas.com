<div id="sidebar">
<ul>
    <?php if ( is_single()) {
    		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blackops Post Sidebar') ) : 
			endif;

		} elseif ( is_page()) {
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blackops Page Sidebar') ) : 
			endif;
			
		} else {
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blackops Sidebar') ) : 
			endif;
		}
	?>  
</ul>
</div>