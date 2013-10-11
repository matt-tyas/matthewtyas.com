<?php
/*
Plugin Name: Simple User Listing
Plugin URI: http://cozmoslabs.com
Description: Create a simple shortcode to list our WordPress users.
Author: Cristian Antohe
Version: 0.1
Author URI: http://cozmoslabs.com
*/

function sul_user_listing($atts, $content = null) {
	global $post;

	extract(shortcode_atts(array(
		"role" => '',
		"number" => '10'
	), $atts));

	$role = sanitize_text_field($role);
	$number = sanitize_text_field($number);

	// We're outputting a lot of HTML, and the easiest way
	// to do it is with output buffering from PHP.
	ob_start();

	// Get the Search Term
	$search = ( isset($_GET["as"]) ) ? sanitize_text_field($_GET["as"]) : false ;

	// Get Query Var for pagination. This already exists in WordPress
	$page = (get_query_var('paged')) ? get_query_var('paged') : 1;

	// Calculate the offset (i.e. how many users we should skip)
	$offset = ($page - 1) * $number;

	if ($search){
		// Generate the query based on search field
		$my_users = new WP_User_Query(
			array(
				'role' => $role,
				'search' => '*' . $search . '*'
			));
	} else {
		// Generate the query
		$my_users = new WP_User_Query(
			array(
				'role' => '',
				'offset' => $offset ,
				'number' => $number
			));
	}

	// Get the total number of authors. Based on this, offset and number
	// per page, we'll generate our pagination.
	$total_authors = $my_users->total_users;

	// Calculate the total number of pages for the pagination
	$total_pages = intval($total_authors / $number) + 1;

	// The authors object.
	$authors = $my_users->get_results();
?>

	<div class="author-search">
	<h2>Search authors by name</h2>
		<form method="get" id="sul-searchform" action="<?php the_permalink() ?>">
			<label for="as" class="assistive-text">Search</label>
			<input type="text" class="field" name="as" id="sul-s" placeholder="Search Authors" />
			<input type="submit" class="submit" name="submit" id="sul-searchsubmit" value="Search Authors" />
		</form>
	<?php
	if($search){ ?>
		<h2 >Search Results for: <em><?php echo $search; ?></em></h2>
		<a href="<?php the_permalink(); ?>">Back To Author Listing</a>
	<?php } ?>

	</div><!-- .author-search -->

<?php if (!empty($authors))	 { ?>
	<ul class="author-list">
<?php
	// loop through each author
	foreach($authors as $author){
		$author_info = get_userdata($author->ID);
		?>
		<li>
			<?php echo get_avatar( $author->ID, 90 ); ?>
			<h2><a href="<?php echo get_author_posts_url($author->ID); ?>"><?php echo $author_info->display_name; ?></a> - <?php echo count_user_posts( $author->ID ); ?> posts</h2>
			<p><?php echo $author_info->description; ?></p>
			<?php $latest_post = new WP_Query( "author=$author->ID&post_count=1" );
			if (!empty($latest_post->post)){ ?>
			<p><strong>Latest Article:</strong>
			<a href="<?php echo get_permalink($latest_post->post->ID) ?>">
				<?php echo get_the_title($latest_post->post->ID) ;?>
			</a></p>
			<?php } //endif ?>
			<p><a href="<?php echo get_author_posts_url($author->ID); ?> ">Read <?php echo $author_info->display_name; ?> posts</a></p>
		</li>
		<?php
	}
?>
	</ul> <!-- .author-list -->
<?php } else { ?>
	<h2>No authors found</h2>
<? } //endif ?>

	<nav id="nav-single" style="clear:both; float:none; margin-top:20px;">
		<h3 class="assistive-text">Post navigation</h3>
		<?php if ($page != 1) { ?>
			<span class="nav-previous"><a rel="prev" href="<?php the_permalink() ?>page/<?php echo $page - 1; ?>/"><span class="meta-nav">←</span> Previous</a></span>
		<?php } ?>

		<?php if ($page < $total_pages ) { ?>
			<span class="nav-next"><a rel="next" href="<?php the_permalink() ?>page/<?php echo $page + 1; ?>/">Next <span class="meta-nav">→</span></a></span>
		<?php } ?>
	</nav>

	<?php
	// Output the content.
	$output = ob_get_contents();
	ob_end_clean();

	// Return only if we're inside a page. This won't list anything on a post or archive page.
	if (is_page()) return  $output;

}

// Add the shortcode to WordPress.
add_shortcode('userlisting', 'sul_user_listing');
?>