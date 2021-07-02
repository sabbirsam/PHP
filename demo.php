<?php
include_once "function.php";

/**  
  * Example of class object with Public and private 
*/


// 11.5 Inheritance 

class Work{
    protected $name="sa"; //only protected can be used on inheritance
    public function programming(){
        echo "Its time to programming\n";
    }

    public function Video(){
        echo "Its time to watch Video\n";
    }
}

class Sabbir extends Work{
    public function php(){
        echo "Its time to {$this->name}\n"; //use parent variable
    }
    public function programming(){
        echo "Its time to Sabbir ----programming\n";
    }
    
}

class Sam extends Work{
    public function js(){
        $this->name="hi";
        echo "Its time to {$this->name}\n"; //override parents variable 
    }
}


$call = new Work();
// $call->programming();


$sa = new Sabbir();
$sa->php();
$sa->programming();

$sam = new Sam();
$sam->js();
