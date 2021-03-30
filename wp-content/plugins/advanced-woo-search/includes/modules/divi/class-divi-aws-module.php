<?php

add_action('et_builder_ready', 'aws_divi_register_modules');
function aws_divi_register_modules() {

    if ( class_exists( 'ET_Builder_Module' ) ):

        class Divi_AWS_Module extends ET_Builder_Module {

            public $slug       = 'aws';
            public $vb_support = 'partial';

            public function init() {
                $this->name = esc_html__( 'Advanced Woo Search', 'advanced-woo-search' );
            }

            public function get_fields() {

                wp_enqueue_style(
                    'aws-divi',
                    AWS_URL . '/includes/modules/divi/divi.css', array(), AWS_VERSION
                );

                return array(
                    'placeholder'     => array(
                        'label'           => esc_html__( 'Placeholder', 'advanced-woo-search' ),
                        'type'            => 'text',
                        'option_category' => 'basic_option',
                        'description'     => esc_html__( 'Add placeholder text or leave empty to use default.', 'advanced-woo-search' ),
                        'toggle_slug'     => 'main_content',
                    ),
                );
            }

            public function render( $unprocessed_props, $content = null, $render_slug ) {
                if ( function_exists( 'aws_get_search_form' ) ) {
                    $search_form = aws_get_search_form( false );
                    if ( $this->props['placeholder'] ) {
                        $search_form = preg_replace( '/placeholder="([\S\s]*?)"/i', 'placeholder="' . $this->props['placeholder'] . '"', $search_form );
                    }
                    return $search_form;
                }
                return '';
            }

        }

        new Divi_AWS_Module;

    endif;

}