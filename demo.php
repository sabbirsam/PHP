<?php
 

 /**  
  * Normal Function
 */


function oddEvenCalculation($n){
    if($n % 2 == 0){
        return 1;
    }else{
        return 0;
    }

}

$x = 10;

if(oddEvenCalculation($x)){
   echo "even";
}else{
    echo "ODD";
}


 /**  
  * Optimize Function
 */

echo PHP_EOL;


function isEven($n){  //$n is parameter 
    if($n % 2 == 0){
        return true;
    }

    return false;  //here code is minimize

}

$x = 9;

if(isEven($x)){  //here $x is argument
   echo "even";
}else{
    echo "ODD";
}


 /**  
  * Also can use function in another file and work here.  example function.php here defination is not declare but it has a body.
 */

echo PHP_EOL;

include_once "function.php";  //is used to call function.php

$x = 123;

if(if_isEven($x)){  //here $x is argument
   echo "even";
}else{
    echo "ODD";
}
