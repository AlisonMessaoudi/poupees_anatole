<?php 
/*
  Template Name: Produit
*/

get_header();

?>

<main class="container site__product">

    <div class="row shop__titre">
        
        <h2>Le Shop</h2>
        
        <button>
            <a href="<?= home_url('/panier'); ?>"><ion-icon name="basket-outline"></ion-icon>&nbsp;Mon panier (1)</a>
        </button>
    
    </div>

    <div class="row product__description">
        
        <!-- CARD -->
        <div class="col-lg-4 card__shop">
                
            <img src="<?= get_template_directory_uri(); ?>/assets/images/06_shop/shop_01.png" alt="La Famille Abricot - Les poupées anatoles" />

            <!-- <div class="shop__panier">
                <i class="fa fa-shopping-basket"></i>
            </div> -->

            <!-- BOUTON PANIER CROWNFOUNDING -->
            <div class="shop__panier">
                <a href="#" class="#">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/10_financement/ulule.png" alt="Logo du site de crownfounding Ulule pour le projet les Poupées Anatoles - Des outils pour parler des sexualités, des corps, des émotions..."/>
                </a>
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

<?php get_footer() ?>