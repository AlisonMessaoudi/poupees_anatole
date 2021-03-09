<?php 

    /* FONCTIONS */

        function poupeesanatole_supports () {
            /* TITRE AUTO-COMPLETE */
            add_theme_support('menus');
            register_nav_menu('header','Menu Principal');
            register_nav_menu('footer', 'Pied de page');
            /* register_nav_menus('','') : permet d'en créer plusieurs (connexion, déconnexion ?) */
        }

        function poupeesanatole_register_assets () {
            wp_enqueue_style('core', get_template_directory_uri() .'/style.css' );
            wp_enqueue_style('core', get_template_directory_uri() .'assets/css/fonts/fonts.css' );
        
            wp_enqueue_script('core', get_template_directory_uri() .'/assets/js/index.js');
            wp_enqueue_script('core', get_template_directory_uri() .'/assets/js/more.js');
        }

        function woocommerce_support() {
            add_theme_support('woocommerce');
        }

        function new_loop_shop_per_page ($cols) {
        // $ cols contient le nombre actuel de produits par page en fonction de la valeur stockée dans Options - > Lecture
        // Renvoie le nombre de produits que vous souhaitez afficher par page.
        $cols = 6;
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