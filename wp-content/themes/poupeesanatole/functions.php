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

        /* ACTIONS */

        add_action('after_setup_theme', 'poupeesanatole_supports');
        add_action('wp_enqueue_scripts', 'poupeesanatole_register_assets');
        add_action('after_setup_theme','woocommerce_support');

    /* FILTER */

        add_filter('woocommerce_enqueue_styles','__return_false');
        /* Modifier le nombre de produits affichés par page (page boutique) */
        add_filter ('loop_shop_per_page', 'new_loop_shop_per_page', 20);

    /* REQUIRE */
        
        /* CPT Document */
        require get_template_directory() . '/custom/cpt_documents.php';
        /* Metaboxes Document */
        require_once('metaboxes/document.php');
        DocumentMetaBox::register();

        /* CPT Collaborateur */
        require get_template_directory() . '/custom/cpt_collaborateur.php';
        /* Metaboxes Collaborateur */
        require_once('metaboxes/collaborateur.php');
        CollaborateurMetaBox::register();

?>