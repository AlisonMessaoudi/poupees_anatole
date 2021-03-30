<?php 
/*
  Template Name: Contact
*/

get_header();

?>

<!-- SECTION 0 : PAGE CONTACT -->
<main class="container site__page__contact">

    <!-- FORMULAIRE NEWSLETTER -->
    <div class="site__news">

        <!-- Texte -->
        <h2>Abonnez-vous à notre Newsletter</h2>

        <!-- Formulaire -->
        <?= do_shortcode( '[mailjet_subscribe widget_id="19"]' ); ?>

    </div>

    <!-- Ligne -->
    <div class="ligne">
        <hr/>
    </div>

    <!-- CONTACT -->
    <div class="site__contact">

        <!-- TITRE -->
        <h2>Contactez-nous</h2>

        <div class="row pt-3">

            <!-- BLOC IMAGE -->
            <div class="col-lg-4 bloc__image">
                
                <img src="<?= get_template_directory_uri(); ?>/assets/images/07_images/contact.png" alt="Ensemble de poupées - Projet les Poupées Anatoles"/>
            
            </div>

            <!-- BLOC TEXTE ET FORMULAIRE -->
            <div class="col-lg-6 pr-0 bloc__texte__form">

                <!-- Sous-titre -->
                <h5>Une Question ? Une envie ? Une rencontre ?</h5>

                <!-- Formulaire -->
                <?= do_shortcode( '[contact-form-7 id="5" title="Contact"]' ); ?>

            </div>

        </div>

    </div>

</main>

<?php get_footer('footer_entier.php') ?>