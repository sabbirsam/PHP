<?php

/**
 * @package  questionnaire-based-filter
 */

namespace Inc;

final class Init
{

    public static function get_services(){
        return array(
            Pages\Dashboard::class,
            Base\Enqueue::class,
            Base\Setting::class,
            Base\Forms::class,
            Base\CPTControllerSetting::class,
            Base\Entries::class,
            Base\CptuserPost::class,
            Base\Recommended_plugin::class


        );
    }

    public static function  register_services(){
        foreach ( self::get_services() as $class){
            $service = self::instantiate( $class );

            if( method_exists( $service, 'register')){
                $service->register();
            }
        }
    }

    private static function instantiate( $class ){
        $service = new $class();
        return $service;
    }
}






