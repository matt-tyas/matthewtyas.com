<?php
// Popular and Related Posts
function related_posts() {
	global $post, $wpdb;
	$backup = $post;  // backup the current object
	$tags = wp_get_post_tags($post->ID);
	$tagIDs = array();
	if ($tags) {
	  $tagcount = count($tags);
	  for ($i = 0; $i < $tagcount; $i++) {
	    $tagIDs[$i] = $tags[$i]->term_id;
	  }
	  $args=array(
	    'tag__in' => $tagIDs,
	    'post__not_in' => array($post->ID),
	    'showposts'=>3,
	    'caller_get_posts'=>1
	  );
	  $my_query = new WP_Query($args);
	  if( $my_query->have_posts() ) { $related_post_found = true; ?>
		<h3>Related Posts</h3>
			<ul>		
	    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li>		
					<?php	if ( has_post_thumbnail() ) {
						the_post_thumbnail('thumbnail');
						} else { ?>
						<img src="<?php bloginfo('template_directory'); ?>/images/no-post-image-small.jpg" alt="No Post Image for <?php the_title(); ?>" />
					<?php }	?>
					<p><strong><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></strong><br/>
                    <?php the_time('d M Y'); ?></p>
				</li>				
	    <?php endwhile; ?>
			</ul>		
	  <?php }
	}
	$post = $backup;  // copy it back
	
	//show recent posts if no related found
	if(!$related_post_found){
		$posts = get_posts('numberposts=3&offset=0');
		if($posts){ ?>
		<h3>Recent Posts</h3>
		<ul>
			<?php foreach($posts as $post){
					$post_title = stripslashes($post->post_title);
					$permalink = get_permalink($post->ID);	
					setup_postdata($post);
			?>
			<li>
				
				<?php	if ( has_post_thumbnail() ) {
                the_post_thumbnail('thumbnail');
                } else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/images/no-post-image-small.jpg" alt="No Post Image for <?php the_title(); ?>" />
				<?php }	?>
				<p><strong><a href="<?php echo $permalink; ?>" rel="bookmark"><?php echo $post_title; ?></a></strong><br/>
                <?php the_time('d M Y'); ?></p>
			</li>
			<?php } ?>
		</ul>
		<?php }
	}
	wp_reset_query();
}

function popular_posts() {
	global $post, $wpdb;
	$backup = $post;
	$pop = new WP_Query();
    $pop->query('showposts=3&orderby=comment_count');
?>
	<h3>Popular Posts</h3>
	<ul>
				
		<?php while($pop->have_posts()) : $pop->the_post(); ?>
					<li>
						<?php	if ( has_post_thumbnail() ) {
							the_post_thumbnail('thumbnail');
							} else { ?>
							<img src="<?php bloginfo('template_directory'); ?>/images/no-post-image-small.jpg" alt="No Post Image for <?php the_title(); ?>" />
							<?php }	?>
						<p><strong><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></strong><br />
						<?php the_time('d M Y'); ?></p>
					</li>
		<?php endwhile; ?>
		</ul>
        
        <?php 
		$post = $backup;

}
?>