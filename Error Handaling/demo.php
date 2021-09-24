<?php

include_once "function.php";


 /**
  * Error Handaling. 
 */
error_reporting(0); // used to remove show error on browser and terminal
error_reporting(EP_ALL);// mane sob dekabe
echo $book;

// Find Ini file  php --ini
// or 
echo get_cfg_var("cfg_file_path");
// C:\wamp64\bin\php\php7.3.21\php.ini

echo get_cfg_var("cfg_file_path");
// C:\wamp64\bin\php\php7.3.21\php.ini



ini_set("display_errors",0);
 echo 12/0;
echo $book;




// Generate log 
/**
 * enable: log_errors = On
 * ;error_log = syslog  || error_log = syslog  (uncomment it, remove ;)
 */


 // Generate log 
/**
 * enable: log_errors = On
 * ;error_log = syslog  || error_log = syslog  (uncomment it, remove ;)
 * date.timezone ="Asia/Dhaka"
 * make directory 
 */

ini_set("display_errors",0);
ini_set("display_startup_errors",0);

echo $book;
echo 12/0;


/**
 * Custor error Handaler
 */



function custom_anyname_error_handler($severity, $msg, $file, $line ){

    echo "Error [{$severity}]: {$msg} in {$file} on line number{$line} ";

}
 set_error_handler('custom_anyname_error_handler');// here call the function

echo substr([1234],4);

/**
 * auto error generator
 */
trigger_error("This is an auto make error\n");// used to trigger error