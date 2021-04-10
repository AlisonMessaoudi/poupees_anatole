<?php 
/*
  Template Name: Maintenance
*/

get_header();

?>

<main class="container-fluid page__maintenance">

    <!-- Forme image left -->
    <img class="forme forme__img__gauche" src="<?= get_template_directory_uri(); ?>/assets/images/03_formes/forme_01maintenance.png" alt="Forme orange - illustration Poupées Anatoles"/>
    <!-- Forme image center -->
    <img class="forme forme__img__center" src="<?= get_template_directory_uri(); ?>/assets/images/03_formes/forme_02maintenance.png" alt="Forme jaune - illustration Poupées Anatoles"/>
    <!-- Forme image right -->
    <img class="forme forme__img__droite" src="<?= get_template_directory_uri(); ?>/assets/images/03_formes/forme_03maintenance.png" alt="Forme brune - illustration Poupées Anatoles"/>
    <!-- Forme image left 2 -->
    <img class="forme forme__img__gauche2" src="<?= get_template_directory_uri(); ?>/assets/images/03_formes/forme_04.png" alt="Forme jaune - illustration Poupées Anatoles"/>
    <!-- Forme image left 3 -->
    <img class="forme forme__img__gauche3" src="<?= get_template_directory_uri(); ?>/assets/images/03_formes/forme_07.png" alt="Forme jaune - illustration Poupées Anatoles"/>
    <!-- Forme image left 4 -->
    <img class="forme forme__img__gauche4" src="<?= get_template_directory_uri(); ?>/assets/images/03_formes/forme_08.png" alt="Forme jaune - illustration Poupées Anatoles"/>

    <!-- CONTAINER MAINTENANCE -->
    <div class="container__maintenance">
        
        <div class="img__txt__btn">
            <!-- IMAGE -->
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/01_logo/logo_poupees_anatoles.png" alt="Logo du projet les Poupées Anatoles"/>
            </div>

            <!-- TEXTE -->
            <div class="text__maintenance">
                <h2>Site en cours de maintenance</h2>
            </div>

            <!-- BOUTON REDIRECTION -->
            <div class="btn_redirection">
                <button>
                    <a href="http://thomashuard.com/projets/anatoles/">Découvrir le projet&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                </button>
            </div>
        </div>

        <div class="mentions_maintenance">
            <p>Site conçu par Thomas Huard & réalisé par Alison Messaoudi <br/>
            2020 - Tous droits réservés</p>
        </div>
    </div>

</main>