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

            <h2 class="appear">Le Projet</h2>

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
                    
                    <h2 class="appear" data-delai="0">Les Poupées</h2>

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
        <div class="row mr-0 ml-0 collaborateurs__titre">
                
            <h2 class="appear">Collaborateurs</h2>
            
            <div class="btn_redirection">
            
                <button>
                    <a href="<?php echo home_url('/collaborateurs'); ?>">Les découvrir&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                </button>
            
            </div>
        
        </div>

        <!-- LISTE DES COLLABORATEURS -->
        <div id="slider__collaborateurs" class="slider__wrapper liste__collaborateurs owl-carousel">

            <?php get_template_part('/template-parts/sliderCollaborateurs'); ?>
            
        </div>

    </section>

    <!-- SECTION 4 : DOCUMENTS -->
    <section class="container documents">

        <!-- TITRE DOCUMENTS -->
        <div class="titre_documents">
        
            <h2 class="appear" data-delai="0">Les documents pour aller plus loin</h2>
        
        </div>

        <!-- LISTE DES DOCUMENTS -->
        <div class="liste__documents owl-carousel slider_wrapper">

            <?php get_template_part('/template-parts/sliderDocuments'); ?>

        </div>

    </section>

</main>

<?php get_footer() ?>