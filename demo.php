<?php
include_once "function.php";


//11.18
/**
 * Object  Cloning ===============================================
 */

class Name{
  public $name; 
    public function __construct($set_name)
    {
      $this->name = $set_name;
    }

    function Roll($set_name){
      $this->name = $set_name;
    }
}

$n = new Name("Sabbir");
$r = clone $n ;


print_r($n);
print_r($r);

$r ->Roll("Sam");

print_r($r);