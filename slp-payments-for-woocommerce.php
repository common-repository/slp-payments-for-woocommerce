<?php
/*
 * Plugin Name: SLP Payments for WooCommerce
 * Plugin URI: https://simpleledger.io/
 * Description: Accept SLP tokens and Bitcoin Cash in your online store as payment.
 * Version: 1.2.74
 * Author: Simple Ledger Inc
 * Author URI: https://twitter.com/SimpleLedger
 * License: GPLv3
 * Text Domain: ekliptor
 * 
 * WC requires at least: 3.0
 * WC tested up to: 4.0
 */

// Make sure we don't expose any info if called directly
if (! defined( 'ABSPATH' )) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit ();
}

define ( 'BCHSLP_PAYMENTS_VERSION', '1.2.74' );
define ( 'BCHSLP_PAYMENTS__MINIMUM_WP_VERSION', '4.7' );
define ( 'BCHSLP_PAYMENTS__PLUGIN_DIR', plugin_dir_path ( __FILE__ ) );

?>
