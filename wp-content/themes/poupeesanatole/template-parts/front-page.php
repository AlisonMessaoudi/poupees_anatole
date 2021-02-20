<?php 
/*
  Template Name: Accueil
*/
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
                <!-- Intro_img -->
                <img class="forme__img__center" src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/intro_img.png" alt="Image d'introduction - les Poupées Anatoles"/>
                <!-- Forme image -->
                <img class="forme__img__droite" src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/intro_forme_02.png" alt="Forme blanche - illustration Poupées Anatoles"/>
            
            </div>

            <!-- BLOC TEXTE -->
            <div class="col-lg-6 home__bloc__txt">

                <h1>Un outil de médiation qui explore les sexualités, les émotions et les corps...</h1>

                <p>Les poupées Anatoles sont un ensemble de poupées de chiffon didactiques que l’on peut déshabiller, dont on peut comprendre l’anatomie, que l’on peut mouvoir dans l’espace et qui rendent factuels les discours autour de la sexualité.</p>

                <div class="bloc__btn">

                    <button>

                        <a href="<?php echo home_url('/contact'); ?>">En savoir plus&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>

                    </button>
                
                </div>

            </div>

        </div>

    </section>

    <!-- SECTION 2 : PRESENTATION POUPÉES -->
    <section class="container-fluid poupees__presentation">

        <div class="poupees__presentation__formes">

            <!-- Forme Left -->
            <div class="forme__left">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_06.png" alt="Forme orange - illustration Poupées Anatoles"/>
            
            </div>

            <!-- Forme Right -->
            <div class="forme__right">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_02.png" alt="Forme jaune - illustration Poupées Anatoles"/>
            
            </div>

            <!-- ILLUSTRATION 1 -->
            <div class="row poupee__presentation__illustration">

                <div class="col-lg-6 illustration__img__right">
                
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/poupees_presentation.png" alt="Poupées émotives - Thomas Huard les Poupées Anatoles"/>
                
                </div>

                <div class="col-lg-6 illustration__txt__right">
                    
                    <h3>Des poupées émotives</h3>
                
                </div>

            </div>

            <!-- ILLUSTRATION 2 -->
            <div class="row poupee__presentation__illustration">
                
                <div class="col-lg-6 illustration__txt__left">
                    
                    <h3>Une représentation <br/> des diversités</h3>
                
                </div>

                <div class="col-lg-6 illustration__img__left">
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/poupees_presentation02.png" alt="Une représentation des diversités - Thomas Huard les Poupées Anatoles"/>
                
                </div>

            </div>

        </div>

    </section>

    <!-- SECTION 3 : SHOP SLIDER -->
    <section class="container shop">

        <div class="row shop__titre">
            
            <h2>Les Articles</h2>
            
            <button>
                <a href="<?php echo home_url('/shop'); ?>">Accéder au Shop&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
            </button>
        
        </div>

        <!-- SLIDER SHOP -->
        <div id="slider__shop" class="row">

            <!-- CARD 01 -->
            <div class="card__shop">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_01.png" alt="La Famille Abricot - Les poupées anatoles" />
                
                <h5>Famille Abricot</h5>

                <div class="shop__panier">
                    <i class="fa fa-shopping-basket"></i>
                </div>
            
            </div>

            <!-- CARD 02 -->
            <div class="card__shop">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_02.png" alt="Couple Pomme - Les poupées anatoles" />
                
                <h5>Couple Pomme</h5>

                <div class="shop__panier">
                    <i class="fa fa-shopping-basket"></i>
                </div>
            
            </div>

            <!-- CARD 03 -->
            <div class="card__shop">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_03.png" alt="Famille Poire - Les poupées anatoles" />
                
                <h5>Famille Poire</h5>

                <div class="shop__panier">
                    <i class="fa fa-shopping-basket"></i>
                </div>
            
            </div>

            <!-- CARD 04 -->
            <div class="card__shop">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_shop/shop_03.png" alt="Famille Poire - Les poupées anatoles" />
                
                <h5>Famille Poire</h5>

                <div class="shop__panier">
                    <i class="fa fa-shopping-basket"></i>
                </div>
            
            </div>

        </div>

    </section>

    <!-- SECTION 4 : COLLABORATEURS -->
    <section class="container collaborateurs">

        <!-- TITRE : LES COLLABORATEURS -->
        <div class="row collaborateurs__titre">
                
            <h2>Les Collaborateurs</h2>
            
            <button>
                <a href="<?php echo home_url('/shop'); ?>">Tous les collaborateurs&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
            </button>
        
        </div>

        <!-- LISTE DES COLLABORATEURS -->
        <div id="slider__collaborateurs" class="liste__collaborateurs">

            <!-- COLLABORATEUR 1 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_thomasHuard.png" alt="Portrait de Thomas Huard - Porteur du projet les Poupées Anatoles"/>

                <h4>Porteur de projet</h4>

                <p>Thomas Huard

                <br/>
                
                <span>Designer, Créateur d'outils pédagogique</span>
            
                </p>

                <div class="more__round">
                    <i class="fa fa-plus"></i>
                </div>

            </div>

            <!-- COLLABORATEUR 2 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_sheilaWarembourg.png" alt="Portrait de Sheila Warembourg - Collaborateur du projet les Poupées Anatoles"/>

                <h4>Experts</h4>

                <p>Sheila Warembourg
                
                <br/>

                <span>Diplômée en Sexologie <br/> et Santé Publique, <br/>Formatrice sexologue</span>
                
                <p>

                <div class="more__round">
                    <i class="fa fa-plus"></i>
                </div>

            </div>

            <!-- COLLABORATEUR 3 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05_logoPartenaires/logo_libreObjet.png" alt="Logo de Libre Objet - Collaborateur du projet les Poupées Anatoles"/>

                <h4>Fabricant</h4>

                <p>Libre Objet

                <br/>

                <span>Atelier d'insertion</span>
            
                </p>

                <div class="more__round">
                    <i class="fa fa-plus"></i>
                </div>

            </div>

            <!-- COLLEBORATEUR 4 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_GeraldineMathieu.png" alt="Portrait de Geraldine Mathieu - Collaborateur du projet les Poupées Anatoles"/>

                <h4>Développement<br/>des Prototypes</h4>

                <p>Géraldine Mathieu
                
                <br/>

                <span>Couturière</span>
            
                </p>

                <div class="more__round">
                    <i class="fa fa-plus"></i>
                </div>

            </div>

            <!-- COLLABORATEUR 5 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05_logoPartenaires/logo_tango&Scan.png" alt="Logo de Tango&Scan - Financeur du projet les Poupées Anatoles"/>

                <h4>Financeurs</h4>

                <p>Tango&Scan

                <br/>
                
                <span>Appel à projets</span>
                
                </p>

                <div class="more__round">
                    <i class="fa fa-plus"></i>
                </div>

            </div>

        </div>

    </section>

</main>