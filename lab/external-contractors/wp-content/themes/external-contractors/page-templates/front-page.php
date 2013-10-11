<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you’d like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
	
		<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
				<div class="main-image">
					<img alt="main homepage image" src="<?php the_field('main_homepage_image'); ?>" />
					<div class="main-text">
						<?php get_template_part( 'content', 'page' ); ?>	
					</div>
				</div>
								
				
		</div><!-- #content -->
		
	</div><!-- #primary -->
	
		<section class="right latest-news">
				<h1><a href="<?php echo get_permalink( 6 ); ?>">Latest News</a></h1>
				<?php
				$args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'post_date' );    
				$postslist = get_posts($args);
				foreach ($postslist as $post) :  setup_postdata($post); ?>
				<article>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php echo get_excerpt(); ?></p>
					<a class="read-more" href="<?php the_permalink(); ?>">Read more</a>
				</article>
			    <?php endforeach; ?>       
		</section>
		
		<?php endwhile; // end of the loop. ?>

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>