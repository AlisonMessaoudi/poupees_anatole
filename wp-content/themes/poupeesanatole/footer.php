        <!-- FOOTER : SANS PARTIE CONTACT -->
        <footer class="site__footer">

            <!-- SECTION : NEWSLETTER -->
            <section class="container-fluid newsletter">

                <!-- FORMULAIRE NEWSLETTER -->
                <div class="form__news">

                    <!-- LABEL NEWSLETTER -->
                    <label for="newsletter">Abonnez-vous à notre Newsletter</label>
                    
                    <!-- FORMULAIRE MAILJET -->
                    <?= do_shortcode( '[mailjet_subscribe widget_id="19"]' ); ?>

                </div>

                <!-- MENTIONS -->
                <div class="mentions">

                    <!-- LOGO THOMAS HUARD -->
                    <div>
                        <a href="https://thomashuard.com" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/images/05_logoPartenaires/logo_thomasHuard.png" alt="Logo de Thomas Huard - Designer et concepteur d'outils pédagogique"/></a>
                    </div>
                    
                    <!-- CONCEPTION, REALISATION ET DROIT -->
                    <div>
                        <p>Site conçu par Thomas Huard & réalisé par Alison Messaoudi <br/>
                        2020 - Tous droits réservés</p>
                    </div>

                </div>

                <!-- MENTIONS LÉGALE ET POLITIQUE DE CONFIDENTIALITÉ -->
                <div class="mentions__politique">

                    <!-- APPEL DU MENU : FOOTER -->
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