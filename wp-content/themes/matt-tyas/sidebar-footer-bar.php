				<div id="footer-bar" class="" role="complementary">
				
					<?php // get_search_form(); ?>

					<?php if ( is_active_sidebar( 'footer-bar' ) ) : ?>

						<?php dynamic_sidebar( 'footer-bar' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="help">
						
							<p>Please activate some Widgets.</p>
						
						</div>

					<?php endif; ?>

				</div>