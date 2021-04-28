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
            
            /* STYLES */

                /* MON STYLE */
                wp_enqueue_style('monStyle', get_template_directory_uri().'/style.css' );
                
                /* OWL-CAROUSEL */
                wp_enqueue_style('owl-carousel', get_template_directory_uri().'/node_modules/owl.carousel/dist/assets/owl.carousel.min.css' );
                
                /* IONICONS */
                wp_enqueue_style('ionicons', "https://unpkg.com/ionicons@5.4.0/dist/ionicons.js" );
                
                /* ANIMATE CSS */
                wp_enqueue_style('animatecss', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css");

            /* SCRIPTS */

                /* INDEX */
                wp_enqueue_script('index', get_template_directory_uri().'/assets/js/index.js', array('jquery'), false, true);

                /* SLIDERS */

                    /* SLIDER HOME */
                    wp_enqueue_script('sliderHome', get_template_directory_uri().'/assets/js/sliderHome.js', array('jquery','owl-carousel', 'jquery'), false, true);

                    /* SLIDER SHOP */
                    wp_enqueue_script('sliderShop', get_template_directory_uri().'/assets/js/sliderShop.js', array('jquery','owl-carousel', 'jquery'), false, true);

                    /* SLIDER PRODUIT */
                    wp_enqueue_script('sliderProduit', get_template_directory_uri().'/assets/js/sliderProduit.js', array('jquery','owl-carousel', 'jquery'), false, true);

                    /* SLIDER COLLABORATEUR */
                    wp_enqueue_script('sliderCollaborateur', get_template_directory_uri().'/assets/js/sliderCollaborateur.js', array('jquery','owl-carousel', 'jquery'), false, true);

                    /* SLIDER DOCUMENT */
                    wp_enqueue_script('sliderDocument', get_template_directory_uri().'/assets/js/sliderDocument.js', array('jquery','owl-carousel', 'jquery'), false, true);

                /* MORE */

                    /* MORE COLLABORATEUR */
                    wp_enqueue_script('moreCollaborateur', get_template_directory_uri().'/assets/js/moreCollaborateur.js', array('jquery'), false, true);

                    /* MORE PRODUCT */
                    wp_enqueue_script('moreProduct', get_template_directory_uri().'/assets/js/moreProduct.js', array('jquery'), false, true);

                    /* MORE DOCUMENT */
                    wp_enqueue_script('btnDocument', get_template_directory_uri().'/assets/js/btnDocument.js', array('jquery'), false, true);

                /* ANIMATIONS */
                    
                    /* MENU ICON */
                    wp_enqueue_script('iconMenu', get_template_directory_uri().'/assets/js/iconMenu.js', array('jquery'), false, true);

                    /* ANIMATION TITRE  */
                    wp_enqueue_script('fadeIn', get_template_directory_uri().'/assets/js/fadeIn.js', array('jquery'), false, true);

                /* BIBLIOTHEQUES */

                    /* IONICONS */
                    wp_enqueue_script('ionicons', 'https://unpkg.com/ionicons@5.4.0/dist/ionicons.js');

                    /* BOOTSTRAP */
                    wp_enqueue_script('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array('jquery'), false, true);

                    /* OWL-CAROUSEL */
                    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/node_modules/owl.carousel/dist/owl.carousel.min.js', array('jquery'), false, true);
        }

        /* WOOCOMMERCE */
        function woocommerce_support() {
            add_theme_support('woocommerce');
        }

            /* AFFICHAGE DU NOMBRE DE PRODUIT PAR PAGE */
            function new_loop_shop_per_page ($cols) {
                // $ cols contient le nombre actuel de produits par page en fonction de la valeur stockée dans Options - > Lecture
                $cols = -1;
                // Renvoie le nombre de produits qu'on souhaite afficher par page.
                return $cols;
            }

        /* CREACTION D'UN WIDGET */
        function poupeesanatoles_widgets_init() {
            if(function_exists('register_sidebar')){
                /* FOOTER : NEWSLETTER */
                register_sidebar( 
                array(
                    'name' => __('Footer Top', 'virtue'),
                    'id' => 'footer_top',
                    'description' => __('Add widgets here to appear above your footer', 'virtue'),
                    'before_widget' => '<aside id="%1$s" class="newsL %2$s">',
                    'after_widget' => '</aside>',
                    'before_title' => '<h3>',
                    'after_titre' => '</h3>',
                ));
                /* SHOP FILTRE */
                register_sidebar(
                array(
                    'name' => __('Shop Filtre', 'virtue'),
                    'id' => 'shop_filtre',
                    'description' => __('Add widgets here to appear above your Shop', 'virtue'),
                    'before_widget' => '<aside id="%1$s" class="newsL %2$s">',
                    'after_widget' => '</aside>',
                    'before_title' => '<h3>',
                    'after_titre' => '</h3>',
                ));
            }
        }

    /* ACTIONS */

        /* MENUS */
        add_action('after_setup_theme', 'poupeesanatole_supports');
        /* STYLE ET SCRIPT */
        add_action('wp_enqueue_scripts', 'poupeesanatole_register_assets');
        /* WOOCOMMERCE */
        add_action('after_setup_theme','woocommerce_support');
        /* WIDGET */
        add_action('widgets_init', 'poupeesanatoles_widgets_init');

    /* FILTER */

        add_filter('woocommerce_enqueue_styles','__return_false');
        /* Modifier le nombre de produits affichés par page (page boutique) */
        add_filter ('loop_shop_per_page', 'new_loop_shop_per_page', 20);
        add_filter( 'cmb_meta_boxes', 'bhww_core_cpt_metaboxes' );

    /* REQUIRE */
        
        /* CUSTOM POST TYPE DOCUMENT */
        require get_template_directory() . '/custom/cpt_documents.php';
        /* METABOXES DOCUMENT */
        require_once('metaboxes/document.php');
        DocumentMetaBox::register();

        /* CUSTOM POST TYPE COLLABORATEUR */
        require get_template_directory() . '/custom/cpt_collaborateur.php';
        /* METABOXES COLLABORATEUR */
        require_once('metaboxes/collaborateur.php');
        CollaborateurMetaBox::register();

?>