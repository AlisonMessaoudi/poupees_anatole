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
        /* Initialisation des variables pour la récupération des données */
        $titre = get_post_meta($post->ID, 'metabox_titredocument', true);
        $auteur = get_post_meta($post->ID, 'metabox_auteurdocument', true);
        ?>

        <!-- Titre -->
        <label for="metabox_titredocument">Titre du document</label>
        <input type="text" name="metabox_titredocument" value="<?php $titre;?>" placeholder="Saisissez le titre du document"/>
        
        <!-- Auteur -->
        <label for="metabox_auteurdocument">Auteur du document</label>
        <input type="text" name="metabox_auteurdocument" value="<?php $auteur;?>" placeholder="Saisissez l'auteur du document"/>

        <!-- Année -->
        <label for="metabox_anneedocument">Année</label>
        <input type="text" name="metabox_anneedocument" placeholder="Saisissez l'année du document"/>

        <!-- Résumé -->
        <label for="metabox_resumedocument">Résumé</label>
        <textarea name="metabox_resumedocument" id="metabox_resumedocument" cols="30" rows="10"></textarea>

        <!-- Lien -->
        <label for="metabox_liendocument">Lien du document</label>
        <input type="text" name="metabox_liendocument" placeholder="Saisissez le lien du document"/>

        <!-- Style du formulaire -->
        <style>
            .edit-post-meta-boxes-area .postbox>.inside {
                display: flex;
                flex-direction: column;
            }
            .edit-post-meta-boxes-area .postbox>.inside label {
                font-size: 25px;
                text-transform: uppercase;
                padding: 1rem 0;
            }
        </style>
        
        <?php
    } 


    
    public static function save($post_id){

        // if('metabox_document' == $_POST['post_type']){ 
        //     if (!current_user_can('edit_page', $post_ID)){

            // global $post;
            // $post_id = $post-> ID;
            
            /* Initialisation de la variable document */
            $document = array(
                /* Qui contient les valeurs des metaboxes */
                'titre' => esc_html($_POST['metabox_titredocument']),
                'auteur' => esc_html($_POST['metabox_auteurdocument']),
                'annee' => esc_html($_POST['metabox_anneedocument']),
                'resume' => esc_html($_POST['metabox_anneedocument']),
                'lien' => esc_html($_POST['metabox_liendocument']),
            );
            
            /*  Mise à jour des données */
            update_post_meta($post_id, 'metabox_document', $document);
        
        }
    //     }
    // }
}
?>