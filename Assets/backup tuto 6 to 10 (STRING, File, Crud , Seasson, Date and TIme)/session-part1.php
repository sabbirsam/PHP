<?php

/**  
  * ==========================  Seasson Start 
 */

session_start();

$_SESSION['name']= "Sabbir";

echo $_SESSION['name'];

//  result: go to browser and you will see the name 

//  Now 


//  now remove the  $_SESSION['name']= "Sabbir";

session_start();
echo $_SESSION['name'];
//  result: ioen ignito mode and go to browser and you will not see the name but in normal mode its there without the declare variable



/**  
  * ==========================  Seasson close 
 */

session_start();

// $_SESSION['name']= "Sabbir";

echo $_SESSION['name'];

session_destroy(); // use it to destroy, so after reload it will destroy


/**  
  * ==========================  Seasson 
 */

session_start();

$_SESSION['counter']=  $_SESSION['counter'] ?? 0; // null collease diye counter 
$_SESSION['counter']++;
echo $_SESSION['counter'];

// output: 1 2 3 4 5 6 per refresh it wil increase 

/**  
  * ==========================  =================================Seasson lifetime cycle set 
 */

session_name('myapp');

//  session_start();
session_start(array(
  'cookie_lifetime' => 30 //60 is second
));

// session_start([
//   'cookie_lifetime' => 30 //60 is second
// ]);

// $_SESSION['name']="sam";

echo $_SESSION['name'];

// output: 1 2 3 4 5 6 per refresh it wil increase 


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
/**  
  * ==========================  Call Seasson another place php
 */

session_name('sam');
session_start();
echo $_SESSION['name']; // It will work and  show the same name on another PHp file if we run