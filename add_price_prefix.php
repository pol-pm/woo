<?php
/**
 * @code-snippet     Add prefix to the price variable @ WooCommerce
 * @author           JKP.Agency Jacek Poleszak
 * @compatibility    WooCommerce 8
 * @community        https://community.jkp.agency/
 */

add_filter( 'woocommerce_get_price_html', 'jkpagency_price_prefix', 9999, 2);

function jkpagency_price_prefix($price, $product) {

  // Add prefix to the price variable

  $new_price = 'Only ' . $price;
	return $new_price;
  
}
?>
