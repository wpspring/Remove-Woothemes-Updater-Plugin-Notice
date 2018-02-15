<?php
/**
 * Plugin Name: Remove Woothemes Updater Plugin Notice
 * Plugin URI: https://wordpress.org/plugins/remove-woothemes-updater-plugin-notice/
 * Description: This plugin makes it easy to remove the WooThemes Updater Plugin Notice from the top of your WordPress Admin page.
	* Version: 1.0.3
 *
 * WC requires at least: 2.5
 * WC tested up to: 3.3
 * Author: WPspring
 * Author URI: https://wpspring.com/
 * Requires at least: 3.0
 * Tested up to: 4.9.4
 *
 * @author WPspring
 */

if ( !class_exists( 'WC_RemoveWoothemesUpdaterPluginNotice') ) :

class WC_RemoveWoothemesUpdaterPluginNotice {

	public function __construct() {

		add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );

	}

	public function plugins_loaded() {

		if ( is_admin() ) {

			remove_action( 'admin_notices', 'woothemes_updater_notice', 10 );

		}

	}

}

$GLOBALS['wc_removewoothemesupdaterpluginnotice'] = new WC_RemoveWoothemesUpdaterPluginNotice();

endif;
