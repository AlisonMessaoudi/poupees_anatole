<?php 

    /* FONCTIONS */

        function poupeesanatole_supports () {
            /* TITRE AUTO-COMPLETE */
            add_theme_support('menus');
            register_nav_menu('header','En tête du menu');
            register_nav_menu('footer', 'Pied de page');
            /* register_nav_menus('','') : permet d'en créer plusieurs (connexion, déconnexion ?) */
        }

        function poupeesanatole_register_assets () {
            
            /* STYLE */
            wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
            
            /* SCRIPT */
            wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
            wp_register_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
            wp_deregister_script('jquery'); /* annule le jquery de wordpress */ 
            wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true); /* remplacé par jquery de bootstrap */

            /* APPEL DES BIBLIOTHEQUES */
            wp_enqueue_style('bootstrap');
            wp_enqueue_script('bootstrap');
            wp_enqueue_style('core', get_template_directory_uri() .'/style.css' );
            wp_enqueue_style('core', get_template_directory_uri() .'assets/css/fonts/fonts.css' );
        }

        function woocommerce_support() {
            add_theme_support('woocommerce');
        }

    /* ACTIONS */

        add_action('after_setup_theme', 'poupeesanatole_supports');
        add_action('wp_enqueue_scripts', 'poupeesanatole_register_assets');
        add_action('after_setup_theme','woocommerce_support');

    /* FILTER */

        add_filter('woocommerce_enqueue_styles','__return_false');