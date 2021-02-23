<?php 
/*
  Template Name: Shop
  Template Post Type: product
*/

get_header();

?>

<main class="container site__shop">

    <div class="row shop__titre">
        
        <h2>Le Shop</h2>
        
        <button>
            <a href="<?php echo home_url('/shop'); ?>"><i class="fa fa-shopping-basket"></i>&nbsp;Mon panier (1)</a>
        </button>
    
    </div>

    <div class="row">

        <!-- CARD 01 -->
        <div class="card__shop">
            
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_01.png" alt="La Famille Abricot - Les poupées anatoles" />
            
            <h5>Famille Abricot</h5>

            <p>200€</p>

            <div class="shop__panier">
                <i class="fa fa-shopping-basket"></i>
            </div>
        
        </div>

        <!-- CARD 02 -->
        <div class="card__shop">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_02.png" alt="Couple Pomme - Les poupées anatoles" />
            
            <h5>Couple Pomme</h5>

            <p>120€</p>

            <div class="shop__panier">
                <i class="fa fa-shopping-basket"></i>
            </div>
        
        </div>

        <!-- CARD 03 -->
        <div class="card__shop">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_03.png" alt="Famille Poire - Les poupées anatoles" />
            
            <h5>Famille Poire</h5>

            <p>250€</p>

            <div class="shop__panier">
                <i class="fa fa-shopping-basket"></i>
            </div>
        
        </div>
    
    </div>
    
    <div class="row">

        <!-- CARD 04 -->
        <div class="card__shop">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_03.png" alt="Famille Poire - Les poupées anatoles" />
            
            <h5>Famille Poire</h5>

            <p>200€</p>

            <div class="shop__panier">
                <i class="fa fa-shopping-basket"></i>
            </div>
        
        </div>

        <!-- CARD 05 -->
        <div class="card__shop">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_03.png" alt="Famille Poire - Les poupées anatoles" />
            
            <h5>Famille Poire</h5>

            <p>120€</p>

            <div class="shop__panier">
                <i class="fa fa-shopping-basket"></i>
            </div>
        
        </div>

        <!-- CARD 06 -->
        <div class="card__shop">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_03.png" alt="Famille Poire - Les poupées anatoles" />
            
            <h5>Famille Poire</h5>

            <p>250€</p>

            <div class="shop__panier">
                <i class="fa fa-shopping-basket"></i>
            </div>
        
        </div>

    </div>

</main>

<?php get_footer() ?>