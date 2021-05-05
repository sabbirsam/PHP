<?php

 /**  
  * Also can use function.php  in another file like demo and work here.  example demo/chap2 function.php
 */

function if_isEven($n){  //$n is parameter 
    if($n % 2 == 0){
        return true;
    }

    return false;  //here code is minimize

}


include_once "function.php";  //is used to call function.php

$x = 123;

if(if_isEven($x)){  //here $x is argument
   echo "even";
}else{
    echo "ODD";
}

/**  
  * ==========================================
 */

 /**  
  * Factorial with function 
 */

function fact($n){
    if(gettype($n)!= "integer"){
        return "Invalid";
    }
    $res = 1;
    for ($i = $n; $i >1 ; $i--){
        $res= $res * $i;
    }
    return $res;
}

include_once "function.php";

$x = "6";
echo "Factorial of {$x} =  ".fact($x);