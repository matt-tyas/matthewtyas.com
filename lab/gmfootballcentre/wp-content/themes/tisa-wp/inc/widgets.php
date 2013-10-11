<?php

// Blackops Recent Posts
class widget_Blackopsrecent extends WP_Widget { 
	function widget_Blackopsrecent() {
		/* Widget settings. */
		$widget_ops = array( 'description' => __('Display recent posts with images') );
	
		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'recent' );
	
		/* Create the widget. */
		$this->WP_Widget( 'recent', __('Blackops - Recent Posts'), $widget_ops, $control_ops );
	}
	
	function widget($args, $instance) {
		extract($args);
		// Output
		echo '<li id="recent">';
		$title = apply_filters('widget_title', $instance['title']);
		$show = $instance['show'];  
		global $post, $wpdb;
		$recent_posts = new WP_Query('showposts='.$show.'');
		echo '<ul>';
		echo '<h2>'.$title.'</h2>';
			while  ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
            <li><?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('thumbnail');
					} else { ?>
						<img src="<?php bloginfo('template_directory'); ?>/images/no-post-image-small.jpg" alt="No Post Image for <?php the_title(); ?>" />
					<?php }	?>
					<p><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a><br /><?php the_time('j F Y') ?></p>
            </li>
            <?php endwhile;
		echo '</ul>';
		echo '</li>';
	}
	function update( $new_instance, $old_instance ) {  
		$instance = $old_instance; 
		
		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['show'] = strip_tags( $new_instance['show'] );

		return $instance;
	}
	function form($instance) {
		$defaults = array( 'title' => 'Recent Posts', 'show' => '4' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Widget Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>">Number of Posts:</label>
			<input id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'show' ); ?>" value="<?php echo $instance['show']; ?>" style="width:100%;" />
		</p>
    <?php
	}
}
function widget_Blackopsrecent_init()
{
	register_widget('widget_Blackopsrecent');
}
add_action('widgets_init', 'widget_Blackopsrecent_init');

// Blackops Popular Posts
class widget_Blackopspopular extends WP_Widget { 
	function widget_Blackopspopular() {
		/* Widget settings. */
		$widget_ops = array('description' => __('Display popular posts with images') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'popular' );

		/* Create the widget. */
		$this->WP_Widget( 'popular', __('Blackops - Popular Posts'), $widget_ops, $control_ops );
	}
		
	function widget($args, $instance) { 
		extract($args);
			
		// Output  
		echo '<li id="popular">';     
		global $post, $wpdb;
		$title = apply_filters('widget_title', $instance['title']);
		$show = $instance['show'];
		$pop = new WP_Query();
		$pop->query('showposts='.$show.'&orderby=comment_count');
		?>
		<ul>
		<?php echo '<h2>'.$title.'</h2>'; ?> 	
		<?php while($pop->have_posts()) : $pop->the_post(); ?>
                    <li>
                        <?php	if ( has_post_thumbnail() ) {
                            the_post_thumbnail('thumbnail');
                            } else { ?>
                            <img src="<?php bloginfo('template_directory'); ?>/images/no-post-image-small.jpg" alt="No Post Image for <?php the_title(); ?>" />
                            <?php }	?>
                        <p><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><br />
                        <?php the_time('d M Y'); ?></p>
                    </li>
        <?php endwhile; ?>
        </ul>		
        <?php 
        echo '</li>';
	}
	function update( $new_instance, $old_instance ) {  
		$instance = $old_instance; 
		
		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['show'] = strip_tags( $new_instance['show'] );

		return $instance;
	}
	function form($instance) {
		$defaults = array( 'title' => 'Popular Posts', 'show' => '4' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Widget Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>">Number of Posts:</label>
			<input id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'show' ); ?>" value="<?php echo $instance['show']; ?>" style="width:100%;" />
		</p>
    <?php
	}
}
function widget_Blackopspopular_init()
{
	register_widget('widget_Blackopspopular');
}
add_action('widgets_init', 'widget_Blackopspopular_init');
// TechBlog Recent Comments
class widget_Blackopscomments extends WP_Widget { 
	function widget_Blackopscomments() {
		/* Widget settings. */
		$widget_ops = array('description' => __('Display Recent Comments with avatars') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'recentcomments' );

		/* Create the widget. */
		$this->WP_Widget( 'recentcomments', __('Blackops - Recent Comments'), $widget_ops, $control_ops );
	}
	
	function widget($args, $instance) {   
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$show = $instance['show'];
			
		// Output
		echo '<li id="recentcomments">';  
		echo '<h2>'.$title.'</h2>';    
			$comments = get_comments('status=approve&number='.$show.'');
				if ($comments) {
					echo '<ul>';
					foreach ($comments as $comment) {
						echo '<li>' . get_avatar( $comment->comment_author_email, $size = '48', $default=get_template_directory_uri().'/images/gravatar.jpg' );
						echo '<p><a href="'. get_permalink($comment->comment_post_ID).'#comment-'.$comment->comment_ID .'" title="'.$comment->comment_author .' | '.get_the_title($comment->comment_post_ID).'">' . $comment->comment_author . '</a><br />';
						$comment_string = $comment->comment_content;
						$comment_string = apply_filters('wptexturize', $comment_string);
						$comment_string = apply_filters('convert_chars', $comment_string);
						$comment_excerpt = substr($comment_string,0,60);
						$comment_excerpt = $comment_excerpt .'..';
						echo $comment_excerpt;
				
						if (strlen($comment_excerpt) > 69){
							echo ' ...';
						}
						echo '</p></li>';
					}
					echo '</ul>';
				}
				else{
					echo '<ul>
							  <li>No Comments Yet</li>
						  </ul>';
				}
		echo '</li>';
	 }
	 function update( $new_instance, $old_instance ) {  
		$instance = $old_instance; 
		
		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['show'] = strip_tags( $new_instance['show'] );

		return $instance;
	}
	function form($instance) {
		$defaults = array( 'title' => 'Recent Comments', 'show' => '4' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Widget Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'show' ); ?>">Number of Comments:</label>
			<input id="<?php echo $this->get_field_id( 'show' ); ?>" name="<?php echo $this->get_field_name( 'show' ); ?>" value="<?php echo $instance['show']; ?>" style="width:100%;" />
		</p>
    <?php
	}	
}
function widget_Blackopscomments_init()
{
	register_widget('widget_Blackopscomments');
}
add_action('widgets_init', 'widget_Blackopscomments_init');

/* Twitter Widget */
class widget_Blackopstwitter extends WP_Widget { 
	function widget_Blackopstwitter() {
		/* Widget settings. */
		$widget_ops = array('description' => __('Display Your Tweets') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'twitter' );

		/* Create the widget. */
		$this->WP_Widget( 'twitter', __('Blackops - Twitter'), $widget_ops, $control_ops );
	}
	function widget($args, $instance) {
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$account = $instance['account'];
		$show = $instance['show'];
		$directory = get_bloginfo( template_url );
		
        // Output
		echo $before_widget;
		echo '<h2>'.$title.'</h2>';  
		echo '<ul id="twitter_update_list"><li>Oops Twitter isnt working at the moment</li></ul>';
		echo '<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>';
		echo '<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/'.$account.'.json?callback=twitterCallback2&amp;count='.$show.'"></script>';
		echo '<div class="follow"><a href="http://twitter.com/'.$account.'">follow me</a></div>';
		echo $after_widget;
	}
	function update( $new_instance, $old_instance ) {  
		$instance = $old_instance; 
		
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['show'] = strip_tags( $new_instance['show'] );
		$instance['account'] = strip_tags( $new_instance['account'] );

		return $instance;
	}
	function form($instance) {
		$defaults = array( 'title' => 'Follow Us on Twitter', 'show' => '4', 'account' => 'anteksiler' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Widget Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>
        <p>
			<label for="<?php echo $this->get_field_id( 'account' ); ?>">Twitter Account:</label>
			<input id="<?php echo $this->get_field_id( 'account' ); ?>" name="<?php echo $this->get_field_name( 'account' ); ?>" value="<?php echo $instance['account']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'show' ); ?>">Number of Tweets:</label>
			<input id="<?php echo $this->get_field_id( 'show' ); ?>" name="<?php echo $this->get_field_name( 'show' ); ?>" value="<?php echo $instance['show']; ?>" style="width:100%;" />
		</p>
    <?php
	}
}
function widget_Blackopstwitter_init()
{
	register_widget('widget_Blackopstwitter');
}
add_action('widgets_init', 'widget_Blackopstwitter_init');

/* Flickr Widget */
class widget_Blackopsflickr extends WP_Widget { 
	function widget_Blackopsflickr() {
		/* Widget settings. */
		$widget_ops = array('description' => __('Display Your Flickr Images') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'flickr' );

		/* Create the widget. */
		$this->WP_Widget( 'flickr', __('Blackops - Flickr'), $widget_ops, $control_ops );
	}
	
	function widget($args, $instance) {
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$account = $instance['account'];
		$show = $instance['show'];
		
		// Output
		echo $before_widget;
		echo '<h2>'.$title.'</h2>';
		echo '<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count='.$show.'&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user='.$account.'"></script>';		
		echo $after_widget;
	}
	function update( $new_instance, $old_instance ) {  
		$instance = $old_instance; 
		
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['show'] = strip_tags( $new_instance['show'] );
		$instance['account'] = strip_tags( $new_instance['account'] );

		return $instance;
	}
	// Settings form
	function form($instance) {
		$defaults = array( 'title' => 'Flickr', 'show' => '9', 'account' => '25062265@N06' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Widget Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>
        <p>
			<label for="<?php echo $this->get_field_id( 'account' ); ?>">Flickr Account:</label>
			<input id="<?php echo $this->get_field_id( 'account' ); ?>" name="<?php echo $this->get_field_name( 'account' ); ?>" value="<?php echo $instance['account']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'show' ); ?>">Number of Images:</label>
			<input id="<?php echo $this->get_field_id( 'show' ); ?>" name="<?php echo $this->get_field_name( 'show' ); ?>" value="<?php echo $instance['show']; ?>" style="width:100%;" />
		</p>
    <?php
	}
}
function widget_Blackopsflickr_init()
{
	register_widget('widget_Blackopsflickr');
}
add_action('widgets_init', 'widget_Blackopsflickr_init');

// Blackops Sponsor Widget
class widget_Blackopssponsor extends WP_Widget { 
	function widget_Blackopssponsor() {
		/* Widget settings. */
		$widget_ops = array( 'description' => __('Display 125x125 banners on your site') );
	
		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'sponsor' );
	
		/* Create the widget. */
		$this->WP_Widget( 'sponsor', __('Blackops - Sponsor Banners'), $widget_ops, $control_ops );
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', $instance['title']);
		$instance['title'] = strip_tags( $new_instance['title'] );
		$soneurl = strip_tags( $instance['sponsoroneurl'] );
		$soneimg = strip_tags( $instance['sponsoroneimg'] );
		
		$stwourl = strip_tags( $instance['sponsortwourl'] );
		$stwoimg = strip_tags( $instance['sponsortwoimg'] );
		
		$sthreeurl = strip_tags( $instance['sponsorthreeurl'] );
		$sthreeimg = strip_tags( $instance['sponsorthreeimg'] );
		
		$sfoururl = strip_tags( $instance['sponsorfoururl'] );
		$sfourimg = strip_tags( $instance['sponsorfourimg'] );
		
		// Output
		echo $before_widget;
		echo '<h2>'.$title.'</h2>';
			echo '<div class="sponsors">';
			echo '<a href="'.$soneurl.'"><img src="'.$soneimg.'" /></a>';
			echo '<a href="'.$stwourl.'"><img src="'.$stwoimg.'" /></a>';
			echo '<a href="'.$sthreeurl.'"><img src="'.$sthreeimg.'" /></a>';
			echo '<a href="'.$sfoururl.'"><img src="'.$sfourimg.'" /></a>';
			echo '</div>';
		echo $after_widget;
	}
	function update( $new_instance, $old_instance ) {  
		$instance = $old_instance; 
		
		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['sponsoroneurl'] = strip_tags( $new_instance['sponsoroneurl'] );
		$instance['sponsoroneimg'] = strip_tags( $new_instance['sponsoroneimg'] );
		
		$instance['sponsortwourl'] = strip_tags( $new_instance['sponsortwourl'] );
		$instance['sponsortwoimg'] = strip_tags( $new_instance['sponsortwoimg'] );
		
		$instance['sponsorthreeurl'] = strip_tags( $new_instance['sponsorthreeurl'] );
		$instance['sponsorthreeimg'] = strip_tags( $new_instance['sponsorthreeimg'] );
		
		$instance['sponsorfoururl'] = strip_tags( $new_instance['sponsorfoururl'] );
		$instance['sponsorfourimg'] = strip_tags( $new_instance['sponsorfourimg'] );

		return $instance;
	}
	function form($instance) {
		$img = get_bloginfo( template_url ). '/images/125x125.gif';
		$defaults = array('title' => 'Sponsors', 'sponsoroneurl' => '#', 'sponsortwourl' => '#', 'sponsorthreeurl' => '#', 'sponsorfoururl' => '#', 'sponsoroneimg' => $img, 'sponsortwoimg' => $img, 'sponsorthreeimg' => $img, 'sponsorfourimg' => $img);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>">Widget Title:</label>
        <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>
        
		<p>
<label for="<?php echo $this->get_field_id( 'sponsoroneurl' ); ?>">Sponsor 1 URL:</label>
<input id="<?php echo $this->get_field_id( 'sponsoroneurl' ); ?>" name="<?php echo $this->get_field_name( 'sponsoroneurl' ); ?>" value="<?php echo $instance['sponsoroneurl']; ?>" style="width:100%;" />
<label for="<?php echo $this->get_field_id( 'sponsoroneimg' ); ?>">Sponsor 1 Image:</label>
<input id="<?php echo $this->get_field_id( 'sponsoroneimg' ); ?>" name="<?php echo $this->get_field_name( 'sponsoroneimg' ); ?>" value="<?php echo $instance['sponsoroneimg']; ?>" style="width:100%;" />
		</p>

		<p>
<label for="<?php echo $this->get_field_id( 'sponsortwourl' ); ?>">Sponsor 2:</label>
<input id="<?php echo $this->get_field_id( 'sponsortwourl' ); ?>" name="<?php echo $this->get_field_name( 'sponsortwourl' ); ?>" value="<?php echo $instance['sponsortwourl']; ?>" style="width:100%;" />
<label for="<?php echo $this->get_field_id( 'sponsortwoimg' ); ?>">Sponsor 2 Image:</label>
<input id="<?php echo $this->get_field_id( 'sponsortwoimg' ); ?>" name="<?php echo $this->get_field_name( 'sponsortwoimg' ); ?>" value="<?php echo $instance['sponsortwoimg']; ?>" style="width:100%;" />
		</p>
        
        <p>
<label for="<?php echo $this->get_field_id( 'sponsorthreeurl' ); ?>">Sponsor 3:</label>
<input id="<?php echo $this->get_field_id( 'sponsorthreeurl' ); ?>" name="<?php echo $this->get_field_name( 'sponsorthreeurl' ); ?>" value="<?php echo $instance['sponsorthreeurl']; ?>" style="width:100%;" />
<label for="<?php echo $this->get_field_id( 'sponsorthreeimg' ); ?>">Sponsor 3 Image:</label>
<input id="<?php echo $this->get_field_id( 'sponsorthreeimg' ); ?>" name="<?php echo $this->get_field_name( 'sponsorthreeimg' ); ?>" value="<?php echo $instance['sponsorthreeimg']; ?>" style="width:100%;" />
		</p>
        
        <p>
<label for="<?php echo $this->get_field_id( 'sponsorfoururl' ); ?>">Sponsor 4:</label>
<input id="<?php echo $this->get_field_id( 'sponsorfoururl' ); ?>" name="<?php echo $this->get_field_name( 'sponsorfoururl' ); ?>" value="<?php echo $instance['sponsorfoururl']; ?>" style="width:100%;" />
<label for="<?php echo $this->get_field_id( 'sponsorfourimg' ); ?>">Sponsor 4 Image:</label>
<input id="<?php echo $this->get_field_id( 'sponsorfourimg' ); ?>" name="<?php echo $this->get_field_name( 'sponsorfourimg' ); ?>" value="<?php echo $instance['sponsorfourimg']; ?>" style="width:100%;" />
		</p>
    <?php
	}
}
function widget_Blackopssponsor_init()
{
	register_widget('widget_Blackopssponsor');
}
add_action('widgets_init', 'widget_Blackopssponsor_init');
?>