<?php 
/*
  Template Name: Accueil
*/

get_header();

?>

<!-- MAIN -->
<main class="container-fluid p-0 site__home">
    
    <!-- SECTION 1 : INTRODUCTION -->
    <section class="container-fluid home__intro">

        <div class="row">

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

                        <a href="<?php echo home_url('/projet'); ?>">En savoir plus&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>

                    </button>
                
                </div>

            </div>

        </div>

    </section>

    <!-- SECTION 2 : PRESENTATION POUPÉES -->
    <section class="container-fluid poupees__presentation">

        <!-- BLOC FORMES -->
        <div class="poupees__presentation__formes">

            <!-- Forme Left -->
            <div class="forme__left">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_06.png" alt="Forme orange - illustration Poupées Anatoles"/>
            
            </div>

            <!-- Forme Right -->
            <div class="forme__right">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_02.png" alt="Forme jaune - illustration Poupées Anatoles"/>
            
            </div>

            <!-- BLOC ILLUSTRATION 1 -->
            <div class="row poupee__presentation__illustration">

                <!-- ILLUSTRATION RIGHT -->
                <div class="col-lg-6 illustration__img__right">
                
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/poupees_presentation.png" alt="Poupées émotives - Thomas Huard les Poupées Anatoles"/>
                
                </div>

                <!-- TEXTE RIGHT -->
                <div class="col-lg-6 illustration__txt__right">
                    
                    <h3>Des poupées émotives</h3>
                
                </div>

            </div>

            <!-- BLOC ILLUSTRATION 2 -->
            <div class="row poupee__presentation__illustration">
                
                <!-- TEXTE RIGHT -->
                <div class="col-lg-6 illustration__txt__left">
                    
                    <h3>Une représentation <br/> des diversités</h3>
                
                </div>

                <!-- ILLUSTRATION RIGHT -->
                <div class="col-lg-6 illustration__img__left">
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/poupees_presentation02.png" alt="Une représentation des diversités - Thomas Huard les Poupées Anatoles"/>
                
                </div>

            </div>

        </div>

    </section>

    <!-- SECTION 3 : SHOP -->
    <section class="container shop">

        <!-- TITRE ET REDIRECTION -->
        <div class="shop__titre">
            
            <h2>Articles</h2>
            
            <div class="btn_redirection">
                <button>
                    <a href="<?php echo home_url('/shop'); ?>">Accéder au Shop&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                </button>
            </div>
        
        </div>

        <!-- SLIDER SHOP -->
        <div id="slider__shop" class="slider__wrapper owl-carousel">
            
            <?php get_template_part('/template-parts/sliderShop'); ?>

        </div>

    </section>

    <!-- SECTION 4 : COLLABORATEURS -->
    <section class="container collaborateurs">

        <!-- TITRE ET REDIRECTION -->
        <div class="collaborateurs__titre">
                
            <h2>Collaborateurs</h2>
            
            <div class="btn_redirection">
                <button>
                    <a href="<?php echo home_url('/collaborateurs'); ?>">Les découvrir&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                </button>
            </div>
        
        </div>

        <!-- LISTE DES COLLABORATEURS -->
        <div id="slider__collaborateurs" class="slider__wrapper liste__collaborateurs owl-carousel">

            <?php get_template_part('/template-parts/sliderCollaborateurs'); ?>

        </div>

    </section>

</main>

<?php get_footer(); ?>