<?php
include_once "function.php";


//11.18
/**
 * Object  Cloning ===============================================
 */


 class A {
     private $name;
     function __construct($get_name)
     {
            $this->name= $get_name;
     }

     function setName($get_name)
     {
        $this->name= $get_name;
     }
 }

//  $a = new A("Hello");
//  $b = $a ;

//  $b->setName("I am new one");

//  print_r($a);
//  print_r($b);

 /**
  * A Object
(
    [name:A:private] => I am new one
)
A Object
(
    [name:A:private] => I am new one
)
  */

//  now use clone to see the diff 

$a = new A("Hello");
 $b = clone $a ;

 $b->setName("I am new one");

 print_r($a);
 print_r($b);

 /**
  * A Object
(
    [name:A:private] => Hello
)
A Object
(
    [name:A:private] => I am new one
)

  */