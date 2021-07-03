<?php
include_once "function.php";

/**  
  * Example of Abstract
*/

abstract class MyClass{
  public function time(){
    echo "Its time for Math class\n";
    
  }

  abstract function brkfast();
}


class Sam{
  public function time(){
    echo "Its time for English class\n";
  }
}


class Sabbir extends MyClass{
  public function time(){
    echo "Its time for English class\n";
    $this->brkfast();

  }

  function brkfast()
  {
    echo "Its time to take a break for breakfast\n";
  }
  //must impliment abstract method 
}

// $m = new MyClass();
// $m->time();
//give error . we can not call or instiantiate abstract class


$s = new Sabbir();
$s->time();

// Its time for English class
// Its time to take a break for breakfast