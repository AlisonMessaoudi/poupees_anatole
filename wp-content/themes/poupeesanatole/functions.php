<?php 

    /* FONCTIONS */

        function poupeesanatole_supports () {
            /* CREATION DE MENUS */
            register_nav_menu('header','Menu Principal');
            register_nav_menu('footer', 'Pied de page');
            /* register_nav_menus('','') : permet d'en créer plusieurs (connexion, déconnexion ?) */
            
            /* ACTIVE LA GESTION WIDGET */
            add_theme_support('widgets');

            /* ACTIVE LA GESTION DES MENUS */
            add_theme_support('menus');
        }

        function poupeesanatole_register_assets () {
            
            /* STYLE */
            wp_enqueue_style('core', get_template_directory_uri().'/style.css' );
            
            wp_enqueue_style('core', get_template_directory_uri().'/node_modules/owl.carousel/dist/assets/owl.carousel.min.css' );
            
            wp_enqueue_style('core', get_template_directory_uri() .'/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css' );

            /* SCRIPT */

                // wp_enqueue_script('jquery');

                /* BOOTSTRAP */
                wp_enqueue_script('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array('jquery'), false, true);
            
                /* OWL-CAROUSEL */
                wp_enqueue_script('owl-carousel', get_template_directory_uri().'/node_modules/owl.carousel/dist/owl.carousel.min.js', array('jquery'), false, true);

                /* SLIDER */
                wp_enqueue_script('slider', get_template_directory_uri().'/assets/js/slider.js', array('jquery','owl-carousel'), false, true);

                /* INDEX */
                wp_enqueue_script('index', get_template_directory_uri().'/assets/js/index.js', array('jquery'), false, true);

                /* MORE */
                wp_enqueue_script('core', get_template_directory_uri().'/assets/js/more.js', array('jquery'), false, true);

                /* JQUERY */
                // wp_register_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
                // wp_enqueue_script('jquery', array(), null, true);
        
        }

        function woocommerce_support() {
            add_theme_support('woocommerce');
        }

        function new_loop_shop_per_page ($cols) {
            // $ cols contient le nombre actuel de produits par page en fonction de la valeur stockée dans Options - > Lecture
            $cols = 6;
            // Renvoie le nombre de produits qu'on souhaite afficher par page.
            return $cols;
        }

        /* CUSTOM POST TYPE COLLABORATEURS */
        function collaborateurs_custom_post_type() {
            $labels = array(
                // Le nom au pluriel
                'name' => _x( 'Collaborateurs', 'Post Type General Name'),
                // Le nom au singulier
                'singular_name' => _x( 'Collaborateur', 'Post Type Singular Name'),
                // Le libellé affiché dans le menu
                'menu_name' => __( 'Collaborateurs'),
                
                // Les différents libellés de l'administration
                'all_items' => __( 'Tous les collaborateurs'),
                'view_item' => __( 'Voir les collaborateurs'),
                'add_new_item' => __( 'Ajouter un nouveau collaborateur'),
                'add_new' => __( 'Ajouter'),
                'edit_item' => __( 'Editer le collaborateur'),
                'update_item' => __( 'Modifier le collaborateur'),
                'search_items' => __( 'Rechercher un collaborateur'),
                'not_found' => __( 'Non trouvée'),
                'not_found_in_trash' => __( 'Non trouvée dans la corbeille'),
            );
            
            // On peut définir ici d'autres options pour notre custom post type
            
            $args = array(
                'label' => __( 'Collaborateurs'),
                'description' => __( 'Tous les collaborateurs'),
                'labels' => $labels,
                // dashicon
                'menu_icon' => 'dashicons-groups',
                'menu_position' => 4,
                // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
                'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
                /* 
                * Différentes options supplémentaires
                */
                'show_in_rest' => true,
                'hierarchical' => false,
                'public' => true,
                'has_archive' => true,
                'rewrite' => array( 'slug' => 'collaborateurs'),

            );
            
            // On enregistre notre custom post type qu'on nomme ici "collaborateurs" et ses arguments
            register_post_type( 'collaborateurs', $args );
        }

        /* CUSTOM POST TYPE DOCUMENTS */
        function documents_custom_post_type() {
            $labels = array(
                // Le nom au pluriel
                'name' => _x( 'Documents', 'Post Type General Name'),
                // Le nom au singulier
                'singular_name' => _x( 'Document', 'Post Type Singular Name'),
                // Le libellé affiché dans le menu
                'menu_name' => __( 'Documents'),
                
                // Les différents libellés de l'administration
                'all_items' => __( 'Tous les documents'),
                'view_item' => __( 'Voir les documents'),
                'add_new_item' => __( 'Ajouter un nouveau document'),
                'add_new' => __( 'Ajouter'),
                'edit_item' => __( 'Editer le document'),
                'update_item' => __( 'Modifier le document'),
                'search_items' => __( 'Rechercher un document'),
                'not_found' => __( 'Non trouvée'),
                'not_found_in_trash' => __( 'Non trouvée dans la corbeille'),
            );
            
            // On peut définir ici d'autres options pour notre custom post type
            
            $args = array(
                'label' => __( 'Documents'),
                'description' => __( 'Tous les documents'),
                'labels' => $labels,
                // dashicon
                'menu_icon' => 'dashicons-welcome-write-blog',
                'menu_position' => 5,
                // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
                'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes'),
                /* 
                * Différentes options supplémentaires
                */
                'show_in_rest' => true,
                'hierarchical' => false,
                'public' => true,
                'has_archive' => true,
                'rewrite' => array( 'slug' => 'collaborateurs'),

            );
            
            // On enregistre notre custom post type qu'on nomme ici "collaborateurs" et ses arguments
            register_post_type( 'documents', $args );
        }

    /* ACTIONS */

        add_action('after_setup_theme', 'poupeesanatole_supports');
        add_action('wp_enqueue_scripts', 'poupeesanatole_register_assets');
        add_action('after_setup_theme','woocommerce_support');
        add_action( 'init', 'collaborateurs_custom_post_type', 0 );
        add_action( 'init', 'documents_custom_post_type', 0 );

    /* FILTER */

        add_filter('woocommerce_enqueue_styles','__return_false');
        /* Modifier le nombre de produits affichés par page (page boutique) */
        add_filter ('loop_shop_per_page', 'new_loop_shop_per_page', 20);