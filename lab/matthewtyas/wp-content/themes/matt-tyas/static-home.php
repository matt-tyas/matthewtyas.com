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
		<!--<span class="about-me">
		<h2>About <span>this</span> Website</h2>
		<h3>Matthewtyas.com will alway be a work in progress.<br /> As long as I have somewhere to play, I am happy. <a href="/about/">Find out more&hellip;</a></h3>
		</span>-->
	</div>
	</div>
	<?php endwhile; ?>
	<div id="content-home">
	<section class="col940 clearfix">
		<h4><span>New &amp; Noteworthy</span></h4>	
		<ul class="thumbnails">
		<?php query_posts('cat=5&showposts=4'); // Only show four posts from the work category ?> 
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		<li>
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'homepage-thumbnail-180-160' ); ?>
			<span class="zoom-icon"><span>View Project</span></span>
			</a>	
		</li>
	    <?php endwhile; ?>
	    <?php endif; ?>
	    </ul>
	</section>
	<section class="col50 clearfix">
		<h4><span>Manchester's Finest</span></h4>
		<div class="mcr-finest">
			<div>
				<a href="http://www.manchestersfinest.com">
				<img src="wp-content/themes/matt-tyas/library/images/mcr-finest.jpg" alt="Manchester's Finest website screenshot image" />
				<span class="zoom-feature"><span>Visit Website</span></span>
				</a>
			</div>
		</div>
		<p><a href="http://www.manchestersfinest.com">Manchester's Finest</a> is a website I run with <a href="http://www.tilecreative.com">Lee Isherwood</a>. It has been been live for nearly a year now receives about 16,000 hits a month. Watch out for more developments in 2012.</p>
	</section>
	<section class="col50 clearfix">
		<h4><span>Latest Musings</span></h4>
		<?php
		$catid = 5; // Exclude the work category
		$args = array( 'numberposts' => 2, 'order'=> 'DESC', 'orderby' => 'post_date', 'category__not_in' => array($catid) );    
		$postslist = get_posts($args);
		foreach ($postslist as $post) :  setup_postdata($post); ?>
		<article>
		<header>
		<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
		<?php echo /*'<span>'.get_the_time('l').'</span>'.*/'<span>'.get_the_time('d').'</span><span>'.get_the_time('M').'</span>'; ?>
		</time>
		<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		</header>
		<?php the_excerpt(); ?>
		<footer>
		Words by <?php the_author(); ?> | Filed under: <?php the_category(', ') ?>
		</footer>
		</article>
        <?php endforeach; ?>       
	</section>
	<?php wp_reset_query(); ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>