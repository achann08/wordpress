<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://hendrasutrisno.com
 * @since      1.0.0
 *
 * @package    Deepseek_Ai
 * @subpackage Deepseek_Ai/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Deepseek_Ai
 * @subpackage Deepseek_Ai/includes
 * @author     Hendra Sutrisno <hendratrisno08@gmail.com>
 */
class Deepseek_Ai_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'deepseek-ai',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
