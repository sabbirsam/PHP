<?php
 

 /**  
  * ternary colses on if else
 *  ternary Operator  isset(sam jodi hy) ? sam print koro : na hole default ta print koro
 */


$def_lat = 23.9;
$def_lon = 90.8;
// same thing in if else

if (isset($user_lat)){
    $lat = $user_lat;
}else{
    $lat = $def_lat;
}
echo $lat;


echo PHP_EOL;

/**  
 *  Ternary Operator  ? : ->     isset(sam jodi hy) ? sam print koro : na hole default ta print koro
 */

$def_lat = 23.9;
$def_lon = 90.8;

$user_lat; // this is the variable which will store user input 

$lat = isset($user_lat) ? $user_lat : $def_lat; 
//store = jodi $user_lat hy tahole $user_lat : na hole $def_lat

echo $lat;
echo PHP_EOL;


 /**  
  * Null colses     ??
 *  Null Operator   ??  
 */
$def_lat = 23.9;
$def_lon = 90.8;

$user_lat; // this is the variable which will store user input 

$lat = $user_lat ?? $def_lat; 
//store = jodi $user_lat hy tahole $user_lat ??  na hole $def_lat
echo $lat;