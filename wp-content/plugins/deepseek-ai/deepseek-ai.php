<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://hendrasutrisno.com
 * @since             1.0.0
 * @package           Deepseek_Ai
 *
 * @wordpress-plugin
 * Plugin Name:       Deepseek AI
 * Plugin URI:        https://chat.deepseek.com
 * Description:       This is DeepSeek AI inside WordPress Website
 * Version:           1.0.0
 * Author:            Hendra Sutrisno
 * Author URI:        https://hendrasutrisno.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       deepseek-ai
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
define( 'DEEPSEEK_AI_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-deepseek-ai-activator.php
 */
function activate_deepseek_ai() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-deepseek-ai-activator.php';
	Deepseek_Ai_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-deepseek-ai-deactivator.php
 */
function deactivate_deepseek_ai() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-deepseek-ai-deactivator.php';
	Deepseek_Ai_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_deepseek_ai' );
register_deactivation_hook( __FILE__, 'deactivate_deepseek_ai' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-deepseek-ai.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_deepseek_ai() {

	$plugin = new Deepseek_Ai();
	$plugin->run();

}
run_deepseek_ai();
