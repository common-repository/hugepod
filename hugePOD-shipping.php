<?php
/**
Plugin Name: HugePOD
Plugin URI: https://wordpress.org/plugins/hugepod/
Description: Print on Demand & Dropshipping for your HugePOD-Woocommerce integration.
Version: 1.0.9
Author: HugePOD
Author URI: http://www.hugepod.com
License: GPL2 http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: hugepod
WC requires at least: 3.0.0
WC tested up to: 5.8
*/

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! defined( 'HUGEPOD_PLUGIN_FILE' ) ) {
    define( 'HUGEPOD_PLUGIN_FILE', __FILE__ );
}

class HugePOD_Base {

    const VERSION = '1.0.9';
    const HUGEPOD_HOST = 'https://service.hugepod.com/';
    const HUGEPOD_HOME_PAGE_HOST = 'https://www.hugepod.com/';
    const HUGEPOD_API_HOST = 'https://api.service.hugepod.com/';

    /**
     * Construct the plugin.
     */
    public function __construct() {
        add_action( 'plugins_loaded', array( $this, 'init' ) );
    }

    /**
     * Initialize the plugin.
     */
    public function init() {

    }

}

new HugePOD_Base();    //let's go
