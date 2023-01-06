<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://manoliu.it
 * @since             1.0.0
 * @package           Magazzino_Facile
 *
 * @wordpress-plugin
 * Plugin Name:       Magazzino Facile
 * Plugin URI:        https://cuneo.digital
 * Description:       Facile magazzino ti aiuta a gestire i tuoi articoli tramite un Custom Post Type
 * Version:           1.0.0
 * Author:            Manoliu Lucian
 * Author URI:        https://manoliu.it
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       magazzino-facile
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MAGAZZINO_FACILE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-magazzino-facile-activator.php
 */
function activate_magazzino_facile() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-magazzino-facile-activator.php';
	Magazzino_Facile_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-magazzino-facile-deactivator.php
 */
function deactivate_magazzino_facile() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-magazzino-facile-deactivator.php';
	Magazzino_Facile_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_magazzino_facile' );
register_deactivation_hook( __FILE__, 'deactivate_magazzino_facile' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-magazzino-facile.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_magazzino_facile() {

	$plugin = new Magazzino_Facile();
	$plugin->run();

}
run_magazzino_facile();
