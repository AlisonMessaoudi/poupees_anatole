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
            
            wp_enqueue_style('owl-carousel', get_template_directory_uri().'/node_modules/owl.carousel/dist/assets/owl.carousel.min.css' );

            wp_enqueue_style('ionicons', "https://unpkg.com/ionicons@5.4.0/dist/ionicons.js" );

            wp_enqueue_style('animatecss', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css");

            /* SCRIPT */

                /* BOOTSTRAP */
                wp_enqueue_script('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array('jquery'), false, true);
            
                /* OWL-CAROUSEL */
                wp_enqueue_script('owl-carousel', get_template_directory_uri().'/node_modules/owl.carousel/dist/owl.carousel.min.js', array('jquery'), false, true);

                /* SLIDER */
                wp_enqueue_script('slider', get_template_directory_uri().'/assets/js/slider.js', array('jquery','owl-carousel', 'jquery'), false, true);

                /* INDEX */
                wp_enqueue_script('index', get_template_directory_uri().'/assets/js/index.js', array('jquery'), false, true);

                /* MORE */
                wp_enqueue_script('core', get_template_directory_uri().'/assets/js/more.js', array('jquery'), false, true);

                /* FADEIN */
                wp_enqueue_script('core', get_template_directory_uri().'/assets/js/fadeIn.js', array('jquery'), false, true);

                /* IONICONS */
                wp_enqueue_script('ionicons', 'https://unpkg.com/ionicons@5.4.0/dist/ionicons.js');
        
        }

        // WOOCOMMERCE
        function woocommerce_support() {
            add_theme_support('woocommerce');
        }

        // Affichage du nombre de produit par page
        function new_loop_shop_per_page ($cols) {
            // $ cols contient le nombre actuel de produits par page en fonction de la valeur stockée dans Options - > Lecture
            $cols = -1;
            // Renvoie le nombre de produits qu'on souhaite afficher par page.
            return $cols;
        }

        // CREACTION D'UN WIDGET
        function poupeesanatoles_widgets_init() {
            if(function_exists('register_sidebar')){
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

        // LOAD MORE PRODUCT
        // function misha_my_load_more_scripts(){

        //     global $wp_query ;
 
        //     wp_register_script ('my_loadmore', get_stylesheet_directory_uri().'/assets/js/myloadmore.js' , array( 'jquery'));

        //     wp_localize_script('my_loadmore', 'misha_loadmore_params', array( 
        //         'ajaxurl' => site_url(). '/wp-admin/admin-ajax.php',
        //         'posts' => json_encode($wp_query -> query_vars),
        //         'current_page' => get_query_var('paged') ? get_query_var('paged'):1,
        //         'max_page' => $wp_query -> max_num_pages 
        //     ));
         
        //     wp_enqueue_script ('my_loadmore');
        // }

        // LOAD MORE PRODUCT
        // function misha_loadmore_ajax_handler(){
 
        //     $args = json_decode( stripslashes( $_POST['query'] ), true );
        //     $args['paged'] = $_POST['page'] + 1;
        //     $args['post_status'] = 'publish';
         
        //     query_posts( $args );
         
        //     if ( wc_get_loop_prop( 'total' ) ) {
        //         while ( have_posts() ) {
        //             the_post();
        //             do_action( 'woocommerce_shop_loop' );
        //             wc_get_template_part( 'content', 'product' );
        //         }
        //     }
        // }

    /* ACTIONS */

        add_action('after_setup_theme', 'poupeesanatole_supports');
        add_action('wp_enqueue_scripts', 'poupeesanatole_register_assets');
        add_action('after_setup_theme','woocommerce_support');
        // add_action('wp_enqueue_scripts', 'misha_my_load_more_scripts');
        // add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler');
        // add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler');
        add_action('widgets_init', 'poupeesanatoles_widgets_init');

    /* FILTER */

        add_filter('woocommerce_enqueue_styles','__return_false');
        /* Modifier le nombre de produits affichés par page (page boutique) */
        add_filter ('loop_shop_per_page', 'new_loop_shop_per_page', 20);
        add_filter( 'cmb_meta_boxes', 'bhww_core_cpt_metaboxes' );

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