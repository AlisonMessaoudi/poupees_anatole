<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2>Nos autres produits</h2>
		<?php endif; ?>
		
		<!-- SLIDER SHOP -->
        <div class="slider__wrapper slider__product parent_owl-carousel">
            
            <!-- RÉCUPÉRATION DES PRODUITS "PACK" -->
            <?= do_shortcode('[products limit="6" columns="6" category="pack"]'); ?>

			<!-- CARD "TOUS LES ARTICLES" -->
            <li id="all-products" class="col-4 card__shop">
                <!-- LIEN DE REDIRECTION -->
	            <a href="http://localhost:8888/sites/poupees_anatole/produits/pack-de-base/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><i class="fa fa-chevron-right"></i></a>
                <!-- TOUS LES ARTICLES -->
                <h2 class="woocommerce-loop-product__title">Tous les articles</h2>
	        </li>
			
        </div>

		<?php //woocommerce_product_loop_start(); ?>

			<?php //foreach ( $related_products as $related_product ) : ?>

					<?php
						// $post_object = get_post( $related_product->get_id() );

						// setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

						// wc_get_template_part( 'content', 'product' );
					?>

			<?php //endforeach; ?>

		<?php //woocommerce_product_loop_end(); ?>

	</section>
	<?php
endif;

wp_reset_postdata();
