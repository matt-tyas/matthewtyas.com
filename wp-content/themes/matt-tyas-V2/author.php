<?php get_header(); ?>
			<div class="introduction-banner">
		        <div class="introduction-headings">
		                    <h2>
		                    <?php _e("Posts By:", "bonestheme"); ?> 
							<!-- google+ rel=me function -->
							<?php $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
							$google_profile = get_the_author_meta( 'google_profile', $curauth->ID );
							if ( $google_profile ) {
								echo '<a href="' . esc_url( $google_profile ) . '" rel="me">' . $curauth->display_name . '</a>'; ?></a>
							<?php } else { ?>
							<?php echo get_author_name(get_query_var('author')); ?>
							<?php } ?>
							</h2>            
		        </div>
		    </div>   
		    <div class="portfolio-panel">
		       		
			<div id="content-home">
				<div id="inner-content" class="wrap clearfix">
					<div id="main" class="col620 left first clearfix" role="main">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							<header>
								<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
								<?php echo '</span>'.'<span>'.get_the_time('d').'</span><span>'.get_the_time('M').'</span>'; ?>
								</time>	
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>						
							</header> <!-- end article header -->
						
							<section class="post_content">
							
								<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
							
								<?php the_excerpt(); ?>
						
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
    				
					<?php get_sidebar(); // sidebar 1 ?>
					
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

</div> 
<?php get_footer(); ?>