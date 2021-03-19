<!DOCTYPE html>
<html lang="fr">

    <!-- HEAD -->
    <head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- RÉFÉRENCEMENT - SEO -->
        <meta name="description" content="Le projet Poupées Anatoles est un outil de médiation qui explore les sexualités, les émotions et les corps..." />
        <meta name="author" content="Thomas Huard - Designer et concepteur d'outils pédagogiques" />
        
        <!-- FAVICON -->
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/01_logo/favicon32x32.png"/>

        <title> <?php bloginfo('name'); ?> </title>

        <?php wp_head(); ?>

    </head>

    <!-- BODY -->
    <body <?php body_class();  ?> > 
            <!-- contient les classes : "home blog logged-in admin-bar no-customize support" -->

        <?php wp_body_open(); ?>
            <!-- permet aux extensions tel que Yoast d'ajouter des éléments au début du body -->

        <!-- HEADER -->
        <header class="container-fluid site__header">
            
            <!-- SITE NAVBAR -->
            <nav class="navbar mt-3 navbar-expand-lg shift site__navbar">

                <!-- BLOC IMAGE -->
                <div>

                    <!-- Forme image left -->
                    <img class="forme__img__gauche" src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_header_01.png" alt="Forme noire - illustration Poupées Anatoles"/>
                    <!-- Forme image center -->
                    <img class="forme__img__center" src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_header_02.png" alt="Image d'introduction - les Poupées Anatoles"/>
                    <!-- Forme image right -->
                    <img class="forme__img__droite" src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_header_03.png" alt="Forme blanche - illustration Poupées Anatoles"/>

                </div>

                <!-- BOUTONS CONNEXION -->
                <div class="row connexion">

                    <i class="col-lg-5 fa fa-shopping-basket"></i>
                    <i class="col-lg-5 fa fa-user"></i>

                </div>
                
                <!-- LOGO : redirection accueil -->
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/01_logo/logo_poupees_anatoles.png" alt="Logo projet Poupées Anatoles - Des outils pour parler des sexualités, des corps, des émotions..."/>
                </a>

                <!-- MENU BURGER -->
                <button class="navbar-toggler menu__burger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                
                    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
            
                </button>

                <!-- MENU DESKTOP et MOBILE DEPLOYÉ -->
                <div class="collapse navbar-collapse menu__desktop" id="navbarSupportedContent">
                    
                    <?php wp_nav_menu( 
                        array(
                            'theme_location' => 'header',
                            'container' => 'ul', // évite d'avoir une div autour du menu
                            'menu_class' => 'navbar-nav site__header__menu', // crée une classe personnalisée
                            'depth' => 0,
                        )
                    ); ?>
                
                </div>
            
            </nav>
        
        </header>

