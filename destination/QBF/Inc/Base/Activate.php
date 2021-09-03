<?php
/**
 * @package  questionnaire-based-filter
 */

namespace Inc\Base;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();

        if ( get_option( 'questionnaire_based_filter' ) ) {
            return;
        }

        if ( get_option('qbf_saved_data') ) {
            return;
        }


        $default = array();
        update_option( 'questionnaire_based_filter', $default );


	}

}