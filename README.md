# woo
WooCommerce Resources Library

## Notes

### WooCommerce Customization

> Do not edit Woo Pages directly (to avoid deleting Woo shortcodes), use hooks instead.
- If I see `do_action()` it means that I can run my custom function there, in that specific postition, WITHOUT a need of overriding a WooCommerce template.
- Full list of shortcodes available in `includes/class-wc-shortcodes.php` file.
- I can include full product page on my custom page with a shortcode `[product_page id="1"]`.
- If WP/Woo privdes me with a hook `do_action()` it means that I can run a custom function then/there.

```php
do_action( 'hook_name', 'function_name', 10, 1 );
```
- The code above goes into the `functions.php` flile of the *child theme*.
- It has the same name as per `do_action()`.
- **Priority** = `10` by default, if omitted.
- **Aarguments** = `1` by default, if omitted.
```php
function function_name() { }
```
- Hooked function (name as per `add_action()`).
- **`$arguments`** as per `do_action()`.

- Wordpress **Filter Hooks** allow me to *edit / filter* content just before it is given back to WordPress.
- If WP/Woo provides me with a `apply_filters( 'hook_name' )` I can edit that content before it is processed.


### Examples

```php
do_action( 'save_post_product', 'my_custom_function' );

function my_custom_function() {
  // do something when a product (post) is saved
}
```
```php
do_action( 'woocommerce_before_cart', 'my_above_cart_banner_function' );

function my_above_cart_banner_function() {
  // do something before the Cart table
}
```

## Resources

### Useful resources:
* [WooCommerce source](https://github.com/woocommerce/woocommerce/tree/7bfef28ac5d614837e696852ab4ffb8d7686a847/plugins/woocommerce)
* [WordPress Developer Resources](https://developer.wordpress.org/reference/)
* [WooCommerce developer resources](https://developer.woo.com/docs/woocommerce-developer-resources/)
* [WordPress Hooks](https://developer.wordpress.org/plugins/hooks/)
  *  [Actions](https://developer.wordpress.org/plugins/hooks/actions/)
  *  [Filters](https://developer.wordpress.org/plugins/hooks/filters/)
* [WooCommerce Hooks: Actions and filters](https://woo.com/document/introduction-to-hooks-actions-and-filters/)
* [Woo Extensibility on the Server Side (Hooks)](https://developer.woo.com/2023/09/22/getting-to-know-woo-exploring-server-side-extensibility-with-hooks/)
* [WooCommerce Pages](https://woo.com/document/woocommerce-pages/)
* [WooCommerce Shortcodes](https://woo.com/document/woocommerce-shortcodes/)
* [Full list of Woo shortcodes](https://github.com/woocommerce/woocommerce/blob/7bfef28ac5d614837e696852ab4ffb8d7686a847/plugins/woocommerce/includes/class-wc-shortcodes.php#L3)

### [Woo Visual Hook Guides](https://www.businessbloomer.com/category/woocommerce-tips/visual-hook-series/)

- [Emails (with default WooCommerce add_actions)](https://www.businessbloomer.com/woocommerce-visual-hook-guide-emails/)
- [My Account Pages](https://www.businessbloomer.com/woocommerce-visual-hook-guide-account-pages/)
- [Checkout Page (with default WooCommerce add_actions)](https://www.businessbloomer.com/woocommerce-visual-hook-guide-checkout-page/)
- [Archive / Shop / Cat Pages (with default add_actions)](https://www.businessbloomer.com/woocommerce-visual-hook-guide-archiveshopcat-page/)
- [Single Product Page](https://www.businessbloomer.com/woocommerce-visual-hook-guide-single-product-page/)
- [Cart Page](https://www.businessbloomer.com/woocommerce-visual-hook-guide-cart-page/)

### Other resources:
- [WordPress Developer Blog](https://developer.wordpress.org/news/)

### Explore later
- [How to add a custom field to simple and variable products](https://developer.woo.com/docs/how-to-add-a-custom-field-to-simple-and-variable-products/#5-how-to-handle-variable-products-)

### Useful plugins
- [WooCommerce HookMeUp](https://wordpress.org/plugins/hookmeup/)
- [WP Hooks Finder](https://wordpress.org/plugins/wp-hooks-finder/)
