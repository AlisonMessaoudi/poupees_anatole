<?php 

class CollaborateurMetaBox {

    public static function register() {
        /* Création des meta-boxes pour le CPT Collaborateurs */
        add_action('add_meta_boxes', [self::class, 'add']);
        /* Sauvegarde des metaboxes */
        add_action('save_post', [self::class, 'save']);
    }

    public static function add() {
        /* Ajout des metabox à l'interface WordPress et définition de son placement */
        add_meta_box('metabox_collaborateur', 'Contenu page collaborateur', [self::class, 'render'], 'collaborateur', 'normal', 'high');
    }

    public static function render($post) {
        /* Initialisation des variables pour la récupération des données */
        $typecollaboration = get_post_meta($post->ID, 'metabox_typecollaboration', true);
        $nomcollaborateur = get_post_meta($post->ID, 'metabox_nomcollaborateur', true);
        ?>

        <!-- Type de collaboration -->
        <label for="metabox_typeCollaboration">Type de collaboration</label>
        <input type="text" name="metabox_typeCollaboration" value="<?php $typecollaboration;?>" placeholder="Saisissez le type de collaboration"/>
        
        <!-- Nom du collaborateur -->
        <label for="metabox_nomCollaborateur">Nom du collaborateur</label>
        <input type="text" name="metabox_nomCollaborateur" value="<?php $nomcollaborateur;?>" placeholder="Saisissez le nom du collaborateur"/>

        <!-- Spécialité du collaborateur -->
        <label for="metabox_specialiteCollaborateur">Spécialité du collaborateur</label>
        <input type="text" name="metabox_specialiteCollaborateur" placeholder="Saisissez la spécialité du collaborateur"/>

        <!-- Présentation -->
        <label for="metabox_presentationCollaborateur">Présentation du collaborateur</label>
        <textarea name="metabox_presentationCollaborateur" id="metabox_presentationcollaborateur" cols="30" rows="10"></textarea>

        <!-- Contact mail -->
        <label for="metabox_emailCollaborateur">Contact email</label>
        <input type="email" name="metabox_emailCollaborateur" placeholder="Saisissez le contact mail du collaborateur"/>

        <!-- Site web -->
        <label for="metabox_siteCollaborateur">Site web</label>
        <input type="text" name="metabox_siteCollaborateur" placeholder="Saisissez le site web du collaborateur"/>

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

        // if('metabox_collaborateur' == $_POST['post_type']){ 
        //     if (!current_user_can('edit_page', $post_ID)){

            // global $post;
            // $post_id = $post-> ID;
            
            /* Initialisation de la variable document */
            $collaborateur = array(
                /* Qui contient les valeurs des metaboxes */
                'typeCollaboration' => esc_html($_POST['metabox_typeCollaboration']),
                'nomCollaborateur' => esc_html($_POST['metabox_nomCollaborateur']),
                'presentationCollaborateur' => esc_html($_POST['metabox_presentationCollaborateur']),
                'specialiteCollaborateur' => esc_html($_POST['metabox_specialiteCollaborateur']),
                'siteCollaborateur' => esc_html($_POST['metabox_siteCollaborateur']),
                'emailCollaborateur' => esc_html($_POST['metabox_emailCollaborateur']),
            );
            
            /*  Mise à jour des données */
            update_post_meta($post_id, 'metabox_collaborateur', $collaborateur);
        
        }
    //     }
    // }
}
?>