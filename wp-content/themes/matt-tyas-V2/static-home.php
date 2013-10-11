<?php
/*
Template Name: Static homepage template
*/
?>
<?php get_header(); ?>
	<?php if (have_posts()) : ?> 
	<?php while (have_posts()) : the_post(); ?>
    <div class="introduction-banner">
	<div class="introduction-headings">
		<?php the_content(''); ?>
	</div>
	</div>
	<?php endwhile; ?>
		
	<div class="portfolio-panel-home">
	<section class="col940 clearfix">
		<ul class="thumbnails showcase">
		<?php query_posts('cat=5&showposts=4&tag=noteworthy'); // Only show four posts from the work category tagged noteworthy ?> 
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		<li>
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'homepage-thumbnail-480-425'); ?>
			<span class="zoom-icon"><span>View Project</span></span>
			</a>	
		</li>
	    <?php endwhile; ?>
	    <?php endif; ?>
	    </ul>
	</section>
	</div>
	
	<div id="content-home">

	<section class="gw blog-home">
		<!--<h4 class="out-of-my-head"><a href="/out-of-my-head"><span>Out of my Head - Matt Tyas's blog</span></a></h4>-->
		<?php
		$catid = 5; // Exclude the work category
		$args = array( 'numberposts' => 2, 'order'=> 'DESC', 'orderby' => 'post_date', 'category__not_in' => array($catid),'ignore_sticky_posts' => 5 );    
		$postslist = get_posts($args);
		foreach ($postslist as $post) :  setup_postdata($post); ?>
		<article class="g one-half">
		<header>
		<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
		<?php the_time('nS F y') ?> 
		</time>
		<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		<p class="meta">Tagged with <?php the_tags(' ', ', ', ''); ?></p>
		</header>
		<section class="overview">
		<?php the_excerpt(25); ?>
		</section>
		</article>
        <?php endforeach; ?>       
	</section>
	<?php wp_reset_query(); ?>
	<?php endif; ?>

	</div><!-- End #content-home -->
	
<?php get_footer(); ?>