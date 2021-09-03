<?php
/**
 * @package  questionnaire-based-filter
 */

namespace Inc\Base;
use Inc\Api\Callbacks\AdminCallbacks;
use \Inc\Api\SettingsApi;
use \Inc\Base\BaseController;

/*class Forms extends BaseController implements WP_List_Table*/

class Forms extends BaseController
{

    public $callbacks;   // TO call the callbacks so make a variable
    public $subpages = array();


    public function register()
    {

//        if (!$this->activated('questionnaire_forms')) return;


        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();  //call admin callback using callback variable

        $this->setSubpages();

        $this->settings->addSubPages($this->subpages)->register();


    }


    public function setSubpages()
    {
        $this->subpages = array(
            array(
                'parent_slug' => 'questionnaire_based_filter',
                'page_title' => 'Forms',
                'menu_title' => 'Forms',
                'capability' => 'manage_options',
                'menu_slug' => 'questionnaire_based_filter_forms',
                'callback' => array( $this->callbacks, 'qbf_forms' ), //adminCallback.php
            )
        );
    }
}
