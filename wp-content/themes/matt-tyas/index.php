<?php get_header(); ?>
			<div class="introduction-banner">
				<div class="introduction-headings">
					<h2>Out <span>of my</span> Head</h2>
					<h3>My writings about my life as a web designer, side projects other bits.<br /> This could get a little  self indulgent.</h3>
				</div>
			</div>
			<div id="content-wrap">
			<div id="content-home">		
				<div id="inner-content" class="wrap clearfix">
					<div id="main" class="col620 left first clearfix" role="main">
					    <?php query_posts('cat=-5'); // Excludes the Work Category from the main blog ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							<header>
								<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
								<?php echo '<span>'.get_the_time('D').'</span>'.'<span>'.get_the_time('d').'</span><span>'.get_the_time('M').'</span>'; ?>
								</time>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<p class="meta">
								Posted in <?php the_category(', '); ?> |
								Words by <?php the_author_posts_link(); ?> |
								Tagged with <?php the_tags(' ', ', ', ''); ?>
								</p>
							</header> <!-- end article header -->
							<section class="post_content clearfix">
								<?php the_content(); ?>
							</section> <!-- end article section -->
						    <!--<footer>
								<p class="tags"><?php // the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
							</footer> --> <!-- end article footer -->
						</article> <!-- end article -->
						<?php comments_template(); ?>
						<?php endwhile; ?>	
						<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
							<?php page_navi(); // use the page navi function ?>
						<?php } else { // if it is disabled, display regular wp prev & next links ?>
							<nav class="wp-prev-next">
								<ul class="clearfix">
									<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
									<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
								</ul>
							</nav>
						<?php } ?>		
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
					<?php get_sidebar(); // sidebar 1 ?>
				</div> <!-- end #inner-content -->
			</div> <!-- end #content -->
			</div><!--content-wrap-->
<?php get_footer(); ?>