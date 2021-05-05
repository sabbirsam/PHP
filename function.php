<?php
 /**  
  * Factorial
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