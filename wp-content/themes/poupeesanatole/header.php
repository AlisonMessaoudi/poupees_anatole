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
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/01_logo/favicon.png"/>

        <?php wp_head(); ?>

    </head>

    <!-- BODY -->
    <body <?php body_class();  ?> > 
            <!-- contient les classes : "home blog logged-in admin-bar no-customize support" -->

        <?php wp_body_open(); ?>
            <!-- permet aux extensions tel que Yoast d'ajouter des éléments au début du body -->

        <!-- HEADER -->
        <header class="container-fluid site__header">

            <nav class="navbar mt-3 navbar-expand-lg shift">
                
                <!-- LOGO : redirection accueil -->
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/01_logo/logo_poupees_anatoles.png" alt="Logo projet Poupées Anatoles - Des outils pour parler des sexualités, des corps, des émotions..."/>
                </a>

                <!-- MENU BURGER -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            
                </button>

                <!-- MENU DESKTOP et MOBILE DEPLOYÉ -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <?php wp_nav_menu( 
                        array(
                            'theme_location' => 'header',
                            'container' => 'ul', // évite d'avoir une div autour du menu
                            'menu_class' => 'site__header__menu', // crée une classe personnalisée
                        )
                    ); ?>
                
                </div>
            
            </nav>
        
        </header>

