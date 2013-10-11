<?php get_header(); ?>
    <?php get_sidebar(); ?>
	<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post">
        <div class="posttitle"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title() ?></a></h2></div>
        <div class="date"><strong><?php the_time('F jS, Y') ?></strong> by <?php the_author_link(); ?> under <?php the_category(', ') ?></div>
        <div class="posttext">
        	<?php the_content(''); ?>
        </div>
        <div class="meta">
            <ul>
                <li class="share">share this post:</li>
                <li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;amp;t=<?php the_title(); ?>" title="Share on Facebook."></a></li>
                <li class="su"><a href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&amp;amp;title=<?php the_title(); ?>" title="StumbleUpon."></a></li>
                <li class="red"><a href="http://www.reddit.com/submit?url=<?php the_permalink(); ?>&amp;amp;title=<?php the_title(); ?>" title="Vote on Reddit."></a></li>
                <li class="digg"><a href="http://digg.com/submit?phase=2&amp;amp;url=<?php the_permalink(); ?>&amp;amp;title=<?php the_title(); ?>" title="Digg this!"></a></li>
                <li class="del"><a href="http://del.icio.us/post?url=<?php the_permalink(); ?>&amp;amp;title=<?php the_title(); ?>" title="Bookmark on Delicious."></a></li>
            </ul>   
        </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
	</div>
</div> <!-- Pagewrapper end -->
<?php get_footer(); ?>