<?php 

class DocumentMetaBox {

    public static function register() {
        /* Création des meta-boxes pour le CPT Documents */
        add_action('add_meta_boxes', [self::class, 'add']);
        /* Sauvegarde des metaboxes */
        add_action('save_post', [self::class, 'save']);
    }

    public static function add() {
        /* Ajout des metabox à l'interface WordPress et définition de son placement */
        add_meta_box('metabox_document', 'Contenu page document', [self::class, 'render'], 'document', 'normal', 'high');
    }

    public static function render($post) {
        // /* Initialisation des variables pour la récupération des données */
        $metabox = get_post_meta($post->ID, 'metabox_document', true);

        $titre = '';
        $auteur = '';
        $annee = '';
        $resume = '';
        $lien = '';

        if(!empty($metabox)) {

        $titre = $metabox['titre'];
        $auteur = $metabox['auteur'];
        $annee = $metabox['annee'];
        $resume = $metabox['resume'];
        $lien = $metabox['lien'];

        }

        ?>

        <div class="metabox_document">

            <!-- Titre -->
            <label for="metabox_titredocument">Titre du document</label>
            <input type="text" name="metabox_titredocument" value="<?=$titre;?>" placeholder="Saisissez le titre du document"/>
            
            <!-- Auteur -->
            <label for="metabox_auteurdocument">Auteur du document</label>
            <input type="text" name="metabox_auteurdocument" value="<?= $auteur;?>" placeholder="Saisissez l'auteur du document"/>

            <!-- Année -->
            <label for="metabox_anneedocument">Année</label>
            <input type="text" name="metabox_anneedocument" value="<?= $annee;?>" placeholder="Saisissez l'année du document"/>

            <!-- Résumé -->
            <label for="metabox_resumedocument">Résumé</label>
            <textarea name="metabox_resumedocument" id="metabox_resumedocument" cols="30" rows="10"><?= $resume;?></textarea>

            <!-- Lien -->
            <label for="metabox_liendocument">Lien du document</label>
            <input type="text" name="metabox_liendocument" value="<?= $lien;?>" placeholder="Saisissez le lien du document"/>

        </div>

        <!-- Style du formulaire -->
        <style>
            .metabox_document {
                display: flex;
                flex-direction: column;
            }
            .metabox_document label {
                font-size: 25px;
                text-transform: uppercase;
                padding: 1rem 0;
            }
        </style>
        
        <?php
    } 
    
    public static function save($post_id){
        
        if (!empty($_POST)) {

            /* Initialisation de la variable document */
            $document = array(
                /* Qui contient les valeurs des metaboxes */
                'titre' => esc_html($_POST['metabox_titredocument']),
                'auteur' => esc_html($_POST['metabox_auteurdocument']),
                'annee' => esc_html($_POST['metabox_anneedocument']),
                'resume' => esc_html($_POST['metabox_resumedocument']),
                'lien' => esc_html($_POST['metabox_liendocument']),
            );
            
            /*  Mise à jour des données */
            update_post_meta($post_id, 'metabox_document', $document);
        }
    
    }
}
?>