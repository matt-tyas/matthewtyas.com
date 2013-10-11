<?php
/*
Template Name: Static homepage template
*/
?>
<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()) : ?> 
	<?php while (have_posts()) : the_post(); ?>
	<?php the_content(''); ?>
	<section class="col940">
		<h4><span>New &amp; Noteworthy</span></h4>
		<div id="new-and-noteworthy">
		slider here
		</div>
	</section>
	<?php endwhile; ?>
	
	<section class="col50 first">
		<h4><span>Manchester's Finest</span></h4>
	</section>
	
	<section class="col50 last">
		<h4><span>Latest Musings</span></h4>
		<article>
		<?php
		$catid = 5; // Exclude the work category
		$args = array( 'numberposts' => 4, 'order'=> 'DESC', 'orderby' => 'post_date', 'category__not_in' => array($catid) );    
		$postslist = get_posts($args);
		foreach ($postslist as $post) :  setup_postdata($post); ?>
		<header>
		<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
		<?php echo /*'<span>'.get_the_time('l').'</span>'.*/'<span>'.get_the_time('d').'</span><span>'.get_the_time('M').'</span>'; ?>
		</time>
		<h5><?php the_title(); ?></h5>
		</header>
		<?php the_excerpt(); ?>
		<footer>
		meta data here
		</footer>
        <?php endforeach; ?>
        </article>
	</section>

	<section class="col50 first">
		<h4><span>Laboratory</span></h4>
		<ul class="thumbnails">
		<?php query_posts('cat=5&showposts=4'); // Only show the work category ?> 
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		<?php $image = get_post_meta($post->ID, 'portfolio_image', true); ?>
		<li><a href="<?php the_permalink(); ?>"><?php echo $image; ?></a></li>
	    <?php endwhile; ?>
	    <?php endif; ?>
	    <ul>
    </section>

	<section class="col50 last">
		<h4><span>Ornithology</span></h4>
		<ul id="twitter_update_list">
			<li>Loading tweets&hellip;</li>
		</ul>
	</section>
	
	<?php wp_reset_query(); ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>