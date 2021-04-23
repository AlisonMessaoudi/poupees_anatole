<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>

<!-- BOUTON PANIER CROWNFOUNDING -->
<div class="shop__panier">
	<a href="#" class="#">
		<img src="<?= get_template_directory_uri(); ?>/assets/images/10_financement/ulule.png" alt="Logo du site de crownfounding Ulule pour le projet les Poupées Anatoles - Des outils pour parler des sexualités, des corps, des émotions..."/>
	</a>
</div>

<?php
// echo apply_filters(
// 	'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
// 	sprintf(
// 		'<div class="shop__panier"><a href="%s" data-quantity="%s" class="%s" %s><ion-icon name="basket-outline"></ion-icon></a></div>',
// 		esc_url( $product->add_to_cart_url() ),
// 		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
// 		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
// 		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
// 		esc_html( $product->add_to_cart_text() )
// 	),
// 	$product,
// 	$args
// );
?>
