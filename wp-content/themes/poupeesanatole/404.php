<?php 
/*
  Template Name: 404
*/

get_header();

?>

<!-- FEUILLE DE STYLE : assets/sass/pages/_404.scss -->

<!-- PAGE 404 -->
<main class="container page__404">

    <!-- IMAGE 404 -->
    <div class="img__404">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/404.png" alt="Image des poupées pour la page 404 du site internet des Poupées Anatoles"/>
    </div>

    <!-- TEXTE 404 -->
    <div class="txt__404">
        <!-- TITRE -->
        <h2>404 - Page non trouvée</h2>
        <!-- SOUS TITRE -->
        <h4>Oups, la page demandée n'existe pas.</h4>
    </div>

    <!-- BOUTON REDIRECTION -->
    <div class="btn_redirection">
        <button>
            <a href="<?= home_url('/'); ?>">Retour à l'accueil&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
        </button>
    </div>

</main>

<?php get_footer(); ?>