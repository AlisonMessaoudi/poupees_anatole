<?php 
/*
  Template Name: Collaborateurs
*/

get_header();

?>

<!-- FEUILLE DE STYLE : assets/sass/pages/_partner.scss -->
<!-- JAVASCRIPT : assets/js/more.js -->

<!-- COLLABORATEURS -->
<main class="container site__collaborateurs">

    <!-- TITRE : LES COLLABORATEURS -->
    <div class="row collaborateurs__titre">
        <h2>Les Collaborateurs</h2>
    </div>

    <?php 
     
        /* TABLEAU DES ARGUMENT DES ELEMENTS COLLABORATEURS */
        $args = array(
            'numberposts'   =>  -1,
            'post_type'     =>  'Collaborateur',
            'post_status'   =>  'publish',
            'order' => 'ASC'
        ); 
        
        /* ON RÉCUPÈRE LES POST DES COLLABORATEURS */
        $collaborateurs = get_posts($args);
        /* ON CRÉE UNE BOUCLE ET ON AFFICHE POUR CHAQUE COLLABORATEUR */
        foreach ($collaborateurs as $collaborateur) {
            /* LES INFORMATIONS DES META-BOXES */
            $metabox = get_post_meta($collaborateur->ID, 'metabox_collaborateur', true);
    ?>

    <!-- COLLABORATEUR -->
    <div id="<?= $metabox['nomcollaborateur']; ?>" class="row collaborateur">

        <!-- BLOC IMAGE -->
        <div class="col-lg-3 collaborateur__img">
            <img src="<?= get_the_post_thumbnail_url($collaborateur->ID);?>" alt=""/>
        </div>

        <!-- BLOC TEXTE -->
        <div class="col-lg-9 collaborateur__txt">
            
            <!-- CONTENU AVANT L'INPUT --> 
            <div class="before__input">
                
                <!-- TYPE -->
                <h4><?= $metabox['typecollaborateur']; ?></h4>

                <!-- NOM -->
                <p><?= $metabox['nomcollaborateur']; ?>

                    <br/>

                    <!-- SPECIALITE -->
                    <span><?= $metabox['specialitecollaborateur']; ?></span>

                </p>
            
            </div>

            <?php 
            
            /* SI LES CHAMPS PRESENTATION, SITE ET EMAIL NE SONT PAS VIDES  */
            if(!empty($metabox['presentationcollaborateur']) || !empty($metabox['sitecollaborateur']) || !empty($metabox['emailcollaborateur'])) { ?>

            <!-- ALORS ON AFFICHE EN SAVOIR PLUS -->
            
                <!-- CONTENU EN SAVOIR PLUS -->
                <div id="<?= $metabox['idcollaborateur']; ?>" class="more__collaborateur" style="display:none">

                    <p><?= $metabox['presentationcollaborateur']; ?></p>

                    <!-- SI LE CHAMPS SITE N'EST PAS VIDE -->
                    <?php if (!empty($metabox['sitecollaborateur'])){ ?>
                    
                    <!-- ON AFFICHE : -->
                    <p class="site">Site Web: <a href="<?= $metabox['sitecollaborateur']; ?>"><?= $metabox['sitecollaborateur']; ?></a></p>
                    
                    <?php
                    }
                    ?>
                    
                    <!-- SI LE CHAMPS SITE N'EST PAS VIDE -->
                    <?php if (!empty($metabox['emailcollaborateur'])){ ?>
                    
                    <!-- ON AFFICHE : -->
                    <p class="contact">Contact: <a href="mailto:<?= $metabox['emailcollaborateur']; ?>"><?= $metabox['emailcollaborateur']; ?></a></p>

                    <?php
                    }
                    ?>
                
                </div>

                <!-- BOUTON EN SAVOIR PLUS / EN SAVOIR MOINS -->
                <input type="button" id="more" class="more" value="En savoir +" onclick="cache_affiche('<?= $metabox['idcollaborateur']; ?>', this.id)">

            <?php 
            }
            ?>

        </div>
    
    </div>

    <?php } ?>
   
    <!-- REMERCIEMENT -->
    <div class="remerciement">
        <h5>Merci également à</h5>
        <p>Solène Dietz, Noémie Hauss, Le Réseau VRAIS</p>
    </div>

</main>

<?php get_footer() ?>