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

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

        <!-- STYLE CSS -->
            
            <!-- MON CSS | STYLES -->
            <link rel="stylesheet" href="style.css"/>

            <!-- MON CSS | FONTS -->
            <link rel="stylesheet" href="assets/css/fonts/fonts.css" type="text/css" />

            <!-- MON CSS | HEADER -->
            <!--<link rel="stylesheet" href="css/base/header.css" />-->

            <!-- MON CSS | ACCUEIL -->
            <!--<link rel="stylesheet" href="css/accueil.css" />-->

            <!-- MON CSS | PROJET -->
            <!--<link rel="stylesheet" href="css/projet/projet.css" />-->

            <!-- MON CSS | DOCUMENT -->
            <!--<link rel="stylesheet" href="css/projet/document.css" />-->

            <!-- MON CSS | PARTENAIRE -->
            <!--<link rel="stylesheet" href="css/partenaire.css" />-->

            <!-- MON CSS | FOOTER -->
            <!--<link rel="stylesheet" href="css/base/footer.css" />-->

            <!-- MON CSS | POP UP -->
            <!--<link rel="stylesheet" href="css/base/popup_connexion.css" />-->
            
            <!-- MON CSS | CONTACT -->
            <!--<link rel="stylesheet" href="css/contact.css" />-->

            <?php wp_head() ?>

    </head>

    <body>

        <!-- HEADER -->
        <header class="container-fluid">
            
            <nav class="navbar mt-3 navbar-expand-lg shift">

                <a class="navbar-brand" href="#">
                    <img src="" alt="Les poupées anatoles"/> <!-- image ou texte ? -->
                </a>
            
                <!-- MENU BURGER -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                
                </button>
            
                <!-- MENU DESKTOP et MOBILE DEPLOYÉ -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
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