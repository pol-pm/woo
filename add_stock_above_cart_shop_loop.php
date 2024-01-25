/**
 * @code-snippet     Add stock info above Add to cart on Shop page @ WooCommerce
 * @author           JKP.Agency Jacek Poleszak
 * @compatibility    WooCommerce 8
 * @community        https://community.jkp.agency/
 */

add_action( 'woocommerce_after_shop_loop_item', 'jkpagency_show_stock_shop_loop_item', 9 );

function jkpagency_show_stock_shop_loop_item() {
    global $product;

    $stock = $product->get_stock_quantity();
    $managed = $product->get_manage_stock();
    if ( true == $managed ) {
        echo '<p>Stock: ' . $stock . '</p>';
    }
}
