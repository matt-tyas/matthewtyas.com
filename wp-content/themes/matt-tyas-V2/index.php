<?php get_header(); ?>
			<div class="introduction-banner">
				<div class="introduction-headings">
					<h2>Out of my head</h2>
					<h3>I write about anything to do with <a href="http://matthewtyas.com/tag/design-2/">design</a>, <a href="http://matthewtyas.com/tag/development/">development</a> and my daily life. Regular features include my, <a href="http://matthewtyas.com/tag/pro-tips/">'Pro Tips'</a> and, <a href="http://matthewtyas.com/tag/things-i-couldnt-do-without/">'Things I couldn't do without'</a>.</h3>
				</div>
			</div>
				
			<div id="content-blog">		
				
				<div class="gw">
				
				<div id="main" role="main" class="g two-thirds">
					    <?php
							if (is_home()) {
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Sets up Pagination
							query_posts("cat=-5&paged=$paged"); // Excludes the Work Category from the main blog
							}
						?>
						
						
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							<header>
								<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
								<?php the_time('nS F y') ?> 
								</time>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<p class="meta">
								<?php // the_category(', '); ?>
								<?php // the_author_posts_link(); ?>
								Tagged with <?php the_tags(' ', ', ', ''); ?>
								</p>
							</header> <!-- end article header -->
							<section class="post_content clearfix overview">
								<?php // the_content(); ?>
								<?php the_excerpt(); ?>
							</section> <!-- end article section -->
						    <!--<footer>
								<p class="tags"><?php // the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
							</footer> --> <!-- end article footer -->
						</article> <!-- end article -->
						<?php comments_template(); ?>
						<?php endwhile; ?>
						
						<?php //  if (function_exists('page_navi')) { // if expirimental feature is active ?>
							<?php // page_navi(); // use the page navi function ?>
						<?php // } else { // if it is disabled, display regular wp prev & next links ?>
							<!--<nav class="wp-prev-next">
								<ul class="clearfix">
									<li class="prev-link"><?php // next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
									<li class="next-link"><?php //previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
								</ul>
							</nav>-->
						<?php // } ?>		
						<?php else : ?>
						<article id="post-not-found">
						    <header>
						    	<h1>Nothing to see here!</h1>
						    </header>
						    <section class="post_content">
						    	<p>Sorry, but whatever you were after is not, or never was, here.</p>
						    </section>
						    <footer>
						    </footer>
						</article>
						<?php endif; ?>
					</div> <!-- end #main -->
					
					<a id="tools" href="#">Tools</a>
					<?php get_sidebar(); // sidebar 1 ?>
				
			</div> <!-- end #content -->
			
			</div>
			
			<?php get_footer(); ?>