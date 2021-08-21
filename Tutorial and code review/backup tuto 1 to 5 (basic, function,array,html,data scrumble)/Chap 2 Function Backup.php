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


function adeliveryItes($coffey="Cafecino" , $price="10"){
    echo "{$coffey} has been served with discount {$price}%";
}

include_once "function.php";
$a = "Cafe";
$b =" 10";
adeliveryItes($a , $b);


/**  
  * Factorial
 */

function facts($n){
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


 

  /**  
  * variable scope
 */

$a = "Sam";  //global scope
function variaScopeA(){
 
 echo $GLOBALS['a'];

}

variaScopeA();

echo PHP_EOL;
//  second ================  
echo PHP_EOL;

$a = "Sam";   //global scope
function variaScopeB(){

 global $a;

 echo $a; //work here
}

variaScopeB();

echo PHP_EOL;
//  Third ================

function variaScopeC(){

 $a = "sam loal"; //local scope
 echo $a ; //work here

}

variaScopeC();
echo $a ;// not work here if i didnt declare golabl

echo PHP_EOL;


//  4th ================  

echo PHP_EOL;


function statiScope(){

  $i = $i ?? 0 ;   //nul collease operator
 
  $i++;
  echo $i; 
  echo "\n"; 
}

statiScope();
statiScope();
statiScope();
//print = 1 1 1 

echo PHP_EOL;

function statiScopes(){
 static $i; //Static operator
  $i = $i ?? 0 ;   //nul collease operator
 
  $i++;
  echo $i; 
  echo "\n"; 
}

statiScopes();
statiScopes();
statiScopes();

 //print = 1 2 3


// Function ==================================================
 
function whatIsToday(){
    echo "Today is " . date('l', mktime());
    // echo "Today is " . date('l');
}
// Calling function
whatIsToday();

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

// example =====================================================
// Defining function    \"   =>  "      
function customFont($font, $size=1.5){
    echo "<p style=\"font-family: $font; font-size: {$size}em;\">Hello, world!</p>";
}
 
// Calling function
customFont("Arial", 2);
customFont("Times", 3);
customFont("Courier");
/**
 * <p style="font-family: Arial; font-size: 2em;">Hello, world!</p>
 * <p style="font-family: Times; font-size: 3em;">Hello, world!</p>
 * <p style="font-family: Courier; font-size: 1.5em;">Hello, world!</p>
 */



 
// array use in function==============================================
function divideNumbers($dividend, $divisor){
    $quotient = $dividend / $divisor;
    $array = array($dividend, $divisor, $quotient);
    return $array;
}
 
// Assign variables as if they were an array
list($dividend, $divisor, $quotient) = divideNumbers(10, 2);
echo $dividend."\n";  // Outputs: 10
echo $divisor."\n";   // Outputs: 2
echo $quotient."\n";  // Outputs: 5

/**
10
2 
5 

 */


//  Another exapple 
function myScore($a , $b){
    $c = $a + $b;
    $k = array($a , $b , $c);
    return $k;
}

list($a, $b , $c)=myScore(10, 10);
echo $a."\n";
echo $b."\n";
echo $c."\n";
// out put 
/**
 *  $a = 10   $b = 10  and $c = $a + $b = 10+10=20, so $c=20
10
10
20
 */

// Passing Arguments to a Function by Reference  &   => &$number

function selfMultiply($number){
    $number *= $number;
    return $number;
}
 
$mynum = 5;
echo $mynum; // Outputs: 5
 
selfMultiply($mynum);
echo $mynum; // Outputs: 25
/**
 * 5
 * 5
 */


// Passing Arguments to a Function by Reference  &   => &$number
 
function selfMultiplyq(&$number){
    $number *= $number;
    return $number;
}
 
$mynum = 5;
echo $mynum; // Outputs: 5
 
selfMultiplyq($mynum);
echo $mynum; // Outputs: 25
/**
 * 5
 * 25
 */



//  Example another =============================================================
function selfMultiplyz($number){
    echo $number * $number;
    
}
selfMultiplyz(5);
//output : 25

// now ===========================================without refferecne
function selfMultiplya($number){
    $number = $number * $number;
    return $number;
  
}
 
$mynum = 5;
echo $mynum; // Outputs: 5
 
selfMultiplya($mynum);
echo $mynum; // Outputs: 25

//output 5   5

// now ===========================================with refferecne
function selfMultiplyx(&$number){
    $number = $number * $number;
    return $number;
  
}
 
$mynum = 5;
echo $mynum; // Outputs: 5
 
selfMultiplyx($mynum);
echo $mynum; // Outputs: 25

//output 5   25

function selfMultiplys(&$n){ //here whatever value i use return must be same as it here
    var_dump($n);  
    $n =  $n * $n;
    var_dump($n);
    return $n;
}
$my = 5;
echo $my;
echo PHP_EOL;

selfMultiplys($my);
echo $my;




// Defining global function ===================================================
function test(){
    // global $greet;
    $greet = "Hello World!"; 
    echo $greet;
}
 
test(); // Outputs: Hello World!
 
//echo $greet; // Generate undefined variable error  //// global $greet; without declare it will generate error

// anoter example ========================================================


$greet = "Hello World!";
 
// Defining function
function tests(){
    global $greet;
    echo $greet;
}
 
tests();  // Generate undefined variable error
 
echo $greet; // Outputs: Hello World!



