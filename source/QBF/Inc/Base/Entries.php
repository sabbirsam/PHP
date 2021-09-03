<?php
/**
 * @package  questionnaire-based-filter
 */

namespace Inc\Base;
use Inc\Api\Callbacks\AdminCallbacks;
use \Inc\Api\SettingsApi;
use \Inc\Base\BaseController;

/*class Forms extends BaseController implements WP_List_Table*/

class Entries extends BaseController
{

    public $callbacks;   // TO call the callbacks so make a variable
    public $subpages = array();


    public function register()
    {
        if (! $this->activated('questionnaire_template')) return ;

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
                'page_title' => 'Template',
                'menu_title' => 'Template',
                'capability' => 'manage_options',
                'menu_slug' => 'questionnaire_based_filter_entries',
                'callback' => array( $this->callbacks, 'qbf_entries' ), //adminCallback.php
            )
        );
    }
}
