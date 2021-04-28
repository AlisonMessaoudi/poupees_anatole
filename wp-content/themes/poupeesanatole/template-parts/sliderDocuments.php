<!-- SLIDER DOCUMENT -->

<?php    

    /* Récupération des données */
    $args = array(
        'numberposts'   =>  -1,
        'post_type'     =>  'document',
        'post_status'   =>  'publish',
        'order' => 'ASC'
    ); 

    $documents = get_posts($args);
    /* Affichage des données */
    foreach ($documents as $document) {
        $metabox = get_post_meta($document->ID, 'metabox_document', true);

?>

<div class="document">

    <a href="<?= get_post_permalink($document->ID)?>">
        <img src="<?= get_the_post_thumbnail_url($document->ID);?>" alt=""/>
    </a>

    <div class="document__txt">
        
        <div class="txt">
            <h4><?= $metabox['titre']; ?></h4>
            <p><?= $metabox['annee']; ?></p>
        </div>

        <!-- BOUTON LIRE -->
        <div class="more__round">

            <a href="<?= get_post_permalink($document->ID)?>"><ion-icon name="book-outline"></ion-icon></a>

        </div>

    </div>

</div>

<?php 
} 
?>