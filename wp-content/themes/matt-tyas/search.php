<?php get_header(); ?>
			<div class="introduction-banner">
				<div class="introduction-headings">
					<h2><span>Your</span> Search Results <span>for:</span></h2>
					<h3><?php echo esc_attr(get_search_query()); ?></h3>
				</div>
			</div>
			<div id="content-home">
				<div id="inner-content" class="wrap clearfix">
					<div id="main" class="col620 left first clearfix" role="main">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							<header>
								<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
								<?php echo '<span>'.get_the_time('l').'</span>'.'<span>'.get_the_time('d').'</span><span>'.get_the_time('M').'</span>'; ?>
								</time>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<p class="meta">
								Posted in <?php the_category(', '); ?> |
								Words by <?php the_author_posts_link(); ?> |
								Tagged with <?php the_tags(' ', ', ', ''); ?>
								</p>
							</header> <!-- end article header -->
							<section class="post_content">
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
						    </section>
						    <footer>
						    </footer>
						</article>
						<?php endif; ?>
					</div> <!-- end #main -->
    				<div id="sidebar1" class="sidebar col300 right last">
    					<?php get_search_form(); ?>
    				</div>
    			</div> <!-- end #inner-content -->
			</div> <!-- end #content -->
<?php get_footer(); ?>