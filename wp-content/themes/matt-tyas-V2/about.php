<?php
/*
Template Name: about
*/
?>
<?php get_header(); ?>
			<div class="introduction-banner about">
				<div class="introduction-headings">
					<h2>About</h2>
					<h3>Who am I anyway? How did I get to where I am today? Are you still reading? Excellent. I answer these and other burning questions right here.</h3>
					<!--<h3>If you're here, you probably want to employ me on a permanent or freelance basis or maybe you're just nosy. Whatever you reasons, enjoy.</h3>-->
				</div>
			</div>
			
			<div id="content-about">
			<div class="gw">
					<div id="main" role="main" class="g two-thirds">
					<div class="inner-page">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<section class="post_content">
								<?php the_content(); ?>
							</section>
						<?php // comments_template(); ?>
						<?php endwhile; ?>	
						<?php else : ?>
						<article id="post-not-found">
						    <header>
						    	<h1>Not Found</h1>
						    </header>
						    <section class="post_content">
						    	<p>How embarrassing, I appear to have misplaced that&hellip;</p>
						    </section>
						    <footer>
						    </footer>
						</article>
						<?php endif; ?>
					</div>
					</div> <!-- end #main -->
					<!--<a id="tools" href="#">Tools</a>-->
					<?php include (TEMPLATEPATH . '/sidebar-about.php'); ?>
			</div>
			</div> <!-- end #content -->
<?php get_footer(); ?>