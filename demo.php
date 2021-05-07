<?php
include_once "function.php";


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