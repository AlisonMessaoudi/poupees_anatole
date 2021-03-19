<?php 
/*
  Template Name: Document
*/

get_header();

?>

<main class="container site__document">

    <div class="row document__titre">

        <h2>Documents pour aller plus loin</h2>

        <div class="row document__navigation">

            <div class="nav">
                <i class="fa fa-chevron-left"></i>
            </div>

            <div class="nav">
                <i class="fa fa-chevron-right"></i>
            </div>

        </div>

    </div>

    <div class="document__description">

        <div class="col-lg-4 bloc__img">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/08_documents/document_02.png" alt="Dossier de création - Projet les Poupées Anatole"/>
        
        </div>

        <div class="col-lg-8 bloc__txt">

            <p class="document">Document 1</p>

            <h2>Dossier de création</h2>

            <p class="date"><span class="auteur">Thomas HUARD</span>, 2020</p>

            <p class="resume">Résumé</p>

            <p class="description">Lorem ipsum dolor, <span>sit amet consectetur adipisicing elit.</span> Nesciunt eos voluptatum explicabo deserunt nulla maiores tempora adipisci <span>unde accusantium nihil</span>, dolor provident eveniet quas aut quia consequuntur quasi sint culpa!</p>

            <div class="btn_redirection">
                <button>
                    <a href="<?php echo home_url('#'); ?>">Lire le document</a>
                </button>
            </div>

        </div>

    </div>

</main>

<?php get_footer() ?>