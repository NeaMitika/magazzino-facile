<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://manoliu.it
 * @since      1.0.0
 *
 * @package    Magazzino_Facile
 * @subpackage Magazzino_Facile/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Magazzino_Facile
 * @subpackage Magazzino_Facile/includes
 * @author     Manoliu Lucian <lucian@manoliu.it>
 */
class Magazzino_Facile_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

		wp_clear_scheduled_hook( 'my_hourly_event' );
		
	}

}
