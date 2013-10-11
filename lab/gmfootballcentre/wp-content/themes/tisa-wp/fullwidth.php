<?php
/*
Template Name: Full Width
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
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
    </div>
</div> <!-- Pagewrapper end -->
<?php get_footer(); ?>