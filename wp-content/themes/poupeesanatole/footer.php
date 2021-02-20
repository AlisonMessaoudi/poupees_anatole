        <!-- FOOTER -->
        <footer class="site__footer">

            <!-- SECTION 1 : CONTACTEZ-NOUS -->
            <section class="container-fluid contact">

                <div class="bloc__contact">

                    <!-- Forme Left -->
                    <div class="forme__left">
                    
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_02.png" alt="Forme jaune - illustration Poupées Anatoles"/>
                    
                    </div>

                    <!-- Forme Right -->
                    <div class="forme__right">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_06.png" alt="Forme orange - illustration Poupées Anatoles"/>
                    
                    </div>

                    <p>Une question, un avis, une commande ?</p> 

                    <button>
    
                        <a href="<?php echo home_url('/contact'); ?>">Contactez-nous&nbsp; &nbsp;<i class="fa fa-chevron-right"></i></a>
    
                    </button>

                </div>

            </section>

            <!-- SECTION 2 : NEWSLETTER -->
            <section class="container-fluid newsletter">

                <!-- FORMULAIRE NEWSLETTER -->
                <div class="form__news">

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

                <!-- LIGNE -->
                <div class="newsletter__ligne">
                    <hr>
                </div>

                <!-- MENTIONS -->
                <div class="mentions">

                    <div>

                        <a href="www.thomashuard.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/05_logoPartenaires/logo_thomasHuard.png" alt="Logo de Thomas Huard - Designer et concepteur d'outils pédagogique"/></a>
                    
                    </div>
                    
                    <div>
                    
                        <p>Site conçu par Thomas Huard & réalisé par Alison Messaoudi <br/>
                        2020 - Tous droits réservés</p>
                    
                    </div>

                </div>

                <div class="mentions__politique">

                    <?php wp_nav_menu( 
                        array(
                            'theme_location' => 'footer',
                            'container' => 'ul', // évite d'avoir une div autour du menu
                            'menu_class' => 'site__footer__menu', // crée une classe personnalisée
                        )
                    ); ?>

                </div>

            </section>

        </footer>
        
        <?php wp_footer() ?>

    </body>

</html>