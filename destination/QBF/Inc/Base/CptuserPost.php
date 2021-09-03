<?php
/**
 * @package  questionnaire-based-filter
 */

namespace Inc\Base;

use Inc\Api\Callbacks\AdminCallbacks;
use \Inc\Api\SettingsApi;
use \Inc\Base\BaseController;


class CptuserPost extends BaseController
{

    public $callbacks;   // TO call the callbacks so make a variable
    public $subpages = array();


    public function register()
    {

        // if (! $this->activated('questionnaire_user_post')) return ;


        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();  //call admin callback using callback variable

        $this->setSubpages();

        $this->settings->addSubPages($this->subpages)->register();

         add_action('init', array( $this, 'qbf_registerUserInputCpt') );
         add_action('init', array( $this, 'qbf_dragNdropCpt') );



         /**
          * shortcode 
          */

          add_shortcode( 'qbf_slider', array( $this, 'qbf_slider_shortcode_generator'));

    }


    public function setSubpages()
    {
        $this->subpages = array(
            array(
                'parent_slug' => 'questionnaire_based_filter',
                'page_title' => 'User data',
                'menu_title' => 'User data',
                'capability' => 'manage_options',
                'menu_slug' => 'questionnaire_based_filter_user_input_data',
                'callback' => array( $this->callbacks, 'user_entries' ), //adminCallback.php
            )
        );
    }


    public function qbf_registerUserInputCpt(){

        $labels = array(

            'name'                  => _x( 'qbfuserdata', 'Post type general name', 'qbf' ),

            'singular_name'         => _x( 'qbfuserdata', 'Post type singular name', 'qbf' ),

            'menu_name'             => _x( 'qbfuserdata', 'Admin Menu text', 'qbf' ),

            'name_admin_bar'        => _x( 'qbfuserdata', 'Add New on Toolbar', 'qbf' ),

            'add_new'               => __( 'Add New', 'qbf' ),

            'add_new_item'          => __( 'Add New qbfuserdata', 'qbf' ),

            'new_item'              => __( 'New qbfuserdata', 'qbf' ),

            'edit_item'             => __( 'Edit qbfuserdata', 'qbf' ),

            'view_item'             => __( 'View qbfuserdata', 'qbf' ),

            'all_items'             => __( 'All qbfuserdata', 'qbf' ),

            'search_items'          => __( 'Search qbfuserdata', 'qbf' ),

            'parent_item_colon'     => __( 'Parent qbfuserdata:', 'qbf' ),

            'not_found'             => __( 'No qbfuserdata found.', 'qbf' ),

            'not_found_in_trash'    => __( 'No qbfuserdata found in Trash.', 'qbf' ),

            'featured_image'        => _x( 'qbfuserdata Cover Image', '', 'qbf' ),

            'set_featured_image'    => _x( 'Set cover image', '', 'qbf' ),

            'remove_featured_image' => _x( 'Remove cover image', '', 'qbf' ),

            'use_featured_image'    => _x( 'Use as cover image', '', 'qbf' ),

            'archives'              => _x( 'qbfuserdata archives', '', 'qbf' ),

            'insert_into_item'      => _x( 'Insert into qbfuserdata', '', 'qbf' ),

            'uploaded_to_this_item' => _x( 'Uploaded to this qbfuserdata', '', 'qbf' ),

            'filter_items_list'     => _x( 'Filter qbfuserdata list', '', 'qbf' ),

            'items_list_navigation' => _x( 'qbfuserdata list navigation', '', 'qbf' ),

            'items_list'            => _x( 'qbfuserdata list', '', 'qbf' ),

        );

        $args = array(

            'labels'             => $labels,

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true, // this thing control the view : default true

            'show_in_menu'       => true,

            'query_var'          => true,

            'rewrite'            => array( 'slug' => 'QBF_User_data' ),

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 99, //null

            'show_in_rest'       => false,   //this thing control the view of add new option(true/false)

            /*'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),*/

            'supports'           => array( 'title', 'custom-fields',  'thumbnail'),

            'menu_icon'           => 'dashicons-code-standards',
            /*'menu_icon'           => 'http://www.example.com/wp-content/uploads/2014/11/your-cpt-icon.png',*/

            /*'show_in_menu'         => 'edit.php?post_type=courses',*/

        );

        register_post_type( __('qbfuserdata'), $args ); //this post type used on save user data
    }


    /*Drag and drop CPT */
    function qbf_dragNdropCpt(){
        $labels = array(

            'name'                  => _x( 'qbfdragndrop', 'Post type general name', 'qbf' ),

            'singular_name'         => _x( 'qbfdragndrop', 'Post type singular name', 'qbf' ),

            'menu_name'             => _x( 'qbfdragndrop', 'Admin Menu text', 'qbf' ),

            'name_admin_bar'        => _x( 'qbfdragndrop', 'Add New on Toolbar', 'qbf' ),

            'add_new'               => __( 'Add New', 'qbf' ),

            'add_new_item'          => __( 'Add New qbfdragndrop', 'qbf' ),

            'new_item'              => __( 'New qbfdragndrop', 'qbf' ),

            'edit_item'             => __( 'Edit qbfdragndrop', 'qbf' ),

            'view_item'             => __( 'View qbfdragndrop', 'qbf' ),

            'all_items'             => __( 'All qbfdragndrop', 'qbf' ),

            'search_items'          => __( 'Search qbfdragndrop', 'qbf' ),

            'parent_item_colon'     => __( 'Parent qbfdragndrop:', 'qbf' ),

            'not_found'             => __( 'No qbfdragndrop found.', 'qbf' ),

            'not_found_in_trash'    => __( 'No qbfdragndrop found in Trash.', 'qbf' ),

            'featured_image'        => _x( 'qbfdragndrop Cover Image', '', 'qbf' ),

            'set_featured_image'    => _x( 'Set cover image', '', 'qbf' ),

            'remove_featured_image' => _x( 'Remove cover image', '', 'qbf' ),

            'use_featured_image'    => _x( 'Use as cover image', '', 'qbf' ),

            'archives'              => _x( 'qbfdragndrop archives', '', 'qbf' ),

            'insert_into_item'      => _x( 'Insert into qbfdragndrop', '', 'qbf' ),

            'uploaded_to_this_item' => _x( 'Uploaded to this qbfdragndrop', '', 'qbf' ),

            'filter_items_list'     => _x( 'Filter qbfdragndrop list', '', 'qbf' ),

            'items_list_navigation' => _x( 'qbfdragndrop list navigation', '', 'qbf' ),

            'items_list'            => _x( 'qbfdragndrop list', '', 'qbf' ),

        );

        $args = array(

            'labels'             => $labels,

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,  // this thing control the view - previous it was true now i set to  

            'show_in_menu'       => true,

            'query_var'          => true,

            'rewrite'            => array( 'slug' => 'QBF_User_data' ),

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 99, //null

            'show_in_rest'       => false,   //this thing control the view of add new option(true/false)

            /*'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),*/

            'supports'           => array( 'title' , 'custom-fields', 'thumbnail'),

            'menu_icon'           => 'dashicons-image-rotate-left',
            /*'menu_icon'           => 'http://www.example.com/wp-content/uploads/2014/11/your-cpt-icon.png',*/

            /*'show_in_menu'         => 'edit.php?post_type=courses',*/

        );

        register_post_type( __('qbfdragndrop'), $args ); //this post type used on save user data
    }


    /**
     * Shortcode
     */

    public function qbf_slider_shortcode_generator($atts){


        ob_start();

        $shortcodeID = isset($atts['id']) ? intval($atts['id']) : null;

        if (!$shortcodeID) {
            return 'ID parameter not found.';
        }

        if (get_post_type($shortcodeID) !== 'qbfdragndrop') {
            return 'ID did not matched.';
        }

        if (get_post_status($shortcodeID) !== 'publish') {
            return 'Post is not public';
        }

        $dragData = unserialize(get_post_meta($shortcodeID)['drag_data'][0]);


        require_once("$this->plugin_path/templates/shortcode/slider-servey.php");

        echo "<link rel= 'stylesheet' href=\"$this->plugin_url/assets/Public/slider_style.css\"> ";
        
        echo "<script src=\"$this->plugin_url/assets/Public/slider.js\"><script>";
        // echo "<script src=\"$this->plugin_url/assets/Public/jquery.min.js\"><script>";
      
        
        return ob_get_clean();

    }


}

