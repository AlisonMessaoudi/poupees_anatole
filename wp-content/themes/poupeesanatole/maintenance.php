<?php 
/*
  Template Name: Maintenance
*/

get_header();

?>

<!-- FEUILLE DE STYLE : assets/sass/pages/_maintenance.scss -->

<!-- PAGE MAINTENANCE -->
<main class="container-fluid page__maintenance">

    <!-- FORME IMAGE RIGHT -->
    <img class="forme forme__img__right" src="<?= get_template_directory_uri(); ?>/assets/images/03_formes/forme_02maintenance.png" alt="Forme jaune - illustration Poupées Anatoles"/>
    <!-- FORME IMAGE RIGHT 2 -->
    <img class="forme forme__img__right2" src="<?= get_template_directory_uri(); ?>/assets/images/03_formes/forme_03maintenance.png" alt="Forme brune - illustration Poupées Anatoles"/>
    <!-- FORME IMAGE RIGHT 3 -->
    <img class="forme forme__img__right3" src="<?= get_template_directory_uri(); ?>/assets/images/03_formes/forme_01maintenance.png" alt="Forme orange - illustration Poupées Anatoles"/>
    <!-- FORME IMAGE LEFT 2 -->
    <img class="forme forme__img__left" src="<?= get_template_directory_uri(); ?>/assets/images/03_formes/forme_04.png" alt="Forme jaune - illustration Poupées Anatoles"/>
    <!-- Forme image left 3 -->
    <img class="forme forme__img__left2" src="<?= get_template_directory_uri(); ?>/assets/images/03_formes/forme_07.png" alt="Forme jaune - illustration Poupées Anatoles"/>
    <!-- Forme image left 4 -->
    <img class="forme forme__img__left3" src="<?= get_template_directory_uri(); ?>/assets/images/03_formes/forme_08.png" alt="Forme jaune - illustration Poupées Anatoles"/>

    <!-- CONTAINER MAINTENANCE -->
    <div class="container__maintenance">
        
        <!-- BLOC MAINTENANCE -->
        <div class="bloc__maintenance">

            <!-- LOGO POUPEES ANATOLES -->
            <div class="logo__poupees">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/01_logo/logo_poupees_anatoles.png" alt="Logo du projet les Poupées Anatoles"/>
            </div>

            <!-- TEXTE MAINTENANCE -->
            <div class="txt__maintenance">
                <h2>Site en cours de maintenance</h2>
            </div>

            <!-- BOUTON REDIRECTION -->
            <div class="btn_redirection">
                <button>
                    <a href="http://thomashuard.com/projets/anatoles/">Découvrir le projet&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                </button>
            </div>
        </div>

        <!-- MENTIONS -->
        <div class="mentions_maintenance">
            <p>Site conçu par Thomas Huard & réalisé par Alison Messaoudi <br/>
            2020 - Tous droits réservés</p>
        </div>
    </div>

</main>