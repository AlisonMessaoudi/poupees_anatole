<?php 
/*
  Template Name: Accueil
*/
?>

<main class="container site__product">

    <div class="row shop__titre">
        
        <h2>Le Shop</h2>
        
        <button>
            <a href="<?php echo home_url('/shop'); ?>"><i class="fa fa-shopping-basket"></i>&nbsp;Mon panier (1)</a>
        </button>
    
    </div>

    <div class="row product__description">
        
        <!-- CARD -->
        <div class="col-lg-4 card__shop">
                
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_01.png" alt="La Famille Abricot - Les poupées anatoles" />

            <div class="shop__panier">
                <i class="fa fa-shopping-basket"></i>
            </div>
        
        </div>

        <div class="col-lg-8 card__description">

            <h2>Famille Abricot</h2>

            <p>200€</p>

            <h6>Description</h6>

            <p>Lorem ipsum dolor, <span>sit amet consectetur adipisicing elit.</span> Nesciunt eos voluptatum explicabo deserunt nulla maiores tempora adipisci <span>unde accusantium nihil</span>, dolor provident eveniet quas aut quia consequuntur quasi sint culpa!</p>

            <h6>Contenu</h6>

            <p>- Poupée Eric: Corps, 6 Visages, 6 vêtements, sac de rangement<br/>
            - Poupée Margot: Corps, 6 visages, 6 vêtements, sac de rangement<br/>
            - Poupée Lucas: Corps, 6 visages, 6 vêtements, sac de rangement
            </p>

            <button>
                <a href="<?php echo home_url('#'); ?>">Ajouter au panier</a>
            </button>

        </div>

    </div>


</main>