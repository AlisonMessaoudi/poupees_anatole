<!-- SLIDER COLLABORATEUR -->
<?php    

    /* Récupération des données */
    $args = array(
        'numberposts'   =>  -1,
        'post_type'     =>  'Collaborateur',
        'post_status'   =>  'publish',
        'order' => 'ASC'
    ); 

    $collaborateurs = get_posts($args);
    /* Affichage des données */
    foreach ($collaborateurs as $collaborateur) {
        $metabox = get_post_meta($collaborateur->ID, 'metabox_collaborateur', true);

?>

<div class="collaborateur">

    <a href="<?= home_url('/collaborateurs/#'. $metabox['nomcollaborateur']); ?>"><img src="<?= get_the_post_thumbnail_url($collaborateur->ID);?>" alt=""/></a>

    <h4><?= $metabox['typecollaborateur']; ?></h4>

    <p><?= $metabox['nomcollaborateur']; ?>

    <br/>
    <br/>

    <span><?= $metabox['specialitecollaborateur']; ?></span>

    </p>

    <div class="more__round">
    
        <a href="<?= home_url('/collaborateurs/#'. $metabox['nomcollaborateur']); ?>"><i class="fa fa-plus"></i></a>
    
    </div>

</div>

<?php 
} 
?>