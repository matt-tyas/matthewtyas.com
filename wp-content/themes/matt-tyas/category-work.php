<?php get_header(); ?>		
	<div class="introduction-banner">
		<div class="introduction-headings">
			<h2>Notable Pieces <span>of my</span> Work</h2>
			<ul id="portfolio-filter">
			     <li><a href="#Work">All</a></li>
			     <li><a href="#Design">Design</a></li>
			     <li><a href="#UI">UI</a></li>
			     <li><a href="#Sketches">Sketches</a></li>
			</ul>
		</div>
	</div>
	<div id="content-wrap">
	<div id="content-home">
	<section id="work" class="col940">
		<h4><span>All Work</span></h4>
		<ul class="thumbnails" id="portfolio-list">
		<?php query_posts('cat=5'); ?> 
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		<li class="<?php foreach((get_the_category()) as $category ) { echo $category->cat_name . ' ' . ' all '; } ?>" >
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'homepage-thumbnail-180-160' ); ?>
			<span class="zoom-icon"><span>View Project</span></span>
			</a>	
		</li>
	    <?php endwhile; ?>
	    <?php endif; ?>
	    </ul>
	</section>
	</div>
	</div>
<?php get_footer(); ?>