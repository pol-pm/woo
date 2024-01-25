<?php
/**
 * @kod             Dodaje zakładkę Dokumentacja do pojedynczego produktu @ WooCommerce
 * @autor           Jacek Poleszak
 * @kompatybilnosc  WooCommerce 8
 * @spolecznosc     https://grupa.jacekpoleszak.pl/
 */

add_filter( 'woocommerce_product_tabs', 'jkpagency_dodaj_zakl_dok_do_produktow' );

function jkpagency_dodaj_zakl_dok_do_produktow( $tabs ) {
  // Dodaj zakładkę Dokumentacja do produktu
  $tabs['dokumentacja'] = array(
    'title' => __( 'Dokumentacja', 'woocommerce' ),
    'priority' => 19,
    'callback' => 'zakl_dok_zawartosc'
  );
  return $tabs;
}

function zakl_dok_zawartosc() {
  echo 'Tu umieść zawartość zakładki z Dokumentacją.';
}
?>
