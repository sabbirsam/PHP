<?php
/**
 * @package  questionnaire-based-filter
 */

namespace Inc\Pages;

use Inc\Base\BaseController;
use \Inc\Api\SettingsApi;
use Inc\Api\Callbacks\AdminCallbacks;
use Inc\Api\Callbacks\ManagerCallbacks;

class Dashboard extends BaseController
{
    /**
     * variable
     */
    public $settings;
    public $callbacks;
    public $callbacks_mngr;

    public $pages = array();
//    public $subpages = array();

    /**
     * Register all
     */

    public function register()
    {
        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();  //call admin callback using callback variable


        $this->callbacks_mngr = new ManagerCallbacks();  //call admin callback using callback variable


        $this->setPages();

//        $this->setSubpages();


        $this->setSettings();
        $this->setSections();
        $this->setFields();

        $this->settings->addPages( $this->pages )->withSubPage( 'Settings' )->register();
        //$this->settings->addPages( $this->pages )->withSubPage( 'Dashboard' )->addSubPages( $this->subpages )->register();
    }

    /**
     * set menu pages
     */


    public function setPages()
    {
        $this->pages = array(
            array(
                'page_title' => 'QBF Plugin',
                'menu_title' => 'QBF',
                'capability' => 'manage_options',
                'menu_slug' => 'questionnaire_based_filter',
                'callback' => array( $this->callbacks, 'adminDashboard' ),
//                'icon_url' => 'dashicons-buddicons-topics',
                'icon_url' => $this->plugin_url . './assets/Media/un.png',
                'position' => 110
            )
        );
    }

    public function setSettings()
    {

        $args = array(
            $args [] = array(
                'option_group' => 'questionnaire_settings',
                'option_name' => 'questionnaire_based_filter',   //use from setFields()=> page /must same name as custom field in AdminCallbacks.php
                'callback' => array( $this->callbacks_mngr, 'questionnairecheckboxSanitizer' )
            )
        );

        $this->settings->setSettings( $args );

    }



    public function setSections()
    {
        $args = array(
            array(
                'id' => 'questionnaire_admin_index',
                'title' => 'Settings manager',
                'callback' => array( $this->callbacks_mngr, 'questionnaireAdminSectionManager' ),
                'page' => 'questionnaire_based_filter'  //use menu slug of first page -> questionnaire_based_filter
            ),

        );

        $this->settings->setSections( $args );
    }


    public function setFields()
    {
        $args = array();
        //$key=>$value
        foreach ($this->managers as $key=>$value){
            //  var_dump($key);
            $args [] = array(
                'id' => $key, //need to same as SetSetings option name -> questionnaire_gmail
                'title' => $value,
                'callback' => array( $this->callbacks_mngr, 'questionnairecheckboxField' ),  //inthe managerCallbacks
                'page' => 'questionnaire_based_filter', //same as SetSections
                'section' => 'questionnaire_admin_index', //same id of setSection
                'args' => array(

                    'option_name'=> 'questionnaire_based_filter',
                    'label_for' => $key,
                    'class' => 'ui-toogle'
                )
            );
        }
        $this->settings->setFields( $args );
    }
}


