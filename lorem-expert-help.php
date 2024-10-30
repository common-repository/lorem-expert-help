<?php
/*
Plugin Name: Lorem: Expert Website Help
Plugin URI:  https://www.asklorem.com
Description: Work with Lorem to design, build, and fix your website. Our experts are here for you 24/7. Trusted by thousands of business owners around the world.
Version: 0.3.3
Author: Lorem Technologies
Author URI: https://profiles.wordpress.org/loremtechnologies
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

The "Lorem: Expert Website Help" WordPress plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

The "Lorem: Expert Website Help" WordPress plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with the "Lorem: Expert Website Help" WordPress plugin. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// Make sure that plugin cannot be accessed directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Plugin cannot be accessed directly';
	exit;
}

// Define constants
define( 'LOREM_EXPERT_VERSION', '0.3.3' );
define( 'LOREM_EXPERT__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Necessary imports
require_once( LOREM_EXPERT__PLUGIN_DIR . 'class.lorem-remote.php' );
require_once( LOREM_EXPERT__PLUGIN_DIR . 'class.lorem-rest-api.php' );
require_once( LOREM_EXPERT__PLUGIN_DIR . 'class.lorem-main.php' );

// Register the plugin activation/deactivation hooks
register_activation_hook( __FILE__, array( 'LoremExpert_Main', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'LoremExpert_Main', 'plugin_deactivation' ) );

?>