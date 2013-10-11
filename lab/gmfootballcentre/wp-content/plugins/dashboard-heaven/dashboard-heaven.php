<?php
/*
Plugin Name: Dashboard Heaven
Plugin URI: http://dave.kinkead.com.au/dashboard-heaven/
Description: Take control of your admin dashboard. Offers customized dashboard widget visibility control for each user level.
Version: 1.0
Author: Dave Kinkead
Author URI: http://dave.kinkead.com.au
License: GPL2

/*  Copyright 2010  Dave Kinkead  (email : dave@kinkead.com.au)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

register_deactivation_hook(__FILE__, 'dh_deactivate');

add_action( 'wp_dashboard_setup', 'dh_update_dashboard_widgets' );
add_action( 'admin_menu', 'dh_add_admin_page' );
add_action( 'admin_init', 'dh_register_settings' );

/**
 *	Register settings
 * 	@args none
 *	@return void
 */
function dh_register_settings() {
	$widgets =  dh_get_dashboard_widgets();
	foreach( $widgets as $widget=>$name ) {
		register_setting( 'dh-options', $widget );
	}
}

/**
 *	Deactivate
 * 	@args none
 *	@return void
 */
function deactivate() {
	//	@todo Not working for some reason
	$widgets =  dh_get_dashboard_widgets();
	foreach( $widgets as $widget=>$name ) {
		delete_option( $widget );
	}
}

/**
 *	Updates the dashboard widgers
 * 	@args 	none
 *	@return void
 *	@todo	Need to deal with dashboard widgets dynamically
 */
function dh_update_dashboard_widgets() {
	global $wp_meta_boxes;
	//	Right Now
	if( !current_user_can( get_option( 'dashboard_right_now' ) ) ) { 
		unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
	}
	//	Recent Comments
	if( !current_user_can( get_option( 'dashboard_recent_comments' ) ) ) { 
		unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments'] );
	}	
	//	Incoming Links
	if( !current_user_can( get_option( 'dashboard_incoming_links' ) ) ) { 
		unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links'] );
	}	
	//	Plugins
	if( !current_user_can( get_option( 'dashboard_plugins' ) ) ) { 
		unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] );
	}	
	//	Quick Press
	if( !current_user_can( get_option( 'dashboard_quick_press' ) ) ) { 
		unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
	}	
	//	Recent Drafts
	if ( !current_user_can( get_option( 'dashboard_recent_drafts' ) ) ) { 
		unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts'] );
	}		
	// Wordpress Development Feed
	if ( !current_user_can( get_option( 'dashboard_primary' ) ) ) { 
		unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
	}
	// Other Wordpress News Feed
	if ( !current_user_can( get_option( 'dashboard_secondary' ) ) ) { 
		unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] );
	}
}

/**
 *	User capability function
 * 	@args bool (optional) $selectlist
 * 	@return array|string
 */
function dh_get_capabilities( $selectlist = FALSE, $name = FALSE ) {
	global $wp_roles;
	$option = get_option( $name );	
	if ( $selectlist ) {
		$cap = '<select name="' . $name .'">';
		$cap .= '<option value="do-everything">Nobody</option>';	
		foreach ( $wp_roles->roles['administrator']['capabilities'] as $key=>$val ) {
			$cap .= '<option value="' . $key . '"';
			if ( $option == $key ) $cap .= ' selected="yes"';
			$cap .= '>' . $key . '</option>';		
		}
		$cap .= '</select>';
		return $cap;
	} else {
		return $wp_roles->roles['administrator']['capabilities'];
	}
}

/**
 *	Dashboard Widget function
 * 	@args 	void
 * 	@return array
 *	@todo	fix dynamic widget return
 */
function dh_get_dashboard_widgets() {
	global $wp_meta_boxes;
	$widgets = array();
	if ( isset( $wp_meta_boxes['dashboard'] ) ) {
		//	why does this not work?
		foreach( $wp_meta_boxes['dashboard']['normal']['core'] as $key=>$val ) $widgets[$key] = $val['title'];
		foreach( $wp_meta_boxes['dashboard']['side']['core'] as $key=>$val ) $widgets[$key] = $val['title'];
	} else {
		$widgets = array( 'dashboard_right_now' => 'Right Now', 'dashboard_recent_comments' => 'Recent Comments', 'dashboard_incoming_links' => 'Incoming Links',  'dashboard_plugins' => 'Plugins', 'dashboard_quick_press' => 'Quick Press', 'dashboard_recent_drafts' => 'Recent Drafts', 'dashboard_primary' => 'Wordpress Development Feed', 'dashboard_secondary' => 'Other Wordpress News Feed');
	}
	return $widgets;
}

/**
 * Admin page functions
 */
function dh_add_admin_page() {
	if ( function_exists( 'add_management_page' ) ) {
		 add_management_page( 'Dashboard Heaven', 'Dashboard Heaven', 8, __FILE__, 'dh_admin_page' );
	}
 }

function dh_admin_page() {
	include( dirname( __FILE__ ) . '/options.php' );
}	
/*		End of File		*/