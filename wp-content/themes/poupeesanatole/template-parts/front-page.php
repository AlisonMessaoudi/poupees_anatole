<?php 
/*
  Template Name: Accueil
*/

get_header();

?>

<!-- MAIN -->
<main class="container-fluid p-0 site__home">

    <!-- SECTION 1 : SLIDER HOME -->
    <section class="container-fluid p-0 home__slider">

        <!-- HOME SLIDER -->
        <div id="slider__home" class="owl-carousel">
            
            <?php get_template_part('/template-parts/sliderHome'); ?>

        </div>
    
    </section>
    
    <!-- SECTION 2 : INTRODUCTION -->
    <section class="container-fluid home__intro">

        <div class="row bloc__introduction">

            <!-- BLOC IMAGE -->
            <div class="col-lg-6 home__bloc__img">

                <!-- Forme image -->
                <img class="forme__img__gauche" src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/intro_forme_01.png" alt="Forme noire - illustration Poupées Anatoles"/>
                <!-- Intro image -->
                <img class="forme__img__center" src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/intro_img.png" alt="Image d'introduction - les Poupées Anatoles"/>
                <!-- Forme image -->
                <img class="forme__img__droite" src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/intro_forme_02.png" alt="Forme blanche - illustration Poupées Anatoles"/>
            
            </div>

            <!-- BLOC TEXTE -->
            <div class="col-lg-6 home__bloc__txt">

                <h1>Un outil de médiation qui explore les sexualités, les émotions et les corps...</h1>

                <p>Les poupées Anatoles sont un ensemble de poupées de chiffon didactiques que l’on peut déshabiller, dont on peut comprendre l’anatomie, que l’on peut mouvoir dans l’espace et qui rendent factuels les discours autour de la sexualité.</p>

                <!-- BOUTON REDIRECTION -->
                <div class="bloc__btn">

                    <button>

                        <a href="<?= home_url('/projet'); ?>">En savoir plus&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>

                    </button>
                
                </div>

            </div>

        </div>

    </section>

    <!-- SECTION TEMPORAIRE : FINANCEMENT ULULE -->
    <section class="container-fluid home__financement">

        <!-- Forme image left -->
        <img class="forme__img__left" src="<?php echo get_template_directory_uri(); ?>/assets/images/10_financement/forme_financement01.png" alt="Forme jaune - illustration Poupées Anatoles"/>

        <!-- Forme image right -->
        <img class="forme__img__right" src="<?php echo get_template_directory_uri(); ?>/assets/images/10_financement/forme_financement02.png" alt="Forme orange - illustration Poupées Anatoles"/>

        <div class="bloc__txt">

            <h2>Soutenez notre projet !</h2>

            <p>Du 1er juin au 30 juin 2021, les poupées Anatoles sollicitent votre soutien sur la plateforme de crownfunding Ulule ! En achetant en prévente ces poupées, ou en faisant tout simplement, par amour, un don, vous leur permettrez d’être mises à disposition du plus grand nombre ! En plus, des goodies et des surprises vous attendent !</p>

            <p>Elles comptent sur vous !</p>

            <!-- BOUTON REDIRECTION -->
            <div class="btn_redirection">
                <button>
                    <a href="<?= home_url('/shop'); ?>">C'est parti ! &nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                </button>
            </div>

        </div>

        <div class="bloc__img">

            <img class="img__financement" src="<?php echo get_template_directory_uri(); ?>/assets/images/10_financement/img_financement.png" alt="Les poupées anatoles X Ulule"/>

        </div>
    
    </section>

    <!-- SECTION 3 : SHOP -->
    <section class="container shop">

        <!-- TITRE ET REDIRECTION -->
        <div class="shop__titre">
            
            <h2 class="m-0">Articles</h2>
            
            <!-- BOUTON REDIRECTION -->
            <div class="btn_redirection">
                <button>
                    <a href="<?= home_url('/shop'); ?>">Accéder au Shop&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                </button>
            </div>
        
        </div>

        <!-- SLIDER SHOP -->
        <div id="slider__shop" class="slider__wrapper">
            
            <?= do_shortcode('[products limit="6" columns="6" category="pack" class="parent_owl-carousel"]'); ?>

            <li id="all-products" class="col-4 card__shop">
	            <a href="http://localhost:8888/sites/poupees_anatole/produits/pack-de-base/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><i class="fa fa-chevron-right"></i></a>
                <h2 class="woocommerce-loop-product__title">Tous les articles</h2>
	        </li>

        </div>

    </section>

    <!-- SECTION 4 : COLLABORATEURS -->
    <section class="container collaborateurs">

        <!-- TITRE ET REDIRECTION -->
        <div class="collaborateurs__titre">
                
            <h2>Collaborateurs</h2>
            
            <!-- BOUTON REDIRECTION -->
            <div class="btn_redirection">
                
                <button>
                    <a href="<?= home_url('/collaborateurs'); ?>">Les découvrir&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                </button>
            
            </div>
        
        </div>

        <!-- LISTE DES COLLABORATEURS -->
        <div id="slider__collaborateurs" class="slider__wrapper liste__collaborateurs owl-carousel">

            <?php get_template_part('/template-parts/sliderCollaborateurs'); ?>

        </div>

    </section>

</main>

<?php get_footer('entier'); ?>