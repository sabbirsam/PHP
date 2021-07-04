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

 $sam = new Sabbir();
 Sabbir::Name("Hello");  //Output: My name is sam...Hello
 //Static function k instantiate or object diye call kora jabe na.   Oi class diye  call korte hbe  Sabbir::Name("Hello");
Sabbir::Address();

$sam->Mobile(); 
// My name is sam...Hello
// My name is sam...HIIIII--
// My name is sam...Good
// My name is sam...HIIIII--

