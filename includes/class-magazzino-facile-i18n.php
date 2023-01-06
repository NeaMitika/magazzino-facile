<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://manoliu.it
 * @since      1.0.0
 *
 * @package    Magazzino_Facile
 * @subpackage Magazzino_Facile/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Magazzino_Facile
 * @subpackage Magazzino_Facile/includes
 * @author     Manoliu Lucian <lucian@manoliu.it>
 */
class Magazzino_Facile_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'magazzino-facile',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
