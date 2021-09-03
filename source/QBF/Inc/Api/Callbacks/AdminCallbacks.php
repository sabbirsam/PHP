<?php
/**
 * @package  questionnaire-based-filter
 */


namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{
    public function adminDashboard()
    {
        return require_once( "$this->plugin_path/templates/admin.php" );
    }



    public function create_questionnaires_template()
    {
        return require_once( "$this->plugin_path/templates/create_question.php" );

    }



    public function recommendedPlugin()
    {
        return require_once( "$this->plugin_path/templates/recommended-plugin.php" );
    }



    public function settings()
    {
        return require_once( "$this->plugin_path/templates/settings.php" );
    }

    public function qbf_forms()
    {
        return require_once( "$this->plugin_path/templates/qbf_forms.php" );
    }

    public function qbf_entries()
    {
        return require_once( "$this->plugin_path/templates/qbf_entries.php" );
    }
    public function user_entries()
    {
        return require_once( "$this->plugin_path/templates/qbf_user_entries.php" );
    }


}