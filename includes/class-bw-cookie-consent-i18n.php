<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://bway.pt
 * @since      1.0.0
 *
 * @package    Bw_Cookie_Consent
 * @subpackage Bw_Cookie_Consent/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Bw_Cookie_Consent
 * @subpackage Bw_Cookie_Consent/includes
 * @author     João Santos <joao.santos@bway.pt>
 */
class Bw_Cookie_Consent_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'bw-cookie-consent',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
