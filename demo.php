<?php
include_once "function.php";

/**  
  * Issue and fix
   */

 class Human{
    public $name; 
    public $age; 

    public function __construct($setName, $setAge=0){
            $this->name = $setName;
            $this->age = $setAge;
    }
    function work(){
        echo "I am on office\n";
        $this->setName();
    }

    function setName(){
        if($this->age){
            echo "My name is {$this->name}. I am {$this->age} years old"; 
        }else{
            echo "My name is {$this->name}"; 
        }
    }
 }


// Access or run 

$h1 = new Human("sabbir",18);


$h1->work();  


/**
I am on office
My name is sabbir. I am 15 years old

 */


