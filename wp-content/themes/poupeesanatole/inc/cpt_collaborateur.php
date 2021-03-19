<?php 

    add_action('init', 'collaborateur_register_post_type');

    /* CUSTOM POST TYPE COLLABORATEURS */
    function collaborateur_register_post_type() {
        
        $labels = array(

            'name'=> _x('Collaborateurs', 'Post Type General Name'),
            'singular_name' => _x('Collaborateur', 'Post Type Singular Name'),
            'menu_name' => __('Collaborateurs'),
            'name_admin_bar' => __('Collaborateur'),
            'archives' => __('Collaborateur Archives'),
            'attributes' => __('Page Attributes'),
            'parent_item_colon' => __('Parent Collaborateur:'),
            'all_items' => __('Toutes les Collaborateurs'),
            'add_new_item' => __('Ajouter un nouveau Collaborateur'),
            'add_new' => __('Ajouter'),
            'new_item' => __('Nouveau Collaborateur'),
            'edit_item' => __('Modifier Collaborateur'),
            'update_item' => __('Update Collaborateur'),
            'view_item' => _x('View Item', 'Collaborateur'),
            'view_items' => __('View Collaborateurs'),
            'search_items' => __('Search Collaborateur'),
            'not_found' => __('Not found'),
            'not_found_in_trash' => __('Not found in Trash'),
            'featured_image' => __('Featured Image'),
            'set_featured_image' => __('Set featured image'),
            'remove_featured_image' => __('Retirer image'),
            'use_featured_image' => __('Utiliser comme image en avant'),
            'insert_into_item' => __('Insert into item'),
            'uploaded_to_this_item' => __('Uploaded to this item'),
            'items_list' => __('Items list'),
            'items_list_navigation' => __('Items list navigation'),
            'filter_items_list' => __('Filter items list'),
        );
        
        // On peut définir ici d'autres options pour notre custom post type
        $args = array(
            
            'label' => __('Collaborateur'),
            'description' => __('Présentation des Collaborateurs'),
            'labels' => $labels,

            // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
            'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes','post-formats'),
            
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 2,
            'show_in_admin_bar'  => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'show_in_rest'          =>  true,
            'rewrite' => array( 'slug' => 'Collaborateur'),

        );
        
        // On enregistre notre custom post type qu'on nomme ici "Collaborateur" et ses arguments
        register_post_type( 'Collaborateur', $args );
    }
?>