<?php get_header(); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="introduction-banner work">
				<div class="introduction-headings">
					<h2 class="archives"><?php the_title(); ?></h2>
					<?php $workex = get_post_meta($post->ID, 'work_excerpt', true); ?>
					<h3><?php echo $workex; ?></h3>
					
				</div>
			</div>
			
			<div id="content-work">
			
				
				
					<div id="main" role="main" class="gw">
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<section class="post_content clearfix" itemprop="articleBody">
						<?php the_content(); ?>
						</section> <!-- end article section -->
					    </article> <!-- end article -->
						<?php // comments_template(); ?>
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
    				

    			
    			
			</div> <!-- end #content -->
<?php get_footer(); ?>


					