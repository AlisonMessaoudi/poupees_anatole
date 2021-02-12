<?php 
/*
  Template Name: Accueil
*/
?>

<!-- MAIN -->
<main class="container-fluid site__home">
    
    <!-- SECTION 1 : INTRODUCTION -->
    <section class="home__intro">

        <div class="row">

            <div class="col-lg-5 home__bloc__img">

                <!-- Forme image -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/intro_forme_01.png" alt="Forme noire - illustration Poupées Anatoles"/>
                <!-- Intro_img -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/intro_img.png" alt="Image d'introduction - les Poupées Anatoles"/>
                <!-- Forme image -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/intro_forme_02.png" alt="Forme blanche - illustration Poupées Anatoles"/>
            
            </div>

            <div class="col-lg-7 home__bloc__txt">

                <h1>Un outil de médiation qui explore les sexualités, les émotions et les corps...</h1>

                <p>Les poupées Anatoles sont un ensemble de poupées de chiffon didactiques que l’on peut déshabiller, dont on peut comprendre l’anatomie, que l’on peut mouvoir dans l’espace et qui rendent factuels les discours autour de la sexualité.</p>

                <button>

                    <a href="<?php echo home_url('/contact'); ?>">En savoir plus <i class="fas fa-chevron-right"></i></a>

                </button>

            </div>

        </div>

    </section>

    <!-- SECTION 2 : PRESENTATION POUPÉES -->
    <section class="poupees__presentation">

        <div>

            <!-- Forme Left -->
            <div class="forme__left">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_06.png" alt="Forme orange - illustration Poupées Anatoles"/>
            
            </div>

            <!-- Forme Right -->
            <div class="forme__right">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_02.png" alt="Forme jaune - illustration Poupées Anatoles"/>
            
            </div>

            <!-- ILLUSTRATION 1 -->
            <div class="row">

                <img class="col-lg-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/poupees_presentation.png" alt="Poupées émotives - Thomas Huard les Poupées Anatoles"/>

                <h3 class="col-lg-7">Des poupées émotives</h3>

            </div>

            <!-- ILLUSTRATION 2 -->
            <div class="row">

                <h3 class="col-lg-7">Une représentation des diversités</h3>

                <img class="col-lg-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/poupees_presentation02.png" alt="Une représentation des diversités - Thomas Huard les Poupées Anatoles"/>

            </div>

        </div>

    </section>

    <!-- SECTION 3 : SHOP SLIDER -->
    <section class="shop">

        <div class="shop__titre">
            
            <h2>Articles</h2>
            
            <button>
                <a href="<?php echo home_url('/shop'); ?>">Accéder au Shop></a>
            </button>
        
        </div>

        <!-- SLIDER SHOP -->
        <div id="slider__shop">

            <!-- CARD 01 -->
            <div class="card__shop">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_01.png" alt="La Famille Abricot - Les poupées anatoles" />
                
                <h5>Famille Abricot</h5>

                <div class="shop__panier">
                    <i class="fas fa-shopping-basket"></i>
                </div>
            
            </div>

            <!-- CARD 02 -->
            <div class="card__shop">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_02.png" alt="Couple Pomme - Les poupées anatoles" />
                
                <h5>Couple Pomme</h5>

                <div class="shop__panier">
                    <i class="fas fa-shopping-basket"></i>
                </div>
            
            </div>

            <!-- CARD 03 -->
            <div class="card__shop">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_03.png" alt="Famille Poire - Les poupées anatoles" />
                
                <h5>Famille Poire</h5>

                <div class="shop__panier">
                    <i class="fas fa-shopping-basket"></i>
                </div>
            
            </div>

        </div>

    </section>

    <!-- SECTION 4 : PARTENAIRES -->
    <section class="section_partenaire">

        <div>

            <!-- TITRE : LES PARTENAIRES -->
            <div>

                <button>
            
                    <a href="">Les Partenaires ></a>
            
                </button>
            
            </div>

            <!-- LISTE DES PARTENAIRES -->
            <div id="slider_partenaire" class="liste_partenaires">

                <!-- PARTENAIRE 1 -->
                <div class="partenaire">

                    <img src="" alt=""/>

                    <h4>Porteur de projet</h4>

                    <p>Thomas Huard<span>Designer, Créateur</span></p>

                </div>

                <!-- PARTENAIRE 2 -->
                <div class="partenaire">

                    <img src="" alt=""/>

                    <h4>Porteur de projet</h4>

                    <p>Thomas Huard<span>Designer, Créateur</span></p>

                </div>

                <!-- PARTENAIRE 3 -->
                <div class="partenaire">

                    <img src="" alt=""/>

                    <h4>Porteur de projet</h4>

                    <p>Thomas Huard<span>Designer, Créateur</span></p>

                </div>

                <!-- PARTENAIRE 4 -->
                <div class="partenaire">

                    <img src="" alt=""/>

                    <h4>Porteur de projet</h4>

                    <p>Thomas Huard<span>Designer, Créateur</span></p>

                </div>

                <!-- PARTENAIRE 5 -->
                <div class="partenaire">

                    <img src="" alt=""/>

                    <h4>Porteur de projet</h4>

                    <p>Thomas Huard<span>Designer, Créateur</span></p>

                </div>

            </div>

        </div>

    </section>

</main>