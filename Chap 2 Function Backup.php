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
  * Factorial with function and type hinting   gettype($n)
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


 /**  
  * function of default parameter
 */


function deliveryItes($coffey="Cafecino" , $price="10"){
    echo "{$coffey} has been served with discount {$price}%";
}

include_once "function.php";
$a = "Cafe";
$b =" 10";
deliveryItes($a , $b);


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

 /**  
  * function of default parameter
 */


function deliveryItes($coffey="Cafecino" , $price="10"){
    echo "{$coffey} has been served with discount {$price}%";
}



 /**  
  *Unlimited parameter pass   ...$num     and   :int     means return type is int
 */


 function sum( ...$num):int {
     $result = 0;
     for($i = 0; $i < count($num) ; $i++){
        $result = $result + $num[$i];
     }
    return $result;

 }

 echo sum(4,5,10);

echo PHP_EOL;

  /**  
  * Divide Function ======================
 */

function codeA(){
    echo "Code A\n";
}
function codeB(){
    echo "Code B\n";
}
function codeC(){
    echo "Code C\n";
}
function codeD(){
    echo "Code D\n";
}

function allCode(){
    codeA();
    codeB();
    codeC();
    codeD();
}

allCode();

 /**  
  * Divide Function ======================End
 */

 

  /**  
  * Recursive function
 */

function printN($i){

    if($i >10){
        return;
    }

    echo $i."\n";
    $i++;

    printN($i);

 }

 printN(1);

 echo PHP_EOL;

 function printNS($start , $end ){

    if($start >$end){
        return;
    }

    echo $start."\n";
    $start++;

    printNS($start , $end);

 }

 printNS(6 , 12);


 echo PHP_EOL;

 function printNSO($start , $end, $step ){

    if($start >$end){
        return;
    }

    echo $start."\n";
    // $start = $start + $step;
    $start +=   $step;

    printNSO($start , $end, $step );

 }

 printNSO(6 , 12 , 3);