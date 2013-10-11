				<div id="about-bar" class="g one-third" role="complementary">
					<?php if ( is_active_sidebar( 'about-bar' ) ) : ?>
						<?php dynamic_sidebar( 'about-bar' ); ?>
					<?php else : ?>
						<!-- This content shows up if there are no widgets defined in the backend. -->				
						<div class="help">				
							<p>Please activate some Widgets.</p>				
						</div>
					<?php endif; ?>			
				</div>