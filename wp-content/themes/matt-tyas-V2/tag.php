<?php get_header(); ?>
						<div class="introduction-banner">
		                      <div class="introduction-headings">
								<?php if (is_category()) { ?>
									 <h2 class="archives"><?php _e("Posts Categorized:", "bonestheme"); ?>: <?php single_cat_title(); ?></h2>

								<?php } elseif (is_tag()) { ?> 
									 <h2 class="archives"><?php _e("Posts Tagged", "bonestheme"); ?>: <?php single_tag_title(); ?></h2>

								<?php } elseif (is_author()) { ?>
									 <h2 class="archives"><?php _e("Posts By", "bonestheme"); ?>: <?php get_the_author_meta('display_name'); ?></h2>

								<?php } elseif (is_day()) { ?>
									 <h2 class="archives"><?php _e("Daily Archives", "bonestheme"); ?>: <?php the_time('l, F j, Y'); ?></h2>

								<?php } elseif (is_month()) { ?>
								     <h2 class="archives"><?php _e("Monthly Archives", "bonestheme"); ?>: <?php the_time('F Y'); ?></h2>

								<?php } elseif (is_year()) { ?>
								     <h2 class="archives"><?php _e("Yearly Archives", "bonestheme"); ?>: <?php the_time('Y'); ?></h2>

								<?php } ?>
						</div>
						</div>
						<div class="portfolio-panel">
						<div id="content-blog">
							<div id="inner-content" class="gw">
								<div id="main" role="main" class="g two-thirds">
								
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
							
								<?php // the_post_thumbnail( 'bones-thumb-300' ); ?>
							
								<?php the_excerpt(); ?>
						
							</section> <!-- end article section -->
							
							<footer>
								
							</footer> <!-- end article footer -->
						
						</article> <!-- end article -->
						
						<?php endwhile; ?>	
						
						<?php // if (function_exists('page_navi')) { // if expirimental feature is active ?>
							
							<?php // page_navi(); // use the page navi function ?>
					
						<?php // } else { // if it is disabled, display regular wp prev & next links ?>
							<!--<nav class="wp-prev-next">
								<ul class="clearfix">
									<li class="prev-link"><?php // next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
									<li class="next-link"><?php // previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
								</ul>
							</nav>-->
						<?php // } ?>
									
						
						<?php else : ?>
						
						<article id="post-not-found">
						    <header>
						    	<h1><?php _e("No Posts Yet", "bonestheme"); ?></h1>
						    </header>
						    <section class="post_content">
						    	<p><?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?></p>
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