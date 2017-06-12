<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.slushman.com
 * @since             1.0.0
 * @package           Wp_Starter_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       WP Starter Plugin
 * Plugin URI:        https://www.slushman.com/wp-starter-plugin
 * Description:       This is a starter plugin used for creating other plugins.
 * Version:           1.0.0
 * Author:            Slushman
 * Author URI:        https://www.slushman.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-starter-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-starter-plugin-activator.php
 */
function activate_wp_starter_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-starter-plugin-activator.php';
	Wp_Starter_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-starter-plugin-deactivator.php
 */
function deactivate_wp_starter_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-starter-plugin-deactivator.php';
	Wp_Starter_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_starter_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_wp_starter_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-starter-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_starter_plugin() {

	$plugin = new Wp_Starter_Plugin();
	$plugin->run();

}
run_wp_starter_plugin();
