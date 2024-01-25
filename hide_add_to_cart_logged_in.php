<?php
/**
 * @code-snippet     Hide Add to cart for logged in users on Shop page & Single product page @ WooCommerce
 * @author           JKP.Agency Jacek Poleszak
 * @compatibility    WooCommerce 8
 * @community        https://community.jkp.agency/
 */
add_action( 'wp', 'jkpagency_hide_cart_logged_out' );

function jkpagency_hide_cart_logged_out () {

    if ( ! is_user_logged_in() ) {
        remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart',
10 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
    }
}
?>
