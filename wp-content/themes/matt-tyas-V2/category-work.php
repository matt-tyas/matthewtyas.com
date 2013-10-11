<?php get_header(); ?>		
	<div class="introduction-banner work">
	
		<div class="introduction-headings">
			<h2>Work</h2>
			<h3>A selection of work both professional and personal. Finished pieces and the development of ideas through sketching and wireframing. Filter as you please.</h3>
		</div>
	
	</div>
	<div class="portfolio-panel">
			<ul id="portfolio-filter" class="option-set clearfix" data-option-key="filter">
		        <li><a href="#Work" data-filter="*" class="selected current">All</a></li>
		        <li><a href="#Design" data-filter=".Design">Design</a></li>
		        <li><a href="#Build" data-filter=".Build">Build</a></li>
				<!--<li><a href="#Icons" data-filter=".Icons">Icons</a></li>-->
		        <!--<li><a href="#UI" data-filter=".UI">UI</a></li>-->
				<li><a href="#Prototyping" data-filter=".Prototyping">Prototyping</a></li>
				<li><a href="#Personal" data-filter=".Personal">Personal</a></li>
				<li><a href="#Startup" data-filter=".Startup">Startup</a></li>
		        <!--<li><a href="#Sketches" data-filter=".Sketches">Sketches</a></li>-->
		    </ul>
			
	
	<div id="content-wrap">
	
	<div id="content-blog">
	
		<section id="work" class="col940">
			<!--<h4><span>All Work</span></h4>-->
			<ul class="thumbnails" id="portfolio-list">
			<?php query_posts('posts_per_page=100&cat=5'); ?> 
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
			<li class="element <?php foreach((get_the_category()) as $category ) { echo $category->cat_name . ' ' . ' '; } ?>" >
				<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'homepage-thumbnail-480-425' ); ?>
				<span class="zoom-icon"><span>View Project</span></span>
				</a>	
			</li>
		    <?php endwhile; ?>
		    <?php endif; ?>
		    </ul>
		</section>	
	
	</div>
	
	</div>
	</div>
<?php get_footer(); ?>