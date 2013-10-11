<?php

// Shortcode Functions
function shortcode_toggle( $atts, $content = null)
{
 extract(shortcode_atts(array(
        'title'      => '',
        ), $atts));
   return '<h4 class="toggle"><a href="#">'.$title.'</a></h4><div class="toggle_body"><div class="block">'. do_shortcode($content) . '</div></div>';
}
add_shortcode('toggle', 'shortcode_toggle');

function techblog_button( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'link'      => '#',
    ), $atts));

	$out = "<a class=\"button lightbutton\" href=\"" .$link. "\"><span>" .do_shortcode($content). "</span></a>";
    
    return $out;
}
add_shortcode('lightbutton', 'techblog_button');
function techblog_darkbutton( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'link'      => '#',
    ), $atts));

	$out = "<a class=\"button darkbutton\" href=\"" .$link. "\"><span>" .do_shortcode($content). "</span></a>";
    
    return $out;
}
add_shortcode('darkbutton', 'techblog_darkbutton');

function techblog_pullquote_right( $atts, $content = null ) {
   return '<blockquote class="pullquote_right"><p>' . do_shortcode($content) . '</p></blockquote>';
}
add_shortcode('pullquote_right', 'techblog_pullquote_right');


function techblog_pullquote_left( $atts, $content = null ) {
   return '<blockquote class="pullquote_left"><p>' . do_shortcode($content) . '</p></blockquote>';
}
add_shortcode('pullquote_left', 'techblog_pullquote_left');

function techblog_half_page( $atts, $content = null ) {
	$content = remove_invalid_tags($content, array('p'));
	$content = remove_invalid_tags($content, array('br'));
   	return '<div class="one-half">' . do_shortcode($content) . '</div>';
}
add_shortcode('one-half', 'techblog_half_page');

function techblog_third_page( $atts, $content = null ) {
	$content = remove_invalid_tags($content, array('p'));
	$content = remove_invalid_tags($content, array('br'));
   return '<div class="one-third">' . do_shortcode($content) . '</div>';
}
add_shortcode('one-third', 'techblog_third_page');

function techblog_two_page( $atts, $content = null ) {
	$content = remove_invalid_tags($content, array('p'));
	$content = remove_invalid_tags($content, array('br'));
   return '<div class="two-third">' . do_shortcode($content) . '</div>';
}
add_shortcode('two-third', 'techblog_two_page');

function techblog_line( $atts, $content = null ) {
	if (!$atts) {
    return '<div class="hr"></div>';
	}
	else {
		extract(shortcode_atts(array(
			'title'      => 'Top',
		), $atts));
		return '<div class="hr"><a href="#top">' .$title. '</a></div>';
	}
}
add_shortcode('line', 'techblog_line');

function techblog_download_box( $atts, $content = null ) {
	$content = remove_invalid_tags($content, array('p'));
	$content = remove_invalid_tags($content, array('br'));
   return '<div class="download_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('download_box', 'techblog_download_box');


function techblog_warning_box( $atts, $content = null ) {
	$content = remove_invalid_tags($content, array('p'));
	$content = remove_invalid_tags($content, array('br'));
   return '<div class="warning_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('warning_box', 'techblog_warning_box');


function techblog_info_box( $atts, $content = null ) {
	$content = remove_invalid_tags($content, array('p'));
	$content = remove_invalid_tags($content, array('br'));
   return '<div class="info_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('info_box', 'techblog_info_box');


function techblog_note_box( $atts, $content = null ) {
	$content = remove_invalid_tags($content, array('p'));
	$content = remove_invalid_tags($content, array('br'));
   return '<div class="note_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('note_box', 'techblog_note_box');
?>