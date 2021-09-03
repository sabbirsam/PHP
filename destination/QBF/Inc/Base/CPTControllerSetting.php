<?php
/**
 * @package  questionnaire-based-filter
 */

namespace Inc\Base;
use Inc\Api\Callbacks\AdminCallbacks;
use \Inc\Api\SettingsApi;
use \Inc\Base\BaseController;

class CPTControllerSetting extends BaseController
{

    public $callbacks;   // TO call the callbacks so make a variable
    public $subpages = array();


    public function register()
    {

        /*if (! $this->activated('questionnaire_cpt')) return ;*/


        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();  

        $this->setSubpages();

        $this->settings->addSubPages( $this->subpages )->register();

    }

    public function setSubpages()
    {
        $this->subpages = array(
            array(
                'parent_slug' => 'questionnaire_based_filter',
                'page_title' => 'Create Forms',
                'menu_title' => 'Create Forms',
                'capability' => 'manage_options',
                'menu_slug' => 'questionnaire_based_filter_cqbf',
                'callback' => array( $this->callbacks, 'create_questionnaires_template' ), //adminCallback.php
            )
        );
    }
}
