<?php 

get_header();

?>
<!-- FEUILLE DE STYLE : assets/sass/pages/_repository.scss -->

<!-- PAGE DOCUMENT -->
<main class="container site__document">

    <!-- TITRE DOCUMENT -->
    <div class="row document__titre">

        <!-- TITRE -->
        <h2>Documents pour aller plus loin</h2>

        <!-- NAVIGATION DOCUMENT -->
        <div class="row document__navigation">
            
            <!-- PRECEDENT -->
            <?php previous_post_link('%link', '<i class="fa fa-chevron-left"></i>');?>
           
            <!-- SUIVANT -->
            <?php next_post_link('%link', '<i class="fa fa-chevron-right"></i>');?>

        </div>

    </div>

    <!-- DESCRIPTION DOCUMENT -->
    <div class="document__description">
        
        <!-- POUR CHAQUE POST AFFICHE : -->
        <?php while (have_posts()) : the_post(); ?>

        <!-- IMAGE DU DOCUMENT -->
        <div class="col-lg-4 document__img">
            <img src="<?php the_post_thumbnail_url();?>" alt=""/>
        </div>

        <!-- TEXTE DU DOCUMENT -->
        <div class="col-lg-8 document__txt">

            <!-- NUMERO DU DOCUMENT -->
            <p class="numero__document">Document <?= get_post_meta(get_the_ID(), 'metabox_document', true) ['numero']; ?></p>

            <!-- TITRE DU DOCUMENT -->
            <h2><?= get_post_meta(get_the_ID(), 'metabox_document', true) ['titre']; ?></h2>

            <!-- DATE ET AUTEUR -->
            <p class="date"><span class="auteur"><?= get_post_meta(get_the_ID(), 'metabox_document', true) ['auteur']; ?></span>, <?= get_post_meta(get_the_ID(), 'metabox_document', true) ['annee']; ?></p>

            <!-- RÉSUMÉ -->
            <p class="resume">Résumé</p>

            <!-- DESCRIPTION -->
            <p class="description"><?= get_post_meta(get_the_ID(), 'metabox_document', true) ['resume']; ?></p>

            <!-- BOUTON DE REDIRECTION -->
            <div class="btn_redirection">
                <button>
                    <a href="<?= get_post_meta(get_the_ID(), 'metabox_document', true) ['lien']; ?>">Lire le document</a>
                </button>
            </div>

        </div>

        <?php endwhile; ?>

    </div>

</main>

<?php get_footer() ?>