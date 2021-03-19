<?php 
/*
  Template Name: Projet
*/

get_header();

?>

<!-- MAIN -->
<main class="container-fluid p-0 site__project">

    <!-- SECTION 1 : LE PROJET -->
    <section class="container row project__intro">

        <!-- BLOC TEXTE -->
        <div class="col-lg-7 project__bloc__txt">

            <h2>Le Projet</h2>

            <p>Le projet des Poupées Anatoles consiste à mettre à disposition des institutions et des professionnels accompagnant les personnes en situation de handicap un outil qui permet d'<span>aborder de façon respectueuse et adaptée le corps et les rapports amoureux.</span></p>

            <p>Les poupées anatoles sont un ensemble de poupées de chiffon didactiques <span>que l'on peut déshabiller, dont on peut comprendre l'anatomie, que l'on peut mouvoir dans l'espace et qui rendent factuels les discours autour de la sexualité.</span></p>

        </div>

        <!-- BLOC IMAGE -->
        <div class="col-lg-5 project__bloc__img">

            <!-- Intro_img -->
            <img class="forme__img__center" src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/intro_img.png" alt="Image d'introduction - les Poupées Anatoles"/>
            
        </div>

    </section>

    <!-- SECTION 2 : LES POUPEES -->
    <section class="container-fluid project__presentation">
        
        <!-- BLOC FORMES -->
        <div class="project__presentation__formes">

            <!-- Forme Left -->
            <div class="forme__left">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_01_blanche.png" alt="Forme blanche - illustration Poupées Anatoles"/>
            
            </div>

            <!-- Forme Right -->
            <div class="forme__right">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_formes/forme_02_blanche.png" alt="Forme blanche - illustration Poupées Anatoles"/>
            
            </div>

            <!-- ILLUSTRATION 1 -->
            <div class="row project__presentation__illustration">

                <!-- BLOC IMAGE -->
                <div class="col-lg-6 illustration__img__left">
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/poupees_presentation02.png" alt="Une représentation des diversités - Thomas Huard les Poupées Anatoles"/>
                
                </div>
                
                <!-- BLOC TEXTE -->
                <div class="col-lg-6 illustration__txt__left">
                    
                    <h2>Les Poupées</h2>

                    <p><span>Ces poupées sont inclusives.</span> Les différentes morphologies, âges, et origines sont représentées par chacune d'entre elles. Également, nous avons voulu représenter des éléments trop peu visibles sur les représentations habituelles des femmes et des hommes. Ici, nous pouvons parler de poils, de hanches épaisses et de seins tombants, de vulves et de pénis...</p>
                
                </div>

            </div>


            <!-- ILLUSTRATION 2 -->
            <div class="row project__presentation__illustration">

                <!-- BLOC TEXTE -->
                <div class="col-lg-6 illustration__txt__right">

                    <p>La particularité de ces poupées repose également sur la possibilité qu'elles ont de <span>modifier leurs émotions.</span> Grâce à un système de modification de leur expression faciale, il est alors possible de parler de choses incontournables lorsqu'il s'agit de sexualité: les sentiments, le consentement, le plaisir etc...</p>
                
                </div>

                <!-- BLOC IMAGE -->
                <div class="col-lg-6 illustration__img__right">
                
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_images/poupees_presentation.png" alt="Poupées émotives - Thomas Huard les Poupées Anatoles"/>
                
                </div>

            </div>

        </div>

    </section>

    <!-- SECTION 3 : COLLABORATEURS -->
    <section class="container collaborateurs">

        <!-- TITRE : LES COLLABORATEURS -->
        <div class="row collaborateurs__titre">
                
            <h2>Collaborateurs</h2>
            
            <button>
                <a href="<?php echo home_url('/collaborateurs'); ?>">Les découvrir&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
            </button>
        
        </div>

        <!-- LISTE DES COLLABORATEURS -->
        <div id="slider__collaborateurs" class="slider__wrapper liste__collaborateurs owl-carousel">

            <!-- COLLABORATEUR 1 -->
            <div class="collaborateur">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_thomasHuard.png" alt="Portrait de Thomas Huard - Porteur du projet les Poupées Anatoles"/>

                <h4>Porteur de projet</h4>

                <p>Thomas Huard

                <br/>
                <br/>
                
                <span>Designer, Créateur d'outils pédagogique</span>
            
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

    <!-- SECTION 4 : DOCUMENTS -->
    <section class="container documents">

        <!-- TITRE DOCUMENTS -->
        <div class="titre_documents">
            <h2>Les documents pour aller plus loin</h2>
        </div>

        <!-- LISTE DES DOCUMENTS -->
        <div class="liste__documents">

            <!-- DOCUMENT 1 -->
            <div class="document">

                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/08_documents/document_01.png" alt="Dossier de création - Projet les Poupées Anatoles"/></a>

                <div class="document__txt">
                
                    <h4>Dossier de Création</h4>

                    <p>Thomas Huard<br/>2020</p>
                
                </div>

            </div>

            <!-- DOCUMENT 2 -->
            <div class="document">

                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/08_documents/document_02.png" alt="Retour d'expérimentations - Projet les Poupées Anatoles"/></a>

                <div class="document__txt">
                    
                    <h4>Retour <br/> d'expérimentations</h4>

                    <p>2021</p>
                
                </div>  

            </div>

            <!-- DOCUMENT 3 -->
            <div class="document">

                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/08_documents/document_03.png" alt="Ressources - Projet les Poupées Anatoles"/></a>

                <div class="document__txt">
                    
                    <h4>Ressources</h4>

                    <p></p>
                
                </div>

            </div>

        </div>

    </section>

</main>

<?php get_footer() ?>