<?php 
/*
  Template Name: Accueil
*/

get_header();

?>

<!-- MAIN -->
<main class="container-fluid p-0 site__home">
    
    <!-- SECTION 1 : INTRODUCTION -->
    <section class="container-fluid home__intro">

        <div class="row">

            <!-- BLOC IMAGE -->
            <div class="col-lg-6 home__bloc__img">

                <!-- Forme image -->
                <img class="forme__img__gauche" src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/intro_forme_01.png" alt="Forme noire - illustration Poupées Anatoles"/>
                <!-- Intro image -->
                <img class="forme__img__center" src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/intro_img.png" alt="Image d'introduction - les Poupées Anatoles"/>
                <!-- Forme image -->
                <img class="forme__img__droite" src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/intro_forme_02.png" alt="Forme blanche - illustration Poupées Anatoles"/>
            
            </div>

            <!-- BLOC TEXTE -->
            <div class="col-lg-6 home__bloc__txt">

                <h1>Un outil de médiation qui explore les sexualités, les émotions et les corps...</h1>

                <p>Les poupées Anatoles sont un ensemble de poupées de chiffon didactiques que l’on peut déshabiller, dont on peut comprendre l’anatomie, que l’on peut mouvoir dans l’espace et qui rendent factuels les discours autour de la sexualité.</p>

                <!-- BOUTON REDIRECTION -->
                <div class="bloc__btn">

                    <button>

                        <a href="<?php echo home_url('/projet'); ?>">En savoir plus&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>

                    </button>
                
                </div>

            </div>

        </div>

    </section>

    <!-- SECTION 2 : PRESENTATION POUPÉES -->
    <section class="container-fluid poupees__presentation">

        <!-- BLOC FORMES -->
        <div class="poupees__presentation__formes">

            <!-- Forme Left -->
            <div class="forme__left">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_06.png" alt="Forme orange - illustration Poupées Anatoles"/>
            
            </div>

            <!-- Forme Right -->
            <div class="forme__right">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_02.png" alt="Forme jaune - illustration Poupées Anatoles"/>
            
            </div>

            <!-- BLOC ILLUSTRATION 1 -->
            <div class="row poupee__presentation__illustration">

                <!-- ILLUSTRATION RIGHT -->
                <div class="col-lg-6 illustration__img__right">
                
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/poupees_presentation.png" alt="Poupées émotives - Thomas Huard les Poupées Anatoles"/>
                
                </div>

                <!-- TEXTE RIGHT -->
                <div class="col-lg-6 illustration__txt__right">
                    
                    <h3>Des poupées émotives</h3>
                
                </div>

            </div>

            <!-- BLOC ILLUSTRATION 2 -->
            <div class="row poupee__presentation__illustration">
                
                <!-- TEXTE RIGHT -->
                <div class="col-lg-6 illustration__txt__left">
                    
                    <h3>Une représentation <br/> des diversités</h3>
                
                </div>

                <!-- ILLUSTRATION RIGHT -->
                <div class="col-lg-6 illustration__img__left">
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/poupees_presentation02.png" alt="Une représentation des diversités - Thomas Huard les Poupées Anatoles"/>
                
                </div>

            </div>

        </div>

    </section>

    <!-- SECTION 3 : SHOP -->
    <section class="container shop">

        <!-- TITRE ET REDIRECTION -->
        <div class="shop__titre">
            
            <h2>Articles</h2>
            
            <button>
                <a href="<?php echo home_url('/shop'); ?>">Accéder au Shop&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
            </button>
        
        </div>

        <!-- SLIDER SHOP -->
        <div id="slider__shop" class="slider__wrapper owl-carousel">
            <?php while (have_posts()): the_post(); ?>
                <?php get_template_part('/template-parts/sliderShop'); ?>
            <?php endwhile; ?>
        </div>

    </section>

    <!-- SECTION 4 : COLLABORATEURS -->
    <section class="container collaborateurs">

        <!-- TITRE ET REDIRECTION -->
        <div class="collaborateurs__titre">
                
            <h2>Collaborateurs</h2>
            
            <button>
                <a href="<?php echo home_url('/collaborateurs'); ?>">Les découvrir&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
            </button>
        
        </div>

        <!-- LISTE DES COLLABORATEURS -->
        <div id="slider__collaborateurs" class="slider__wrapper liste__collaborateurs owl-carousel">
        
            <?php 
            
            /* */
            $args = array(
                'numberposts' => -1,
                'post_type' => 'collaborateurs',
                'post_status' => 'publish',
            );
            
            /* */
            $services = get_posts($args);
            
            /* Pour chaque collaborateurs */
            foreach ($collaborateurs as $collaborateur) {
            
            ?>
        
            <!-- COLLABORATEUR -->
            <div class="collaborateur">

                <?php the_post_thumbnail();?>

                <h4><?php $collaborateur->post_fonction ?></h4>

                <p><?php $collaborateur->post_name ?>

                <br/>
                <br/>
                
                <span><?php $collaborateur->post_metier ?></span>
            
                </p>

                <div class="more__round">
                    <a href="<?php echo home_url('/collaborateurs/#'.$collaborateur->$id); ?>"><i class="fa fa-plus"></i></a>
                </div>

            </div>

            <?php
            }
            ?>

        </div>

        <div id="slider__collaborateurs" class="slider__wrapper liste__collaborateurs owl-carousel">

            <!-- COLLABORATEUR 1 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_thomasHuard.png" alt="Portrait de Thomas Huard - Porteur du projet les Poupées Anatoles"/>

                <h4>Porteur de projet</h4>

                <p>Thomas Huard

                <br/>
                <br/>
                
                <span>Designer, Créateur d'outils pédagogiques</span>
            
                </p>

                <div class="more__round">
                    <a href="<?php echo home_url('/collaborateurs/#huard'); ?>"><i class="fa fa-plus"></i></a>
                </div>

            </div>

            <!-- COLLABORATEUR 2 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_sheilaWarembourg.png" alt="Portrait de Sheila Warembourg - Collaborateur du projet les Poupées Anatoles"/>

                <h4>Experts</h4>

                <p>Sheila Warembourg
                
                <br/>
                <br/>

                <span>Diplômée en Sexologie <br/> et Santé Publique, <br/>Formatrice sexologue</span>
                
                </p>

                <div class="more__round">
                    <a href="<?php echo home_url('/collaborateurs/#sheila'); ?>"><i class="fa fa-plus"></i></a>
                </div>

            </div>

            <!-- COLLABORATEUR 3 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05_logoPartenaires/logo_libreObjet.png" alt="Logo de Libre Objet - Collaborateur du projet les Poupées Anatoles"/>

                <h4>Fabricant</h4>

                <p>Libre Objet

                <br/>
                <br/>

                <span>Atelier d'insertion</span>
            
                </p>

                <div class="more__round">
                    <a href="<?php echo home_url('/collaborateurs/#libreObjet'); ?>"><i class="fa fa-plus"></i></a>
                </div>

            </div>

            <!-- COLLEBORATEUR 4 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_GeraldineMathieu.png" alt="Portrait de Geraldine Mathieu - Collaborateur du projet les Poupées Anatoles"/>

                <h4>Développement<br/>des Prototypes</h4>

                <p>Géraldine Mathieu
                
                <br/>
                <br/>

                <span>Couturière</span>
            
                </p>

                <div class="more__round">
                    <a href="<?php echo home_url('/collaborateurs/#mathieu'); ?>"><i class="fa fa-plus"></i></a>
                </div>

            </div>

            <!-- COLLABORATEUR 5 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05_logoPartenaires/logo_tango&Scan.png" alt="Logo de Tango&Scan - Financeur du projet les Poupées Anatoles"/>

                <h4>Financeurs</h4>

                <p>Tango&Scan

                <br/>
                <br/>
                
                <span>Appel à projets</span>
                
                </p>

                <div class="more__round">
                    <a href="<?php echo home_url('/collaborateurs/#tango'); ?>"><i class="fa fa-plus"></i></a>
                </div>

            </div>

            <!-- COLLABORATEUR 6 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_MarionHulot.png" alt="Portrait de Geraldine Marion Hulot - Collaborateur du projet les Poupées Anatoles"/>

                <h4>Création des Prototypes</h4>

                <p>Marion Hulot

                <br/>
                <br/>
                
                <span>Couturière</span>
                
                </p>

                <div class="more__round">
                    <a href="<?php echo home_url('/collaborateurs/#hulot'); ?>"><i class="fa fa-plus"></i></a>
                </div>

            </div>

            <!-- COLLABORATEUR 7 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_AlisonMessaoudi.png" alt="Portrait d'Alison Messaoudi - Collaborateur du projet les Poupées Anatoles"/>

                <h4>Développement du site internet</h4>

                <p>Alison Messaoudi

                <br/>
                <br/>
                
                <span>Développeuse web et web-designeuse</span>
                
                </p>

                <div class="more__round">
                    <a href="<?php echo home_url('/collaborateurs/#messaoudi'); ?>"><i class="fa fa-plus"></i></a>
                </div>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>