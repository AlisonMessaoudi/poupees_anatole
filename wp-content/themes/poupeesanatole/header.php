<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- RÉFÉRENCEMENT - SEO -->
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <!-- FAVICON -->
        <link rel="icon" type="image/png" href="#"/>

        <!-- FONTAWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

        <!-- ANIMATE CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        
        <?php wp_head() ?>

    </head>

    <body <?php body_class()  ?>>

        <!-- HEADER -->
        <header class="container-fluid">
            
            <nav class="navbar mt-3 navbar-expand-lg shift">

                <a class="navbar-brand" href="#">
                    <img src="" alt="Les poupées anatoles"> <!-- image ou texte ? -->
                </a>
            
                <!-- MENU BURGER -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                
                </button>
            
                <!-- MENU DESKTOP et MOBILE DEPLOYÉ -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php wp_nav_menu() ?>
                    <!-- 
                    <ul class="navbar-nav menu">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projet</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Partenaires</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    
                    </ul>
                    -->
                </div>

                <!-- MON COMPTE / CONNEXION / DECONNEXION -->
                <div>

                    <ul class="navbar-nav mr-auto">

                        <!-- if user is connected -->
                        <li class="nav-item">
                            <a class="nav-link btn_moncompte" href="#">Mon compte</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link btn_deconnexion" href="#">Déconnexion</a>
                        </li> 

                        <!-- else -->
                        <li class="nav-item">
                            <a data-toggle="modal" data-target="#loginModal" class="nav-link btn_connexion" href="#">Connexion</a>
                        </li>

                    </ul>
            
                </div>
            
            </nav>

        </header>

    

