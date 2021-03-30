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

    <a href="#">
        <img src="<?= get_the_post_thumbnail_url($document->ID);?>" alt=""/>
    </a>

    <div class="document__txt">
        
        <h4><?= $metabox['titre']; ?></h4>

        <p><?= $metabox['resume']; ?></p>

    </div>

</div>

<?php 
} 
?>