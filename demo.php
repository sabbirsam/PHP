<?php
include_once "function.php";

/**  
  * ========================================================search string  Reversaly
 * 
 */
$name = "My name is IS Sabbir Ahmed Sam sam";
$find =  strpos($name, "name"); //haystack, then niddle
echo $find; //3
echo PHP_EOL;
$find =  stripos($name, "IS"); //haystack, then niddle
echo $find; //8

echo PHP_EOL;
// strpos -> strrpos and stripos-> strripos used to find reversly
$find =  strrpos($name, "name"); //haystack, then niddle
echo $find; //3

echo PHP_EOL;
$find =  strripos($name, "IS"); //haystack, then niddle
echo $find; //11