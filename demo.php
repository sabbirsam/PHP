<?php
include_once "function.php";


//11.17
/**
 * Magic Method , reduce of using getter and setter
 */

class Student{
    private $name;
    private $roll;
    private $class;

    public function __construct($setName='', $setRoll='', $setClass='')
    {
        $this->name = $setName;
        $this->roll = $setRoll;
        $this->class = $setClass;
    }

    // get so return korbe
    public function __get($prop)  //prop means property 
    {
        return $this->$prop;
    }

    // set mane set korbe
    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }
    

}


// $l = new Student("Sabbir",16,"Four");
// echo $l->roll; //16  but its private, but still is accessiable


$k = new Student();
$k->name = "sabbir\n";

echo $k->name; //sabbir 

$k->roll = "16\n";

echo $k->roll; //sabbir 

$k->class = "six\n";

echo $k->class; //sabbir 

// sabbir
// 16
// six