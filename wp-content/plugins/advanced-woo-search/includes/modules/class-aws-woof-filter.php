<?php

/**
 * AWS plugin WOOF - WooCommerce Products Filter integration
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (!class_exists('AWS_Woof_Filter_Init')) :

    /**
     * Class for main plugin functions
     */
    class AWS_Woof_Filter_Init {

        /**
         * @var AWS_Woof_Filter_Init The single instance of the class
         */
        protected static $_instance = null;

        /**
         * Main AWS_Woof_Filter_Init Instance
         *
         * Ensures only one instance of AWS_Woof_Filter_Init is loaded or can be loaded.
         *
         * @static
         * @return AWS_Woof_Filter_Init - Main instance
         */
        public static function instance()
        {
            if (is_null(self::$_instance)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        /**
         * Constructor
         */
        public function __construct() {

            add_filter( 'aws_search_page_filters', array( $this, 'woof_search_page_filters' ) );

            add_filter( 'aws_searchpage_enabled', array( $this, 'woof_searchpage_enabled' ) );

            add_filter( 'aws_search_page_query', array( $this, 'woof_aws_searchpage_query' ) );

            add_filter( 'woof_text_search_like_option', array( $this, 'woof_text_search_like_option' ) );

            add_filter( 'woof_get_request_data', array( $this, 'woof_get_request_data' ), 999 );

        }

        /*
         * Filter products
         */
        public function woof_search_page_filters( $filters ) {

            if ( isset( $_GET['swoof'] ) || isset( $_GET['woof_text'] ) ) {
                foreach ( $_GET as $key => $param ) {

                    if ( $key === 'product_cat' || $key === 'product_tag' || strpos($key, 'pa_') !== false ) {

                        $slugs_arr = explode(',', $param);
                        $term_ids = array();

                        if ( $slugs_arr ) {
                            foreach( $slugs_arr as $slug ) {
                                $term = get_term_by('slug', $slug, $key );
                                if ( $term ) {
                                    $term_ids[] = $term->term_id;
                                }
                            }
                        }

                        $operator = 'OR';
                        $filters['tax'][$key] = array(
                            'terms' => $term_ids,
                            'operator' => $operator
                        );
                    }

                }
            }

            return $filters;

        }

        /*
         * Enable aws search
         */
        public function woof_searchpage_enabled( $enabled ) {
            if ( isset( $_GET['post_type'] ) && $_GET['post_type'] === 'product' && isset( $_GET['type_aws'] ) && isset( $_GET['woof_text'] ) ) {
                return true;
            }
            return $enabled;
        }

        /*
         * WOOF - WooCommerce Products Filter: set search query string
         */
        public function woof_aws_searchpage_query( $search_query ) {
            if ( ! $search_query && isset( $_GET['woof_text'] ) ) {
                return $_GET['woof_text'];
            }
            return $search_query;
        }

        /*
         * Enable text search feature
         */
        public function woof_text_search_like_option( $enable ) {
            if ( isset( $_GET['post_type'] ) && $_GET['post_type'] === 'product' && isset( $_GET['type_aws'] ) ) {
                return true;
            }
            return $enable;
        }

        /*
         * Add woof_text query if it is not exists
         */
        public function woof_get_request_data( $request ) {
            if ( isset( $_GET['post_type'] ) && $_GET['post_type'] === 'product' && isset( $_GET['type_aws'] ) && isset( $_GET['s'] ) && ! isset( $_GET['woof_text'] ) ) {
                $request['woof_text'] = $request['s'];
            }
            return $request;
        }

        
    }


endif;

AWS_Woof_Filter_Init::instance();