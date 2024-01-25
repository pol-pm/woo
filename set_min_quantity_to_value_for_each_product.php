<?php
/**
 * @code-snippet     Set minimum quantity of products to the set min value @ WooCommerce
 * @author           JKP.Agency Jacek Poleszak
 * @compatibility    WooCommerce 8
 * @community        https://community.jkp.agency/
 */

add_filter( 'woocommerce_quantity_input_min', 'jkpagency_min_50_value', 9999, 2 );

function jkpagency_min_50_value( $min_value, $product ) {

	// Set min quantity of 50 in value for each product

	$price = $product->get_price();
    $min_value = ceil( 50 / $price );

	return $min_value;
}
?>
