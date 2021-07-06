<?php
include_once "function.php";


//11.18
/**
 * Iterator ->iteratorAggregate -> ArrayIterator
 */

class DistrictCollection implements IteratorAggregate{
    private $districts;

    function __construct(){
        $this->districts = array();
    }

    function Add($set_district){
        array_push($this->districts, $set_district);
    }

    // function getDistrict(){
    //     return $this->districts;  // no need this /** */
    // }

    function getIterator()
    {
        return new ArrayIterator($this->districts);
    }

}

$addDis = new DistrictCollection;
$addDis->Add("Dhaka");
$addDis->Add("Mymensingh");
$addDis->Add("Rangpur");

foreach($addDis as $dis){
    echo $dis."\n";
}

/**
Dhaka
Mymensingh
Rangpur
 */