<?php
/*
Plugin Name: RedSys Gateway for WooCommerce
Plugin URI: http://www.codection.com
Description: This plugins allows to users to include RedSys / Servired / Sermepa in their WooCommerce installations
Author: codection
Version: 1.1.8
Author URI: https://codection.com
*/

add_action( 'plugins_loaded', 'redsys_plugins_loaded' );
add_action( 'init', 'redsys_inicio' );

function redsys_inicio() {
	load_plugin_textdomain( "redsys_gw_woo", false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

function redsys_plugins_loaded() {
	if ( !class_exists( 'WC_Payment_Gateway' ) ) exit;

	include_once ('class-wc-redsys-gateway.php');
	
	add_filter( 'woocommerce_payment_gateways', 'woocommerce_add_gateway_redsys_gateway' );
}

function woocommerce_add_gateway_redsys_gateway($methods) {
	$methods[] = 'WC_Redsys_Gateway';
	return $methods;
}

function redsys_enqueue($hook) {
	if ( 'woocommerce_page_wc-settings' != $hook ) {
        return;
    }

    wp_enqueue_script( 'jquery-validate', plugin_dir_url( __FILE__ ) . 'js/jquery.validate.min.js', array( "jquery" ), "1.13.1", true );
}
add_action( 'admin_enqueue_scripts', 'redsys_enqueue' );

function redsys_plugin_row_meta( $links, $file ){
	if ( strpos( $file, basename( __FILE__ ) ) !== false ) {
		$new_links = array(
					'<a href="https://www.paypal.me/codection" target="_blank">' . __( 'Donate', "redsys_gw_woo" ) . '</a>'
				);
		
		$links = array_merge( $links, $new_links );
	}
	
	return $links;
}
add_filter('plugin_row_meta', 'redsys_plugin_row_meta', 10, 2);

function redsys_admin_notice(){
     echo '<div class="error"><p>Debido al cambio de método de comunicación con RedSys hemos preparado <a href="http://codection.com/tienda/">un plugin nuevo</a>, adaptado a este cambio, con mejor soporte todavía y que por el momento además de sus cientos de descargas ya ha cosechado casi <a href="http://codection.com/producto/redsys-gateway-for-woocommerce/#comments">30 opiniones con 5 estrellas sobre 5</a>.
		Todavía estás a tiempo de usar el cupón descuento del 20% que durará hasta el sábado 12 de diciembre de este año 2015: <strong>rgfw20</strong>
        </div>';
}
add_action('admin_notices', 'redsys_admin_notice');