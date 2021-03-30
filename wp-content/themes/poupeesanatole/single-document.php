<?php 

get_header();

?>

<main class="container site__document">

    <div class="row document__titre">

        <h2>Documents pour aller plus loin</h2>

        <div class="row document__navigation">

            <div class="nav">
                <?php previous_post_link('<i class="fa fa-chevron-left"></i>');?>
            </div>
            
            <div class="nav">
                <?php next_post_link('<i class="fa fa-chevron-right"></i>');?>
            </div>

        </div>

    </div>

    <div class="document__description">
        
        <?php while (have_posts()) : the_post(); ?>

        <div class="col-lg-4 bloc__img">
        
            <img src="<?php the_post_thumbnail_url();?>" alt=""/>
        
        </div>

        <div class="col-lg-8 bloc__txt">

            <p class="document">Document 1</p>

            <h2><?= get_post_meta(get_the_ID(), 'metabox_document', true) ['titre']; ?></h2>

            <p class="date"><span class="auteur"><?= get_post_meta(get_the_ID(), 'metabox_document', true) ['auteur']; ?></span>, <?= get_post_meta(get_the_ID(), 'metabox_document', true) ['annee']; ?></p>

            <p class="resume">Résumé</p>

            <p class="description"><?= get_post_meta(get_the_ID(), 'metabox_document', true) ['resume']; ?></p>

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