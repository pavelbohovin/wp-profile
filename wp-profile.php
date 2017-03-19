<?php
/*
Plugin Name: WP profile
Description: WP profile is easy way to create profile page.
Version: 1.0.0
Author: Pavel Bohovin
Author URI: http://maple.com.ua
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wp-profile
Domain Path: /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-profile-activator.php
 */
function activate_wp_profile() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-profile-activator.php';
	WP_Profile_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-profile-deactivator.php
 */
function deactivate_wp_profile() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-profile-deactivator.php';
	WP_Profile_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_profile' );
register_deactivation_hook( __FILE__, 'deactivate_wp_profile' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-profile.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_profile() {

	$plugin = new WP_Profile();
	$plugin->run();

}

run_wp_profile();
