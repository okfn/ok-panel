<?php
/*
 * Plugin Name: ok-panel
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: ok-panel
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-ok-panel.php' );
require_once( 'includes/class-ok-panel-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-ok-panel-admin-api.php' );
require_once( 'includes/lib/class-ok-panel-post-type.php' );
require_once( 'includes/lib/class-ok-panel-taxonomy.php' );

/**
 * Returns the main instance of ok-panel to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object ok-panel
 */
function ok-panel () {
	$instance = ok-panel::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = ok-panel_Settings::instance( $instance );
	}

	return $instance;
}

ok-panel();
