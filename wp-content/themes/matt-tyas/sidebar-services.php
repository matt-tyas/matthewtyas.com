				<div id="services-bar" class="sidebar col300 right last clearfix" role="complementary">
					<?php if ( is_active_sidebar( 'services-bar' ) ) : ?>
						<?php dynamic_sidebar( 'services-bar' ); ?>
					<?php else : ?>
						<!-- This content shows up if there are no widgets defined in the backend. -->				
						<div class="help">				
							<p>Please activate some Widgets.</p>				
						</div>
					<?php endif; ?>			
				</div>