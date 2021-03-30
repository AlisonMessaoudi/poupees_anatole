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
        $metabox = get_post_meta($post->ID, 'metabox_collaborateur', true);

        $idcollaborateur = '';
        $typecollaborateur = '';
        $nomcollaborateur = '';
        $specialitecollaborateur = '';
        $presentationcollaborateur = '';
        $emailcollaborateur = '';
        $sitecollaborateur = '';

        if(!empty($metabox)) {

            $idcollaborateur = $metabox['idcollaborateur'];
            $typecollaborateur = $metabox['typecollaborateur'];
            $nomcollaborateur = $metabox['nomcollaborateur'];
            $specialitecollaborateur = $metabox['specialitecollaborateur'];
            $presentationcollaborateur = $metabox['presentationcollaborateur'];
            $emailcollaborateur = $metabox['emailcollaborateur'];
            $sitecollaborateur = $metabox['sitecollaborateur'];

        }
        ?>

        <!-- Id de collaborateur -->
        <label for="metabox_idcollaborateur">Id collaborateur</label>
        <input type="text" name="metabox_idcollaborateur" value="<?= $idcollaborateur;?>" placeholder="Saisissez l'id du collaborateur"/>

        <!-- Type de collaborateur -->
        <label for="metabox_typecollaborateur">Type de collaborateur</label>
        <input type="text" name="metabox_typecollaborateur" value="<?= $typecollaborateur;?>" placeholder="Saisissez le type de collaboration"/>
        
        <!-- Nom du collaborateur -->
        <label for="metabox_nomcollaborateur">Nom du collaborateur</label>
        <input type="text" name="metabox_nomcollaborateur" value="<?= $nomcollaborateur;?>" placeholder="Saisissez le nom du collaborateur"/>

        <!-- Spécialité du collaborateur -->
        <label for="metabox_specialitecollaborateur">Spécialité du collaborateur</label>
        <input type="text" name="metabox_specialitecollaborateur" value="<?= $specialitecollaborateur;?>" placeholder="Saisissez la spécialité du collaborateur"/>

        <!-- Présentation -->
        <label for="metabox_presentationcollaborateur">Présentation du collaborateur</label>
        <textarea name="metabox_presentationcollaborateur" id="metabox_presentationcollaborateur" cols="30" rows="10"><?= $presentationcollaborateur;?></textarea>

        <!-- Contact mail -->
        <label for="metabox_emailcollaborateur">Contact email</label>
        <input type="email" name="metabox_emailcollaborateur" value="<?= $emailcollaborateur;?>" placeholder="Saisissez le contact mail du collaborateur"/>

        <!-- Site web -->
        <label for="metabox_sitecollaborateur">Site web</label>
        <input type="text" name="metabox_sitecollaborateur" value="<?= $sitecollaborateur;?>" placeholder="Saisissez le site web du collaborateur"/>

        <!-- Style du formulaire -->
        <style>
            .edit-post-meta-boxes-area #metabox_collaborateur>.inside {
                display: flex;
                flex-direction: column;
            }
            .edit-post-meta-boxes-area #metabox_collaborateur>.inside label {
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
            $collaborateur = array(
                /* Qui contient les valeurs des metaboxes */
                'idcollaborateur' => esc_html($_POST['metabox_idcollaborateur']),
                'typecollaborateur' => esc_html($_POST['metabox_typecollaborateur']),
                'nomcollaborateur' => esc_html($_POST['metabox_nomcollaborateur']),
                'presentationcollaborateur' => $_POST['metabox_presentationcollaborateur'],
                'specialitecollaborateur' => esc_html($_POST['metabox_specialitecollaborateur']),
                'sitecollaborateur' => esc_html($_POST['metabox_sitecollaborateur']),
                'emailcollaborateur' => esc_html($_POST['metabox_emailcollaborateur']),
            );
            
            /*  Mise à jour des données */
            update_post_meta($post_id, 'metabox_collaborateur', $collaborateur);
        }
    }
}
?>