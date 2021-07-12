<?php
include_once "function.php";


//11.18
/**
 * Iterator Count object
 */

class DistrictCollection implements IteratorAggregate, Countable{  //fix
    private $districts;

    function __construct(){
        $this->districts = array();
    }

    function Add($set_district){
        array_push($this->districts, $set_district);
    }


    function getIterator()
    {
        return new ArrayIterator($this->districts);
    }

    function count()
    {
        return count($this->districts); //fix 
    }

}

$addDis = new DistrictCollection;
$addDis->Add("Dhaka");
$addDis->Add("Mymensingh");
$addDis->Add("Rangpur");
$addDis->Add("Rangpur");
$addDis->Add("Rangpur");
$addDis->Add("Rangpur");
$addDis->Add("Rangpur");
$addDis->Add("Rangpur");
$addDis->Add("Rangpur");

echo count($addDis); // fix 



// Now 11.20 Object cloning 