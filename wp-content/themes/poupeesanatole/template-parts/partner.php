<?php 
/*
  Template Name: Collaborateurs
*/

get_header();

?>

<!-- SECTION 0 : PRESENTATION COLLABORATEURS -->
<main class="container site__partner">

    <!-- TITRE : LES COLLABORATEURS -->
    <div class="row collaborateurs__titre">
                
        <h2>Les Collaborateurs</h2>
    
    </div>

    <?php 
     
        $args = array(
            'numberposts'   =>  -1,
            'post_type'     =>  'Collaborateur',
            'post_status'   =>  'publish',
            'order' => 'ASC'
        ); 
        
        $collaborateurs = get_posts($args);
        foreach ($collaborateurs as $collaborateur) {
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
            
            <h4><?= $metabox['typecollaborateur']; ?></h4>

            <p><?= $metabox['nomcollaborateur']; ?>

                <br/>

                <span><?= $metabox['specialitecollaborateur']; ?></span>

            </p>

            <?php if(!empty($metabox['presentationcollaborateur']) || !empty($metabox['sitecollaborateur']) || !empty($metabox['emailcollaborateur'])) { ?>

            <!-- EN SAVOIR PLUS -->
            

                <!-- CONTENU EN SAVOIR PLUS -->
                <div id="<?= $metabox['idcollaborateur']; ?>" class="more__collaborateur" style="display:none">

                    <p><?= $metabox['presentationcollaborateur']; ?></p>

                    <?php if (!empty($metabox['sitecollaborateur'])){ ?>
                    
                    <p>Site Web: <a href="<?= $metabox['sitecollaborateur']; ?>"><?= $metabox['sitecollaborateur']; ?></a>
                    
                    <?php
                    }
                    ?>

                    <br/>
                    
                    <?php if (!empty($metabox['emailcollaborateur'])){ ?>
                    
                    Contact: <a href="mailto:<?= $metabox['emailcollaborateur']; ?>"><?= $metabox['emailcollaborateur']; ?></a></p>

                    <?php
                    }
                    ?>
                
                </div>

                <input type="button" id="more" class="more" value="En savoir +" onclick="cache_affiche('<?= $metabox['idcollaborateur']; ?>', this.id)">

            <?php 
            }
            ?>

        </div>
    
    </div>

    <?php } 
    //endwhile; ?>
   

</main>

<?php get_footer() ?>