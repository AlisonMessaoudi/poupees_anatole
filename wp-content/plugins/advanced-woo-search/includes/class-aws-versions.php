<?php
/**
 * Versions capability
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! class_exists( 'AWS_Versions' ) ) :

    /**
     * Class for plugin search
     */
    class AWS_Versions {

        /**
         * Return a singleton instance of the current class
         *
         * @return object
         */
        public static function factory() {
            static $instance = false;

            if ( ! $instance ) {
                $instance = new self();
                $instance->setup();
            }

            return $instance;
        }

        /**
         * Placeholder
         */
        public function __construct() {}

        /**
         * Setup actions and filters for all things settings
         */
        public function setup() {

            $current_version = get_option( 'aws_plugin_ver' );
            $reindex_version = get_option( 'aws_reindex_version' );

            if ( ! ( $reindex_version ) && current_user_can( 'manage_options' ) ) {
                add_action( 'admin_notices', array( $this, 'admin_notice_no_index' ) );
            }

            if ( $reindex_version && version_compare( $reindex_version, '1.23', '<' ) && current_user_can( 'manage_options' ) ) {
                add_action( 'admin_notices', array( $this, 'admin_notice_reindex' ) );
            }

            if ( $current_version ) {

                if ( version_compare( $current_version, '1.16', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['outofstock'] ) ) {
                            $settings['outofstock'] = 'false';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.17', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['use_analytics'] ) ) {
                            $settings['use_analytics'] = 'false';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.21', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['show_page'] ) ) {
                            $settings['show_page'] = 'false';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.23', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['stopwords'] ) ) {
                            $settings['stopwords'] = 'a, also, am, an, and, are, as, at, be, but, by, call, can, co, con, de, do, due, eg, eight, etc, even, ever, every, for, from, full, go, had, has, hasnt, have, he, hence, her, here, his, how, ie, if, in, inc, into, is, it, its, ltd, me, my, no, none, nor, not, now, of, off, on, once, one, only, onto, or, our, ours, out, over, own, part, per, put, re, see, so, some, ten, than, that, the, their, there, these, they, this, three, thru, thus, to, too, top, un, up, us, very, via, was, we, well, were, what, when, where, who, why, will';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }
                
                if ( version_compare( $current_version, '1.27', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['show_stock'] ) ) {
                            $settings['show_stock'] = 'false';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.41', '<' ) ) {

                    if ( AWS_Helpers::is_index_table_has_terms() == 'no_terms' ) {

                        global $wpdb;
                        $table_name =  $wpdb->prefix . AWS_INDEX_TABLE_NAME;

                        $wpdb->query("
                            ALTER TABLE {$table_name}
                            ADD COLUMN `term_id` BIGINT(20) UNSIGNED NOT NULL DEFAULT 0
                        ");

                    }

                }

                if ( version_compare( $current_version, '1.42', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['show_more'] ) ) {
                            $settings['show_more'] = 'false';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.43', '<' ) ) {

                    if ( ! AWS_Helpers::is_table_not_exist() ) {

                        global $wpdb;
                        $table_name =  $wpdb->prefix . AWS_INDEX_TABLE_NAME;

                        $wpdb->query("
                            ALTER TABLE {$table_name}
                            MODIFY term_source varchar(50);
                        ");

                    }

                }

                if ( version_compare( $current_version, '1.47', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['seamless'] ) ) {
                            $settings['seamless'] = 'false';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.48', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['show_clear'] ) ) {
                            $settings['show_clear'] = 'false';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.49', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['show_more_text'] ) ) {
                            $settings['show_more_text'] = __('View all results', 'advanced-woo-search');
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.53', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['show_featured'] ) ) {
                            $settings['show_featured'] = 'false';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.54', '<' ) ) {

                    if ( AWS_Helpers::is_index_table_has_on_sale() == 'no' ) {

                        global $wpdb;
                        $table_name =  $wpdb->prefix . AWS_INDEX_TABLE_NAME;

                        $wpdb->query("
                            ALTER TABLE {$table_name}
                            ADD COLUMN `on_sale` INT(11) NOT NULL DEFAULT 0
                        ");

                    }

                }

                if ( version_compare( $current_version, '1.56', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['buttons_order'] ) ) {
                            $settings['buttons_order'] = '1';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.59', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['show_outofstock_price'] ) ) {
                            $settings['show_outofstock_price'] = 'true';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.60', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['autoupdates'] ) ) {
                            $settings['autoupdates'] = 'true';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.79', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['synonyms'] ) ) {
                            $settings['synonyms'] = 'buy, pay, purchase, acquire&#13;&#10;box, housing, unit, package';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.89', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['highlight'] ) && isset( $settings['mark_words'] ) ) {
                            $mark_words = $settings['mark_words'];
                            $settings['highlight'] = $mark_words;
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '1.96', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {
                        if ( ! isset( $settings['mobile_overlay'] ) ) {
                            $settings['mobile_overlay'] = 'false';
                            update_option( 'aws_settings', $settings );
                        }
                    }

                }

                if ( version_compare( $current_version, '2.03', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {

                        if ( isset( $settings['search_in'] ) && is_string( $settings['search_in'] ) ) {
                            $current_search_in = explode( ',', $settings['search_in'] );
                            $new_search_in = array();
                            $options_array = AWS_Admin_Options::include_options();
                            foreach( $options_array['general'] as $def_option ) {
                                if ( isset( $def_option['id'] ) && $def_option['id'] === 'search_in' && isset( $def_option['choices'] ) ) {
                                    foreach( $def_option['choices'] as $choice_key => $choice_label ) {
                                        $new_search_in[$choice_key] = in_array( $choice_key, $current_search_in ) ? 1 : 0;
                                    }
                                    $settings['search_in'] = $new_search_in;
                                    break;
                                }
                            }
                            update_option( 'aws_settings', $settings );
                        }

                        if ( ! isset( $settings['search_archives'] ) ) {
                            $new_search_archives = array();
                            $new_search_archives['archive_category'] = ( isset( $settings['show_cats'] ) && $settings['show_cats'] === 'true' ) ? 1 : 0;
                            $new_search_archives['archive_tag'] = ( isset( $settings['show_tags'] ) && $settings['show_tags'] === 'true' ) ? 1 : 0;
                            $settings['search_archives'] = $new_search_archives;
                            update_option( 'aws_settings', $settings );
                        }

                    }

                }

                if ( version_compare( $current_version, '2.23', '<' ) ) {

                    $settings = get_option( 'aws_settings' );

                    if ( $settings ) {

                        if ( ! isset( $settings['search_rule'] ) ) {
                            $settings['search_rule'] = 'contains';
                            update_option( 'aws_settings', $settings );
                        }

                        if ( ! isset( $settings['search_timeout'] ) ) {
                            $settings['search_timeout'] = '300';
                            update_option( 'aws_settings', $settings );
                        }

                        if ( ! isset( $settings['index_sources'] ) ) {
                            $index_sources = array();
                            $options_array = AWS_Admin_Options::include_options();
                            foreach( $options_array['performance'] as $def_option ) {
                                if ( isset( $def_option['id'] ) && $def_option['id'] === 'index_sources' && isset( $def_option['choices'] ) ) {
                                    foreach( $def_option['choices'] as $choice_key => $choice_label ) {
                                        $index_sources[$choice_key] = 1;
                                    }
                                    $settings['index_sources'] = $index_sources;
                                    break;
                                }
                            }
                            update_option( 'aws_settings', $settings );
                        }

                        if ( ! isset( $settings['index_variations'] ) ) {
                            $settings['index_variations'] = 'true';
                            update_option( 'aws_settings', $settings );
                        }

                    }

                }

            }

            update_option( 'aws_plugin_ver', AWS_VERSION );

        }

        /**
         * Admin notice for table first reindex
         */
        public function admin_notice_no_index() { ?>
            <div class="updated notice is-dismissible">
                <p><?php printf( esc_html__( 'Advanced Woo Search: Please go to the plugin setting page and start indexing your products. %s', 'advanced-woo-search' ), '<a class="button button-secondary" href="'.esc_url( admin_url('admin.php?page=aws-options') ).'">'.esc_html__( 'Go to Settings Page', 'advanced-woo-search' ).'</a>'  ); ?></p>
            </div>
        <?php }

        /**
         * Admin notice for table reindex
         */
        public function admin_notice_reindex() { ?>
            <div class="updated notice is-dismissible">
                <p><?php printf( esc_html__( 'Advanced Woo Search: Please reindex table for proper work of new plugin features. %s', 'advanced-woo-search' ), '<a class="button button-secondary" href="'.esc_url( admin_url('admin.php?page=aws-options') ).'">'.esc_html__( 'Go to Settings Page', 'advanced-woo-search' ).'</a>'  ); ?></p>
            </div>
        <?php }

    }


endif;

add_action( 'admin_init', 'AWS_Versions::factory' );