<?php
/**
 * @code-snippet     Add last name to registration form and save it to user billing last name field @ WooCommerce
 * @author           JKP.Agency Jacek Poleszak
 * @compatibility    WooCommerce 8
 * @community        https://community.jkp.agency/
 */

add_action( 'woocommerce_register_form_start', 'jkpagency_add_last_name_registration_field' );

function jkpagency_add_last_name_registration_field() {

	?>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="reg_lastname">Last name</label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="lastname" id="reg_lastname" autocapitalize="sentences" autocomplete="family-name" value="" style=""> <!-- aria-describedby="validate-error-shipping_last_name" -->
		</p>

	<?php
}
add_action( 'woocommerce_created_customer', 'jkpagency_save_lastname' );

function jkpagency_save_lastname( $customer_id ) {
	if ( isset( $_POST['lastname'] ) ) {
		update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['lastname'] ) );
	}
}
?>
