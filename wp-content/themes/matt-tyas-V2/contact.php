<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
			<div class="introduction-banner contact">
				<div class="introduction-headings">
					<h2>Contact</h2>
					<h3>Please give me a shout using one of the <a href="mailto:matt@matthewtyas.com">traditional methods</a> or catch me on <a href="http://twitter.com/#!/MattTyas">twitter</a>. I like to meet new people and make <a href="http://uk.linkedin.com/pub/matthew-tyas/17/247/74b">new connections</a>.</h3>
				</div>
			</div>
			
			<div id="content-contact">
				<div class="gw">
					<div id="main" role="main" class="g two-thirds">

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
						</article>
						<?php endif; ?>

					</div> <!-- end #main -->
					
					<?php include (TEMPLATEPATH . '/sidebar-contact.php'); ?>
				</div> <!-- end #inner-content -->
			</div> <!-- end #content -->
<?php get_footer(); ?>