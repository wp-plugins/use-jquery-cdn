<?php
 /*
Plugin Name: Use jQuery CDN
Plugin URI: http://additifstabac.free.fr/index.php/use-jquery-jsDelivr/
Donate link: additifstabac@free.fr
Description: Charge les bibliothèques open source jQuery et jQuery-migrate depuis le CDN de jQuery
Author: luciole135
Author URI: http://additifstabac.free.fr
Version: 1.0
*/
function modify_jquery() {global $wp_scripts;
	if (!is_admin()) {
		$jquery_ver = $wp_scripts->registered['jquery']->ver;
		$jquery_migrate_ver = $wp_scripts->registered['jquery-migrate']->ver;
		wp_deregister_script('jquery');
		wp_deregister_script('jquery-migrate');
		wp_enqueue_script('jquery', 'http://code.jquery.com/jquery-'.$jquery_ver.'.min.js', false, $jquery_ver,true);
		wp_enqueue_script('jquery-migrate', 'http://code.jquery.com/jquery-migrate-'.$jquery_migrate_ver.'.min.js', false, $jquery_migrate_ver,true);
		}
}
add_action('wp_enqueue_scripts', 'modify_jquery');
?>