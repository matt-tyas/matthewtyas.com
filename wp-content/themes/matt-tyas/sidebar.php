				<div id="sidebar1" class="sidebar col300 right last clearfix" role="complementary">
				<?php get_search_form(); ?>
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar1' ); ?>
					<?php else : ?>
						<!-- This content shows up if there are no widgets defined in the backend. -->				
						<div class="help">				
							<p>Please activate some Widgets.</p>				
						</div>
					<?php endif; ?>	
					<!-- Twitter feed -->
					<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
					<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/matttyas.json?callback=twitterCallback2&count=3"></script>		
				</div>