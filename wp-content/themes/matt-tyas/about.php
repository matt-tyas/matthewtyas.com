<?php
/*
Template Name: about
*/
?>
<?php get_header(); ?>
			<div class="introduction-banner">
				<div class="introduction-headings">
					<h2><?php the_title(); ?> <span>me</span></h2>
					<h3>About this site, my work and my background.</h3>
				</div>
			</div>
			<div id="content-wrap">
			<div id="content-home">
				<div id="inner-content" class="wrap clearfix">
					<div id="main" class="col620 left first clearfix" role="main">
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
					<?php include (TEMPLATEPATH . '/sidebar-contact.php'); ?>
				</div> <!-- end #inner-content -->
			</div> <!-- end #content -->
			</div><!--content-wrap-->
<?php get_footer(); ?>