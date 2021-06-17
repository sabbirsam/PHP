<?php
include_once "function.php";

/**  
  * ==========================  Seasson lifetime cycle set 
 */

session_name('sam');


session_start([
  'cookie_lifetime' => 30 //60 is second
]);

$_SESSION['name']="sam";

echo $_SESSION['name']; 

// check it on-> Application-> cookies-> 


