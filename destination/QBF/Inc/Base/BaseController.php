<?php
/**
 * @package  questionnaire-based-filter
 */
namespace Inc\Base;

class BaseController
{
    public $plugin_path;

    public $plugin_url;

    public $plugin;

    public $managers = array();

    public function __construct() {
        $this->plugin_path = plugin_dir_path( dirname( __FILE__, 2 ) );  // for add php file
	    $this->plugin_url = plugin_dir_url( dirname( __FILE__, 2 ) );  //for css, js
        $this->plugin = plugin_basename( dirname( __FILE__, 3 ) ) . '/questionnaire-based-filter.php';  //For Setting

        $this->managers = array(
                /**
                1. Basecontroller -> Create form and extend Base controller -> then set an admin_call_back ->  Init
                **/

             /*'questionnaire_forms'=>'Forms',
             'questionnaire_cpt'=>'Enable questionnaires',*/
             'questionnaire_recommended_plugin' => 'Recommended Plugin',
            //  'questionnaire_user_post' => 'Field Data',
             'questionnaire_template' => 'Template',

        );
    }

    /**
     * @param string $key
     * @return false
     * option-> get the id from option name
     */
    public function activated (string $key){
        $option = get_option(  'questionnaire_based_filter' );
        return isset($option[$key]) ? $option[$key] : false;
    }


}