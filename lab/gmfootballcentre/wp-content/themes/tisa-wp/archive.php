<?php get_header(); ?> 
    <?php get_sidebar(); ?>
	<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post">
   	  <div class="posttitle"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title() ?></a></h2></div>
      <div class="date"><strong><?php the_time('F jS, Y') ?></strong> by <?php the_author_link(); ?> under <?php the_category(', ') ?></div>
      <div class="posttext">
        <?php the_excerpt(); ?>
      </div>
	<div class="meta"><span><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></span></div>
    </div>
    <?php endwhile; ?>
    	<?php wp_pagenavi(); ?>
    <?php else : ?>
    <?php endif; ?>
	</div>
   
</div> <!-- Pagewrapper end -->
<?php get_footer(); ?>