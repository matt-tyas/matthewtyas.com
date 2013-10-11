<?php get_header(); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="introduction-banner">
				<div class="introduction-headings">
					<h2><?php the_title(); ?></h2>
					<?php $workex = get_post_meta($post->ID, 'work_excerpt', true); ?>
					<h3><?php echo $workex; ?></h3>
				</div>
			</div>
			<div id="content-home">
				<div id="inner-content-work" class="wrap clearfix">
					<div id="main" class="col620 left first clearfix" role="main">
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
    				<div id="work-bar" class="sidebar col300 right last clearfix" role="complementary">
    				<h4><span>Description</span></h4>
    				<?php $workdesc = get_post_meta($post->ID, 'work_description', true); ?>
    				<p><?php echo $workdesc; ?></p>
    				<!--<h4><span>Posted in</span></h4>
					<?php // the_category(', '); ?>-->
				    </div>
    			</div> <!-- #inner-content -->
			</div> <!-- end #content -->
<?php get_footer(); ?>