<?php get_header(); ?>
			<div class="introduction-banner">
				<div class="introduction-headings">
					<h2 class="archives">Your search results for: <?php echo esc_attr(get_search_query()); ?></h2>
				</div>
			</div>
			<div class="portfolio-panel">
			<div id="content-blog">
				<div id="inner-content" class="wrap clearfix">
				
					<div id="main" class="col620 left first clearfix" role="main">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							<header>
								<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
								<?php the_time('nS F y') ?>
								</time>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<p class="meta">
								Tagged with: <?php the_tags(' ', ', ', ''); ?>
								</p>
							</header> <!-- end article header -->
							<section class="overview post_content">
								<?php the_excerpt('<span class="read-more">Read more on "'.the_title('', '', false).'" &raquo;</span>'); ?>
							</section> <!-- end article section -->
							<footer>	
							</footer> <!-- end article footer -->
						</article> <!-- end article -->
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
						<!-- this area shows up if there are no results -->
						<article id="post-not-found">
						    <header>
						    	<h1>No Results Found</h1>
						    </header>
						    <section class="post_content">
						    	<p>Sorry, but I can't find anything of that nature&hellip;</p>
						    	<p>Why don't you try searching again?</p>
						        <br />
						    </section>
						    <footer>
						    </footer>
						</article>
						<?php endif; ?>
					</div> <!-- end #main -->
    				<a id="tools" href="#">Tools</a>
					<?php get_sidebar(); // sidebar 1 ?>
    			</div> <!-- end #inner-content -->
			</div> <!-- end #content -->
			</div>
<?php get_footer(); ?>