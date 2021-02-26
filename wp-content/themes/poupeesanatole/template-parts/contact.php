<?php 
/*
  Template Name: Contact
*/

get_header();

?>

<main class="container site__page__contact">

    <!-- FORMULAIRE NEWSLETTER -->
    <div class="site__news">

        <form action="" method="POST">
            
            <!-- Texte -->
            <h2>Abonnez-vous à notre Newsletter</h2>

            <div class="row m-0 form__news__input">
                <!-- Adresse mail -->
                <input type="email" id="newsletter" class="col-lg-8 newsletter__input" name="newsletter" placeholder="Adresse mail"/>
                <!-- Bouton envoyé -->
                <input type="submit"class="btn_envoyer" value="Envoyer"/>
            </div>

        </form>

    </div>

    <div class="ligne">
        <hr/>
    </div>

    <div class="site__contact">

                
        <h2>Contactez-nous</h2>

        <div class="row pt-3">

            <div class="col-lg-4">
                
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/contact.png" alt="Ensemble de poupées - Projet les Poupées Anatoles"/>
            
            </div>

            <div class="col-lg-6 pr-0">

            <h5>Une Question ? Une envie ? Une rencontre ?</h5>

            <form action="" method="POST">

                <input type="name" id="name" class="name__input" name="name" placeholder="Nom & Prénom"/>

                <input type="email" id="email" class="email__input" name="email" placeholder="Adresse mail"/>

                <textarea id="message" class="message__input" name="message" rows="8">Message</textarea>

                <!-- Bouton envoyé -->
                <input type="submit" class="btn_envoyer" value="Envoyer"/>

            </form>

        </div>

        </div>

    </div>

</main>

<?php get_footer() ?>