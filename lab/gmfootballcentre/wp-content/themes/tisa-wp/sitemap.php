<?php
/*
Template Name: Sitemap
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
    <div id="content">
        <div class="post">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>    
              <div class="posttitle"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title() ?></a></h2></div>
              <div class="date"><strong><?php the_time('F jS, Y') ?></strong> by <?php the_author_link(); ?></div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <div class="posttext">
            <div class="one-half">
            <h3>Pages</h3>
                <ul>
                    <?php wp_list_pages("exclude=$show_hide_pg&title_li=" ); ?>
                </ul>
            <h3>Archives</h3>
                <ul>
                    <?php wp_get_archives('type=monthly&show_post_count=true'); ?>
                </ul>
            </div>
            <div class="one-half">
            <h3>Categories</h3>
                <ul>
                    <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0&feed=RSS'); ?>
                </ul>
            <h3>Feeds</h3>
                <ul>
                    <li><a title="Full content" href="feed:<?php bloginfo('rss2_url'); ?>">Main RSS</a></li>
                    <li><a title="Comment Feed" href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comment Feed</a></li>
                </ul>	
            
            
            </div>    
        </div>	<!-- Posttext end -->
        </div> <!-- Post end -->
    </div> <!-- FullWidth end -->
</div> <!-- Pagewrapper end -->
<?php get_footer(); ?>