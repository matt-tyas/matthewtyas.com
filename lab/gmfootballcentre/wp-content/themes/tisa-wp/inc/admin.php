<?php
$blackops_menu = new ControlPanel();
class ControlPanel {
	function ControlPanel() {
		
		add_action('admin_menu', array(&$this, 'this_theme_menu'));
        add_action('admin_head', array(&$this, 'admin_head')); 

        if (!is_array(get_option('blackops_theme')))
            add_option('blackops_theme', $this->default_settings);
        
        $this->options = get_option('blackops_theme');
	}

    function this_theme_menu() {
		add_menu_page('Theme Options', 'Blackops', 10, 'theme-setup', array(&$this, 'blackops_panel'), get_template_directory_uri().'/inc/admin/images/thememenuicon.png');
		add_submenu_page('theme-setup', 'General Settings', 'General Settings', 10, 'theme-setup', array(&$this, 'blackops_panel'));
		add_submenu_page('theme-setup', 'Frontpage Settings', 'Frontpage Settings', 10,  'frontpage-settings', array(&$this, 'blackops_panel'));
		add_submenu_page('theme-setup', 'Edit Post Types', 'Edit Post Types', 10,  'custom-post-types', array(&$this, 'blackops_panel'));
	}
    function loadpage() {
		require_once TEMPLATEPATH.'/inc/admin/'. $_GET['page'] .'.php';
	}
	function admin_head() {
		echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/inc/admin/adminpanel.php" type="text/css" media="screen" />';
		wp_deregister_script('jquery');
		wp_register_script('jquery', (get_template_directory_uri() ."/js/jquery-1.4.2.min.js"), false, '1.4.2');
		wp_enqueue_script('jquery');
	}
    function blackops_panel() {
		
		$current_themestyle = $this->options["themestyle"];
        if ($_POST['blackops_action'] == 'save') {
			
			$this->options["twitter"] = stripslashes($_POST['twitter']);
			$this->options["rss"] = stripslashes($_POST['rss']);
			$this->options["heart"] = stripslashes($_POST['heart']);
			$this->options["fb"] = stripslashes($_POST['fb']);
			$this->options["banner"] = stripslashes($_POST['banner']);
			$this->options["footer"] = $_POST['footer'];
			$this->options["logo"] = $_POST['logo'];
			$this->options["singlesocial"] = $_POST['singlesocial'];
			$this->options["rel"] = $_POST['rel'];
			$this->options["copyright"] = $_POST['copyright'];
			$this->options["google_analytics"] = stripslashes($_POST['google_analytics']);
			
        	update_option('blackops_theme', $this->options);
            echo '<div class="updated" id="message" style="background-color: rgb(255, 251, 204); width: 595px; margin-top:20px"><p>Your settings have been <strong>saved</strong>. Feel free to <a href="';
			bloginfo('home');
			echo '">view the site</a>.</p></div>';
        }
		if ($_POST['blackops_action'] == 'save2') {
			
			$this->options["custom_pages"] = $_POST['custom_pages'];
			
        	update_option('blackops_theme', $this->options);
            echo '<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204); width: 595px; margin-top:20px"><p>Your settings have been <strong>saved</strong>. Feel free to <a href="';
			bloginfo('home');
			echo '">view the site</a>.</p></div>';
        }
		if ($_POST['blackops_action'] == 'save3') {
			
			$this->options["auto"] = $_POST['auto'];
			$this->options["sliderspeed"] = $_POST['sliderspeed'];
			$this->options["slidercount"] = $_POST['slidercount'];
			$this->options["teaser"] = $_POST['teaser'];
			
        	update_option('blackops_theme', $this->options);
            echo '<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204); width: 595px; margin-top:20px"><p>Your settings have been <strong>saved</strong>. Feel free to <a href="';
			bloginfo('home');
			echo '">view the site</a>.</p></div>';
        }
		require_once TEMPLATEPATH.'/inc/admin/'. $_GET['page'] .'.php';   
	}
}
?>