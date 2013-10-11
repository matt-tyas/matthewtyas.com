<?php
$new_meta_boxes = 
array(
"post_image" => array(
"name" => "article_image",
"type" => "input",
"std" => "",
"title" => "Enter Custom Post Type",
"description" => "Enter the name of the Custom Post Type that you created from Blackops Admin Page. This is only used on Gallery Pages."));

function new_meta_boxes() {
global $post, $new_meta_boxes;
	
	foreach($new_meta_boxes as $meta_box) {
		
		echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
		
		if( $meta_box['type'] == "input" ) { 
		
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
			if($meta_box_value == "")
				$meta_box_value = $meta_box['std'];
		
			echo'<input type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="55" /><br />';
			echo'<p><label for="'.$meta_box['name'].'_value">'.$meta_box['description'].'</label></p>';
			
		} 		
	}

}

function create_meta_box() {
global $theme_name, $new_meta_boxes;
	if (function_exists('add_meta_box') ) {
	add_meta_box( 'new-meta-boxes', 'Enter Custom Post Type', 'new_meta_boxes', 'page', 'normal', 'high' );
	}
}

function save_postdata( $post_id ) {
	global $post, $new_meta_boxes;  
		foreach($new_meta_boxes as $meta_box) {  
		
		// Verify  
		if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {  
		return $post_id;  
		}  
	
	if ( 'page' == $_POST['post_type'] ) {  
	if ( !current_user_can( 'edit_page', $post_id ))  
	return $post_id;  
	} else {  
	if ( !current_user_can( 'edit_post', $post_id ))  
	return $post_id;  
	}  
	
	$data = $_POST[$meta_box['name'].'_value'];
	
	if(get_post_meta($post_id, $meta_box['name'].'_value') == "")  
	add_post_meta($post_id, $meta_box['name'].'_value', $data, true);  
	elseif($data != get_post_meta($post_id, $meta_box['name'].'_value', true))  
	update_post_meta($post_id, $meta_box['name'].'_value', $data);  
	elseif($data == "")  
	delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));  
	}

}

add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');
?>