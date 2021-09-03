<?php
/**
 * @package  questionnaire-based-filter
 */
/*
Plugin Name: Questionnaire Based Filter
Plugin URI: http://wppool.dev
Description: Questionnaire Based Filter plugin allows filter wise search of any product of woocommerce. It has Drag and drop form build option.
Version: 1.0.0
Author: WPPOOL
Author URI: http://wppool.dev
Requires at least: 5.0
Requires PHP:      5.4
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain: qbf
 */

/*

This program is free software. But you can not redistribute it and/or modify it under the terms of the GNU General Public License
as published by the WPPOOL; either version 2 of the liense, or (at your option) ant later version.

Copyright 2021 WPPOOL
 */


/**
 * Exit if anyone try to access it directly.
 */
defined('ABSPATH') or die('Hey, what are you doing here? You silly human!');

function qbf_load_textdomain(){
    load_plugin_textdomain('qbf', false,dirname(__FILE__)."languages");
}

add_action("plugins_loaded", "qbf_load_textdomain");


/**
 * Auto Loader
 */
if (file_exists(dirname(__FILE__).'/vendor/autoload.php')) {
    require_once dirname(__FILE__).'/vendor/autoload.php';
}


/**
 * 
 * Page redirecting after active the plugin
 */

add_action('activated_plugin', function ($plugin) {
    if (plugin_basename(__FILE__) == $plugin) {
        wp_redirect(admin_url('admin.php?page=questionnaire_based_filter'));
        die();
    }
});


/**
 * Base Loader
 */
if (file_exists(dirname(__FILE__).'/Inc/Base/load.php')) {
    require_once dirname(__FILE__).'/Inc/Base/load.php';
}


