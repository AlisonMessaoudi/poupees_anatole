<?php 
/*
  Template Name: Document
*/
?>

<main class="container site__document">

    <div class="row document__titre">

        <h2>Documents pour aller plus loin</h2>

        <div class="document__navigation">

            <div>
                <i class="fa fa-chevron-left"></i>
            </div>

            <div>
                <i class="fa fa-chevron-right"></i>
            </div>

        </div>

    </div>

    <div class="row document__description">

        <div class="col-lg-4">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/08_documents/document_02.png" alt="Dossier de création - Projet les Poupées Anatole"/>
        
        </div>

        <div class="col-lg-8">

            <p>Document 1</p>

            <h2>Dossier de création</h2>

            <p><span>Thomas HUARD</span>, 2020</p>

            <p>Résumé</p>

            <p>Lorem ipsum dolor, <span>sit amet consectetur adipisicing elit.</span> Nesciunt eos voluptatum explicabo deserunt nulla maiores tempora adipisci <span>unde accusantium nihil</span>, dolor provident eveniet quas aut quia consequuntur quasi sint culpa!</p>

            <button>
                <a href="<?php echo home_url('/shop'); ?>">Lire le document</a>
            </button>

        </div>

    </div>


</main>