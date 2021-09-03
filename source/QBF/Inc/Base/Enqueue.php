<?php
/**
 * @package  questionnaire-based-filter
 */

namespace Inc\Base;
use \Inc\Base\BaseController;


class Enqueue extends BaseController
{

    public function register(){
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue' ) ); 
        add_action( 'wp_enqueue_scripts', array( $this, 'public_enqueue' ) ); 
    }

    public function admin_enqueue($screen) {

        if("toplevel_page_questionnaire_based_filter" !== $screen 
        && "qbf_page_questionnaire_based_filter_forms" !== $screen 
        && "qbf_page_questionnaire_based_filter_cqbf" !== $screen 
        && "qbf_page_questionnaire_based_filter_entries" !== $screen 
        && "qbf_page_questionnaire_based_filter_user_input_data" !== $screen){
            wp_enqueue_style( 'questionnaire_main_css_style', $this->plugin_url . 'assets/Admin/Admin/qbf_admin_logo.css' );
        }

        
       
        if("toplevel_page_questionnaire_based_filter" == $screen 
        || "qbf_page_questionnaire_based_filter_forms" == $screen 
        || "qbf_page_questionnaire_based_filter_cqbf" == $screen 
        || "qbf_page_questionnaire_based_filter_entries" == $screen 
        || "qbf_page_questionnaire_based_filter_user_input_data" == $screen){


        wp_enqueue_script( 'questionnaire_drag_drop_js', $this->plugin_url . 'assets/Admin/formbuilder/form-builder.js',null,1.0,true ); //replace with form-builder.min.js

        wp_register_script( 'questionnaire_main_js', $this->plugin_url . 'assets/Admin/Admin/qbf_create.js',array('jquery'),1.0,true );

        wp_localize_script( 'questionnaire_main_js', 'qbf', array(

            'ajaxurl'=>admin_url("admin-ajax.php", null)
        ) );
        wp_enqueue_script('jquery');
        wp_enqueue_script('questionnaire_main_js');


        // wp_enqueue_script( 'questionnaire_jquery_min_js', $this->plugin_url . 'assets/Admin/JQ/jquery.min.js',null,1.0,true );

        
        wp_enqueue_script( 'questionnaire_qbf_tabs_js', $this->plugin_url . 'assets/Admin/Admin/qbf_tab.js',array('jquery'),1.0,true );
        wp_enqueue_script( 'questionnaire_bootstrap_min_js', $this->plugin_url . 'assets/Admin/bootstrap/bootstrap.min.js',array('jquery'),1.0,true );

        wp_enqueue_script( 'questionnaire_prettify_min_js', $this->plugin_url . 'assets/Admin/pretify/run_prettify.js',null,1.0,true );

        wp_enqueue_script( 'questionnaire_sliding_form_min_js', $this->plugin_url . 'assets/Admin/Admin/sliding.form.js',array('jquery'),1.0,true );

        wp_enqueue_script( 'questionnaire_jquery_ui_min_js', $this->plugin_url . 'assets/Admin/JQ/jquery-ui.min.js',null,1.0,true );


        wp_enqueue_style( 'questionnaire_main_css_style', $this->plugin_url . 'assets/Admin/Admin/qbf_create.css' );
        wp_enqueue_style( 'questionnaire_bootstrap_css', $this->plugin_url . 'assets/Admin/bootstrap/bootstrap.min.css' );

        }
    }


    public function public_enqueue() {  

        if ( is_page() || ( is_singular('post') || is_home() ) ) {

            wp_enqueue_style('qbf_plugin_style', $this->plugin_url . 'assets/Public/public.css');

            wp_enqueue_script('qbf_plugin_script', $this->plugin_url . 'assets/Public/public.js',array('jquery'),1.0,true );

            wp_localize_script( 'qbf_plugin_script', 'qbf_contact', array(

                'ajaxurl'=>admin_url("admin-ajax.php", null)
            ) );
            wp_enqueue_script('jquery');




            wp_enqueue_script('qbf_plugin_search_script', $this->plugin_url . 'assets/Public/search.js',array('jquery'),1.0,true );

            wp_localize_script( 'qbf_plugin_search_script', 'qbf_search', array(

                'ajaxurl'=>admin_url("admin-ajax.php", null)
            ) );
            wp_enqueue_script('jquery');


        }

    }
}
