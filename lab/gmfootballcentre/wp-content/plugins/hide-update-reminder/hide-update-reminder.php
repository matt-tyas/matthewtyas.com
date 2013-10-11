<?php
/*
Plugin Name: Hide Update Reminder
Plugin URI: http://www.stuffbysarah.net/wordpress-plugins/remove-update-reminder/
Description: Allows you to remove the upgrade Nag screen from view for Editors and below
Author: Sarah Anderson
Version: 1.2
Author URI: http://www.stuffbysarah.net/

Thanks to Viper007Bond for the code hints
*/

add_action('admin_init', 'run_chk_usr_lvl');

function run_chk_usr_lvl($matches) {
	global $userdata;
	if (!current_user_can('update_plugins')) 
		remove_action('admin_notices', 'update_nag', 3);
}
?>