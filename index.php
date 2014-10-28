<?php

/*
    Plugin Name: Remove Woothemes Updater Plugin Notice
    Plugin URI: https://github.com/wpspring/Remove-Woothemes-Updater-Plugin-Notice
    Description: This plugin makes it easy to remove the WooThemes Updater Plugin Notice from the top of your WordPress Admin page.
    Version: 1.0
    Author: Steve Johnson
    Author URI: https://wpspring.com/
*/

if(!class_exists('WC_RemoveWoothemesUpdaterPluginNotice')) :

class WC_RemoveWoothemesUpdaterPluginNotice {
    public function __construct() {
        add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );
    }
    public function plugins_loaded() {
        if ( is_admin() ) {
            remove_action('admin_notices', 'woothemes_updater_notice', 10);
        }
    }
}
$GLOBALS['wc_removewoothemesupdaterpluginnotice'] = new WC_RemoveWoothemesUpdaterPluginNotice();
endif;
?>
