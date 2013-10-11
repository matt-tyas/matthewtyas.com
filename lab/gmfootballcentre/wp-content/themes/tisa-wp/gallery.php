<?php
/*
Template Name: Gallery Page
*/
?>
<?php get_header(); ?>
	<div id="fullwidth">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post full">
   	  <div class="posttitle"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title() ?></a></h2></div>
      <div class="date"><strong><?php the_time('F jS, Y') ?></strong> by <?php the_author_link(); ?></div>
      <div class="posttext"> 
		<?php the_content(''); ?>
      </div>
      <div class="gallery">
      	<ul>
        <?php $themePath = get_bloginfo('template_url'); ?>
		<?php $posttype = get_post_meta($post->ID, 'article_image_value', true); ?>
        <?php query_posts('post_type='.$posttype.'&posts_per_page=-1'); ?>
    		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    		<?php $image_id = get_post_thumbnail_id(); ?> 
 			<?php $image_url = wp_get_attachment_image_src($image_id,'full'); $image_url = $image_url[0]; ?>
            
    		<li><div class="imgbg"><a href="<?php echo $image_url; ?>" title="<?php the_title(); ?>" rel="prettyPhoto[<?php echo $posttype; ?>]"><img src="<?php echo $themePath ?>/inc/timthumb.php?src=<?php echo $image_url; ?>&w=250&h=150&zc=1&q=100" alt="<?php the_title(); ?>" width="250" height="150" /></a></div>
            	<h3><?php the_title(); ?></h3> 
                <p><?php the_content(); ?></p>
            </li>
    	<?php endwhile; else: ?>
		<?php endif; ?>
        <?php wp_reset_query(); ?> 
        </ul>
     </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
    </div>
</div> <!-- Pagewrapper end -->
<?php get_footer(); ?>