<?php
include_once "function.php";


//11.18
/**
 * Iterator ->iteratorAggregate -> ArrayIterator
 */

class DistrictCollection{
    private $districts;

    function __construct(){
        $this->districts = array();
    }

    function Add($set_district){
        array_push($this->districts, $set_district);
    }

    function getDistrict(){
        return $this->districts;
    }

}

$addDis = new DistrictCollection;
$addDis->Add("Dhaka");
$addDis->Add("Mymensingh");
$addDis->Add("Rangpur");

// print_r($addDis->getDistrict()) ;
/**
 * 
Array
(
    [0] => Dhaka
    [1] => Mymensingh
    [2] => Rangpur
)

 */

//  $_tempData = $addDis->getDistrict();
//  foreach($_tempData as $dis){
//      echo $dis."\n";
//  }
 /**
Dhaka
Mymensingh
Rangpur
  */

//  Now lets try with object (addDis) and find:  But the below one is not working 


foreach($addDis as $dis){
    echo $dis."\n";
}

/**
 * Nothing is print so to fix follow the below code. 
 */