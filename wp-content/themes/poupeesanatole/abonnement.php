<?php 
/*
  Template Name: Abonnement
*/

get_header();

?>

<!-- FEUILLE DE STYLE : assets/sass/pages/_abonnement.scss -->
<!-- URL DE LA PAGE : poupees-anatoles.fr/merci -->

<!-- PAGE ABONNEMENT -->
<main class="container page__abonnement">

    <!-- IMAGE ABONNEMENT -->
    <div class="img__abonnement">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/abonnement_forme.png" alt="Image des poupées pour la page d'abonnement du site internet des Poupées Anatoles"/>
    </div>

    <!-- TEXTE ABONNEMENT -->
    <div class="txt__abonnement">
        <!-- TITRE -->
        <h2>Merci pour l'abonnement</h2>
        <!-- SOUS-TITRE -->
        <h4>S’abonner à la newsletter et partager ce projet est pour nous  synonyme de soutien de votre part. Merci de tout coeur !</h4>
    </div>

    <!-- BOUTON REDIRECTION -->
    <div class="btn__redirection">
        <button>
            <a href="<?= home_url('/'); ?>">Retour à l'accueil&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
        </button>
    </div>

</main>

<?php get_footer(); ?>