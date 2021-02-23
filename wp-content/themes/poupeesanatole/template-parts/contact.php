<?php 
/*
  Template Name: Contact
*/

get_header();

?>

<main class="container site__contact">

    <!-- FORMULAIRE NEWSLETTER -->
    <div class="site__news">

        <form action="" method="POST">
            
            <!-- Texte -->
            <label for="newsletter">Abonnez-vous à notre Newsletter</label>

            <div class="form__news__input">
                <!-- Adresse mail -->
                <input type="email" id="newsletter" class="newsletter__input" name="newsletter" placeholder="Adresse mail"/>
                <!-- Bouton envoyé -->
                <input type="submit"class="btn_envoyer" value="Envoyer"/>
            </div>

        </form>

    </div>

    <div class="site__contact">

        <h2>Contactez-nous</h2>

        <div class="col-lg-4">
            
            <img src="" alt="">
        
        </div>

        <div class="col-lg-8">

            <h3>Une Question ? Une envie ? Une rencontre ?</h3>

            <form action="" method="POST">

                <input type="name" id="name" class="name__input" name="name" placeholder="Nom & Prénom"/>

                <input type="email" id="email" class="email__input" name="email" placeholder="Adresse mail"/>

                <input type="textarea" id="message" class="message__input" name="message" placeholder="Message"/>

                <!-- Bouton envoyé -->
                <input type="submit"class="btn_envoyer" value="Envoyer"/>

            </form>

        </div>

    </div>

</main>

<?php get_footer() ?>