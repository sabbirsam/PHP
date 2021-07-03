<?php
include_once "function.php";


// solutioon  

/**  
  * take onnly inheritance type class 
  * or work with only inheritance class
*/

class OnlyShape{

}
class Shapes {
  private $shapes;
  function __construct()
  {
    $this->shapes = array();
  }

  function addShape(OnlyShape $shape){  //means only OnlyShape will add here, jara OnlyShape k extends korbe tara sudu
    array_push($this->shapes, $shape );
  }

  function totalShape(){
    return count($this->shapes);
  }
}

class Rectangale extends OnlyShape {

}

class triangale extends OnlyShape{

}

class Name{

}

$findshape = new Shapes();
$findshape->addShape(new Rectangale());
$findshape->addShape(new triangale());
// $findshape->addShape(new Name());

echo $findshape->totalShape();

// output: 3 but Name is not shape 