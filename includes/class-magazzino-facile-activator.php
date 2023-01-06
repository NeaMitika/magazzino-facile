<?php

/**
 * Fired during plugin activation
 *
 * @link       https://manoliu.it
 * @since      1.0.0
 *
 * @package    Magazzino_Facile
 * @subpackage Magazzino_Facile/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Magazzino_Facile
 * @subpackage Magazzino_Facile/includes
 * @author     Manoliu Lucian <lucian@manoliu.it>
 */
class Magazzino_Facile_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

	/**
	 * cron job 
	 * 1603947600 = giovedì 29 ottobre 2020 06:00:00 GMT+01:00 // fa riferimento all'ora da cui partire per programmare il prossimo cronjob (+24h)
	*/ 
	wp_schedule_event( time(), 'daily', 'my_hourly_event' );


	}

}
