<?php



include_once "function.php";


/**
 * static ========================================= static to static call korte self:: use korbw , assign korte self:: use korbw.   $this-> hbe na.   ar call korte or instantiate korte Class::then oi obj k call korbw
 */



 class Sabbir{
     private $hi ;
     static $hi2 ;
     static function Name($n){
         self::$hi2=$n;  // static e public or other variable $this-> diye assign kora jabe na. or call kora.  use korte hbe self::   
        echo "My name is sam...{$n}\n";
     }

     static function Address(){
        self::Name("HIIIII--"); // one static another static k call korte self:: use korbe
     }

     function Mobile(){
        $this->Name("Good");  // normal class static k $this-> diye call korte parbe or self:: diyeo parbe

        // or  
        self::Address();

    }
 }

class Sam extends Sabbir{
    // how to call static function after extedn 
    // parent::Address();  //direct call kora jasse na. error dibe so static function er viore onno class er static function use kora jabe
    static function UseToCallStaticn(){
        echo"Hi from Sam\n";
        parent::Address();
    }

}

Sam::UseToCallStaticn();
// output: 
// Hi from Sam
// My name is sam...HIIIII--