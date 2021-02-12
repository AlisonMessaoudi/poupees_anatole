        <!-- FOOTER -->
        <footer class="site__footer">

            <!-- SECTION 1 : CONTACTEZ-NOUS -->
            <section class="contact">

                <div>

                    <p>Une question, un avis, une commande ?</p> <!-- balise p ou h5 ? -->

                    <button>
    
                        <a href="<?php echo home_url('/contact'); ?>">Contactez-nous <i class="fas fa-chevron-right"></i></a> <!-- icône favicon ou '>' -->
    
                    </button>


                </div>

            </section>

            <!-- SECTION 2 : NEWSLETTER -->
            <section class="newsletter">

                <!-- FORMULAIRE NEWSLETTER -->
                <div class="form_news">

                    <form action="" method="POST">
                        
                        <!-- Texte -->
                        <label for="newsletter">Abonnez-vous à notre Newsletter</label>
                        <!-- Adresse mail -->
                        <input type="email" class="newsletter" name="newsletter" placeholder="Adresse mail"/>
                        <!-- Bouton envoyé -->
                        <input type="submit" class="btn_envoyer" value="Envoyer"/>

                    </form>

                </div>

                <!-- LIGNE -->
                <div>
                    <hr>
                </div>

                <!-- MENTIONS -->
                <div class="mentions">

                    <div>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05_logoPartenaires/logo_thomasHuard.png" alt="Logo de Thomas Huard - Designer et concepteur d'outils pédagogique"/>
                    
                    </div>
                    
                    <div>
                    
                        <p>Site conçu par Thomas Huard & réalisé par Alison Messaoudi <br/>
                        2020 - Tous droits réservés</p>
                    
                    </div>

                </div>


            </section>

            <section class="mentions_politique">

                <?php wp_nav_menu( 
                    array(
                        'theme_location' => 'footer',
                        'container' => 'ul', // évite d'avoir une div autour du menu
                        'menu_class' => 'site__footer__menu', // crée une classe personnalisée
                    )
                ); ?>

            </section>
            
        </footer>
        
        <?php wp_footer() ?>
    
    </body>

</html>