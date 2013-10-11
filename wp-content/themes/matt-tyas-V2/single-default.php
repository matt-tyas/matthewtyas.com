<?php get_header(); ?>
       <div class="introduction-banner">
				<div class="introduction-headings">
					<h2>Out of my head</h2>
					<h3>I write about anything to do with <a href="http://matthewtyas.com/tag/design-2/">design</a>, <a href="http://matthewtyas.com/tag/development/">development</a> and my daily life. Regular features include my, <a href="http://matthewtyas.com/tag/pro-tips/">'Pro Tips'</a> and, <a href="http://matthewtyas.com/tag/things-i-couldnt-do-without/">'Things I couldn't do without'</a>.</h3>
				</div>
			</div>
			
			<div id="content-blog">
			
			<div class="gw">
				
				<div id="main" class="g two-thirds" role="main">
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<header>
								<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
								<?php the_time('nS F y') ?> 
								</time>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<p class="meta">
								Tagged with <?php the_tags(' ', ', ', ''); ?>
								</p>
							</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
							
					
						</section> <!-- end article section -->
					
					</article> <!-- end article -->
						
						<?php comments_template(); ?>
						
						<?php endwhile; ?>			
						
						<?php else : ?>
						
						<article id="post-not-found">
						    <header>
						    	<h1>Not Found</h1>
						    </header>
						    <section class="post_content">
						    	<p>Sorry, but the requested resource was not found on this site.</p>
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