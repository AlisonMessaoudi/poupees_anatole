<?php

/*
  Template Name: Store
*/

defined( 'ABSPATH' ) || exit;

get_header();

?>

    <main class="container site__shop">

        <div class="shop__titre">
            
            <h2>Le Shop</h2>
            
            <button>
                <a href="<?= home_url('/panier'); ?>"><ion-icon name="basket-outline"></ion-icon>&nbsp;Mon panier</a>
            </button>
        
        </div>
        
        <?php   
            do_action( 'woocommerce_before_shop_loop');
            foreach(wc_get_products(array()) as $product)
            {
                do_action( 'woocommerce_shop_loop' );
                wc_get_template_part( 'content', 'product' );
                
            }
            do_action( 'woocommerce_after_shop_loop' );
        ?>

        <nav class="woocommerce-pagination">
            <div class="misha_loadmore">Plus de produits</div>
        </nav>

    </main>

<?php get_footer() ?>