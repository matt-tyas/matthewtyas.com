<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?> 
    <?php get_sidebar(); ?>
	<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post">
   	  <div class="posttitle"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title() ?></a></h2></div>
      <div class="date"><strong><?php the_time('F jS, Y') ?></strong> by <?php the_author_link(); ?> under <?php the_category(', ') ?></div>
      <div class="posttext">
        <?php the_content('Read More'); ?>
      </div>
       
    </div>
    <?php endwhile; ?>
    	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php else : ?>
    <?php endif; ?>
	</div>
   
</div> <!-- Pagewrapper end -->
<?php 
$theme_options = get_option('blackops_theme'); 
$ga = $theme_options['google_analytics'];
$copy = $theme_options['copyright'];
?>

<div id="copyright">
	<div>
    <p><?php echo $copy; ?><a href="#top" class="toplink">top</a></p>
    </div>
</div>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/blackops.js"></script>
<?php if($ga) echo $ga; ?>
</body>
</html>