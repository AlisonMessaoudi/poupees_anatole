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
            
            <?= do_shortcode('[products limit="6" columns="6" category="pack" class="owl-carousel"]'); ?>

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