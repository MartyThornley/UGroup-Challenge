<?php
/**
 * Plugin Name: UGroup Custom Gutenberg
 * Plugin URI: 
 * Description: UGroup Custom Gutenberg
 * Author: Marty Thornley
 * Author URI: https://martythornley.com
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package ugroup-gutenberg
 */

/**
 * Exit if accessed directly.
 */
defined( 'ABSPATH' ) || exit;

// Load the plugin
require __DIR__ . '/uGroupGutenberg.php';

// Start plugin
$ugroup = new uGroupGutenberg;
