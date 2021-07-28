<?php

/**  
  * Class and object
  Class is a collection of objects. it is a blueprint or a set of instruction to build a specific type of object.
  Object helps us to determines the behavior of the class. It is self-contained component that consists of methods and properties to make a data useful. 
 */

class Human{
    function work(){
        echo "I am on office";
    }
 }

 Class Cat{
    function eat(){
        echo "mew mew give me food";
    }
 }

 Class Dog{
    function eat(){
        echo "gew gew give me food";
    }
 }


    $h1 = new Human();  //object
    $c1 = new Cat();    //object
    $d1 = new Dog();    //object

// Access or run 

$h1->work();  // to access we need - > to call the function inside the class
$c1->eat();  // to access we need - > to call the function inside the class
$d1->eat();  // to access we need - > to call the function inside the class


/**  
  * =======Access a class variable================================================================================
   */

  class Human{
    public $name;
   function work(){
       echo "I am on office\n";
   }
}


// Access or run 

$h1 = new Human();

$h1->work();  // to access we need - > to call the function inside the class
$h1->name="sabbir";//set the value 
echo $h1->name; // get the value

// I am on office
// sabbir

/**  
  * ===========This -> =======================================================================Start-----------------------------------------------------
   */

   /**  
  * Class and object
   */

 class Human{
    public $name;
   function work(){
       echo "I am on office\n";
   }

   function setName(){
       
       echo "My name is {$this->name}" ; // this must as it is accessing the same function inside the same class
   }
}


// Access or run 

$h1 = new Human();


$h1->work();  
$h1->name = "sabbir";//set the name data
$h1->setName();

/**
* I am on office
* My name is sabbir
*/


class Human{
    public $name;
   function work(){
       echo "I am on office\n";
       $this->setName();
   }

   function setName(){
       $this->name = "sam";
       echo "My name is {$this->name}" ; // this must as it is accessing the same function inside the same class
   }
}


// Access or run 

$h1 = new Human();


$h1->work();  
$h1->name = "sabbir";//set the name data

/**
I am on office
My name is
*/


// NOWWWWWW ===============================

class Human{
    public $name;
   function work(){
       echo "I am on office\n";
       $this->setName();
   }

   function setName(){
       $this->name = "sam";
       echo "My name is {$this->name}" ; // this must as it is accessing the same function inside the same class
   }
}


// Access or run 

$h1 = new Human();


$h1->work();  
$h1->name = "sabbir";//set the name data

/**
I am on office
My name is sam
*/


// OR -------------------------------------? 

class Human{
    public $name;
   function work(){
       echo "I am on office\n";
       $this->setName();
   }

   function setName(){
       $a = $this->name = "sam";
       echo "My name is {$a}" ; // this must as it is accessing the same function inside the same class
   }
}


// Access or run 

$h1 = new Human();


$h1->work();  
$h1->name = "sabbir";//set the name data

/**
I am on office
My name is sam
*/




// Another  -=-=================

class Human{
    public $name;
   function work(){
       echo "I am on office\n";
       $this->setName();
   }

   function setName(){
       echo "My name is {$this->name}" ; 
   }
}


// Access or run 

$h1 = new Human();



$h1->name = "sabbir";//set the name data

$h1->work();   // call last 

/**
I am on office
My name is sabbir
*/




class Human{
    public $name;
   function work(){
       echo "I am on office\n";
       $this->setName();
   }

   function setName(){
       echo "My name is {$this->name}\n" ; 
   }
}


// Access or run 

$h1 = new Human();
$h2 = new Human();



$h1->name = "sabbir";//set the name data
$h2->name = "Sam";//set the name data

$h1->work();  
$h2->work();  

/**
I am on office
My name is sabbir
I am on office
My name is Sam
*/


/**  
  * ===========This -> =======================================================================END-----------------------------------------------------
   */


/**  
  * ===========This -> =======================================================================END-----------------------------------------------------
   */

/**  
  * Issue and fix
   */

 class Human{
    public $name;
    function work(){
        echo "I am on office\n";
        $this->setName();
    }

    function setName(){
        echo "My name is {$this->name}\n" ; 
    }
 }


// Access or run 

$h1 = new Human();


$h1->work();  


/**
I am on office
My name is 

 */

//  Fix ============= By constructor 

/**  
  * Issue and fix
   */

  class Human{
    public $name;

    public function __construct($setName){
            $this->name = $setName;
    }
    function work(){
        echo "I am on office\n";
        $this->setName();
    }

    function setName(){
        echo "My name is {$this->name}\n" ; 
    }
 }


// Access or run 

$h1 = new Human("sabbir");


$h1->work();  


/**
I am on office
My name is sabbir

 */

//  Anoter example  By constructor 

  class Human{
    public $name; 
    public $age; 

    public function __construct($setName, $setAge){
            $this->name = $setName;
            $this->age = $setAge;
    }
    function work(){
        echo "I am on office\n";
        $this->setName();
    }

    function setName(){
        echo "My name is {$this->name}. I am {$this->age} years old"; 
    }
 }


// Access or run 

$h1 = new Human("sabbir", 15);


$h1->work();  


/**
I am on office
My name is sabbir. I am 15 years old

 */


//  OR fix ================================ By constructor 

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
// END -------------------------=========================----------------------------------



/**  
  *  -------------------------=========================Public  and private
 */




class Information{
    // public $money; 
    private $money; 

     

    public function __construct($setMoney=0){
            $this->money = $setMoney;
    }




    // public function AddMoney($add_money){
    //     $this->money += $add_money;
    //     echo PHP_EOL;

    // }

    private function AddMoney($add_money){
        $this->money += $add_money;
        echo PHP_EOL;

    }



    public function Widthdraw($w_money){
        $this->money -= $w_money;
        echo PHP_EOL;

    }

    public function Total(){
        echo "Total {$this->money}"."\n";

    }
 }


// Access or run 

$h1 = new Information(100);


$h1->Total(); //Total 100

// $h1->money= 200; // if it was public we can add from here. But if it was private then Uncaught Error: Cannot access private property Information::$money

$h1->AddMoney(100); // same if it was  Uncaught Error: Call to private method Information::AddMoney() from context
$h1->Total(); //Total 200



$h1-> Widthdraw(100);
$h1->Total(); //Total 200



/**  
  * Example of class object with Public and private 
*/

// $hex = #ff2356; // red green blue 

class Hex {
   
    public $color1="00";
    public $color2="00";
    public $color3="00";
    function __construct($set_c1,$set_c2,$set_c3){
        $this->color1 = $set_c1;
        $this->color2 = $set_c2;
        $this->color3 = $set_c3;
        $this->color();
    }

    private function color(){
        $col = sprintf("#%02x%02x%02x",$this->color1,  $this->color2, $this->color3); 
        echo $col;
    }
}

$res = new Hex(13, 0, 255);


// Another example 

/**  
  * Example of class object with Public and private 
*/

// $hex = #ff2356; // red green blue 

class RGB {
   
    private $color;
    private $red;
    private $green;
    private $blue;
    function __construct($colorCode=''){
        
        // $this->color = $colorCode; or 
        $this->color = ltrim($colorCode, '#' ); // color code e # k ignore korbw ty left side e trim kore nilam
        $this->paseColor();
        
       
       
    }

    // function getColor(){
    //     return $this->color;
    // }

    // function setColor($colorCode){
    //     $this->color = ltrim($colorCode, '#' );

    //     // color set hole call korbw eikan theke 
    //     $this->paseColor();
    // }

    private function paseColor(){
        // echo "Hello";
        $colors = sscanf($this->color,'%02x%02x%02x'); // used to set any kind of string, vag vag kore kaj kora jay = x is hexa decimal , 02 holo 2 gor k
        print_r($colors);
    }
}

$res = new RGB("#200237");



// Or  with some minor change 


/**  
  * Example of class object with Public and private 
*/

// $hex = #ff2356; // red green blue 

class RGB {
   
    private $color;
    private $red;
    private $green;
    private $blue;
    function __construct($colorCode=''){
        
        // $this->color = $colorCode; or 
        $this->color = ltrim($colorCode, '#' ); // color code e # k ignore korbw ty left side e trim kore nilam
        $this->paseColor();
        
       
       
    }

    // function getColor(){
    //     return $this->color;
    // }

    // function setColor($colorCode){
    //     $this->color = ltrim($colorCode, '#' );

    //     // color set hole call korbw eikan theke 
    //     $this->paseColor();
    // }

    private function paseColor(){
        // echo "Hello";
        if($this->color){
            // $colors = sscanf($this->color,'%02x%02x%02x'); // used to set any kind of string, vag vag kore kaj kora jay = x is hexa decimal , 02 holo 2 gor k
            list($this->red, $this->green, $this->blue ) = sscanf($this->color,'%02x%02x%02x'); // used to set any kind of string, vag vag kore kaj kora jay = x is hexa decimal , 02 holo 2 gor k
            echo $this->red;
            echo $this->green;
            echo $this->blue;
        }
    }
}

$res = new RGB("#ffef27");



// Some another modification -------------------------------------


/**  
  * Example of class object with Public and private 
*/


class RGB {
   
    private $color;
    private $red;
    private $green;
    private $blue;
    function __construct($colorCode=''){
        
        // $this->color = $colorCode; or 
        $this->color = ltrim($colorCode, '#' ); // color code e # k ignore korbw ty left side e trim kore nilam
        $this->paseColor();
    }


    function readRGBColor(){
        echo 
        "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }


    private function paseColor(){
        // echo "Hello";
        if($this->color){
            // $colors = sscanf($this->color,'%02x%02x%02x'); // used to set any kind of string, vag vag kore kaj kora jay = x is hexa decimal , 02 holo 2 gor k
            list($this->red, $this->green, $this->blue ) = sscanf($this->color,'%02x%02x%02x'); // used to set any kind of string, vag vag kore kaj kora jay = x is hexa decimal , 02 holo 2 gor k
            // echo $this->red;
            // echo $this->green;
            // echo $this->blue;

            // $this->showRGBColor();
        }else {
            list($this->red, $this->green, $this->blue ) = array(0,0,0);
        }
    }  

}

$res = new RGB("#ffef27");

$res->readRGBColor();
/***
 * Red = 255
Green = 239
Blue = 39
 */


class RGB {
   
    private $color;
    private $red;
    private $green;
    private $blue;
    function __construct($colorCode=''){
        
        // $this->color = $colorCode; or 
        $this->color = ltrim($colorCode, '#' ); // color code e # k ignore korbw ty left side e trim kore nilam
        $this->paseColor();
    }



    function getColor(){
        return $this->color;
    }


    function getRGBColor(){
        return array($this->red, $this->green, $this->blue);
    }


    function readRGBColor(){
        echo 
        "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }



    function setColor($colorCode){
        $this->color = ltrim($colorCode, '#' );

        // color set hole call korbw eikan theke 
        $this->paseColor();
    }

    private function paseColor(){
        // echo "Hello";
        if($this->color){
            // $colors = sscanf($this->color,'%02x%02x%02x'); // used to set any kind of string, vag vag kore kaj kora jay = x is hexa decimal , 02 holo 2 gor k
            list($this->red, $this->green, $this->blue ) = sscanf($this->color,'%02x%02x%02x'); // used to set any kind of string, vag vag kore kaj kora jay = x is hexa decimal , 02 holo 2 gor k
            // echo $this->red;
            // echo $this->green;
            // echo $this->blue;

            // $this->showRGBColor();
        }else {
            list($this->red, $this->green, $this->blue ) = array(0,0,0);
        }
    }

    function getRed(){
        return $this->red;
    }

    function getGreen(){
        return $this->green;
    }

    function getBlue(){
        return $this->blue;
    }


  

}

$res = new RGB("#ff0000");

$res->readRGBColor();
echo $res->getRed();

// END =================================================================================================XXXXXX================================


// ===============================================================INHERITANCE===============================

/**
 * // 11.5 Inheritance 
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

$sam = new Sam();
$sam->js();
// ===============================================================INHERITANCE===============================



/**  
  * Example of Inheritance : child class to parent class method call   parent::Name(); //this one is used to run parent function
*/


// 11.5 Inheritance : child class to parent class method call 


class parentClass {
    public function __construct()
    {
        $this->Name();
    }

    function Name(){
        echo "Hello from parent\n";
    }
}

class childClass extends parentClass{
    
    function Name(){
        echo "Hello from Child\n";
    }
}

$cc = new childClass();

// output: Hello from Child

// but how to run parent function Name; below :-

class parentClass {
    protected $name;
    public function __construct($setName)
    {
        $this->name= $setName;
        $this->Name();
    }

    function Name(){
        echo "Hello from parent {$this->name}\n";
    }
}

class childClass extends parentClass{
    
    function Name(){
        parent::Name(); //this one is used to run parent function
        echo "Hello from Child {$this->name}\n";
    }
}

$cc = new childClass("sam");

// out put: 
// Hello from parent sam
// Hello from Child sam


class parentClass {
    protected $name;
    public function __construct($setName)
    {
        $this->name= $setName;
        $this->Name();
    }

    function Name(){
        echo "Hello from parent {$this->name}\n";
    }
}

class childClass extends parentClass{
    
    function Name(){
        parent::Name(); //this one is used to run parent function
        echo "Hello from Child {$this->name}\n";
    }
}

$pp = new parentClass("sabbir");
// Hello from parent sabbir


$cc = new childClass("sam");

// out put: 
// Hello from parent sam
// Hello from Child sam




/**  
  * Example of Inheritance=========================================================================
*/

class Shape {

    protected $name;
    protected $area;
    public function __construct($get_name)
    { 
      $this->name= $get_name;
      $this->calculateArea();
      
    }
  
    public function getArea(){
      echo "This {$this->name}'s area is {$this->area}\n";
    }
  
    public function calculateArea(){}
  
  }
  
  class Triangle extends Shape {
    private $a, $b, $c;
    public function __construct($get_a, $get_b, $get_c){
        $this->a=$get_a;
        $this->b=$get_b;
        $this->c=$get_c;
  
        parent::__construct("Triangle");
        
    }
  
    public function calculateArea(){
      $perimeter = $this->a + $this->b + $this->c / 2 ; 
  
      $this->area = sqrt($perimeter * ($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c));
    }
  
  }
  
  class  square extends Shape{
    private $a, $b;
    public function __construct($get_a, $get_b){
      $this->a=$get_a;
      $this->b=$get_b;
  
      parent::__construct("square");
  }
  
  public function calculateArea(){
    $this->area = $this->a * $this->b;
  }
  
  }
  
  
  $t = new Triangle(1,2,3);
  $t->getArea();
  
  $s = new square(1,2);
  $s->getArea();
  


  
/**  
  * Example of Abstract---------------------------------------------------------------------
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



/**  
  * Final keyword is used to set it final so it can not be override==========================================
  *It can be used in abstract and non abstract class
*/

  abstract class Name{
  public function myName(){
    echo "My Team name Spiro";
  }
}

class sam extends Name{
  public function myName()
  {
    echo "My team name is Sam";  // override the method 
  }
}


$s = new Sam();
$s->myName();

//easily i can override it


// Now make final  ==================================================

abstract class Name{
  final public function myName(){
    echo "My Team name Spiro";
  }
}

class sam extends Name{
  public function myName()
  {
    echo "My team name is Sam";  // override the method 
  }
}


$s = new Sam();
$s->myName();

//Cannot override final method Name::myName() in C:\Users\sabbir\Desktop\Php\demo.php on line 16 



/**  
  * take onnly inheritance type class 
  * or work with only inheritance class
*/

class Shapes {
    private $shapes;
    function __construct()
    {
      $this->shapes = array();
    }
  
    function addShape($shape){ //all are added here
      array_push($this->shapes, $shape );
    }
  
    function totalShape(){
      return count($this->shapes);
    }
  }
  
  class Rectangale {
  
  }
  
  class triangale {
  
  }
  
  class Name{
  
  }
  
  $findshape = new Shapes();
  $findshape->addShape(new Rectangale());
  $findshape->addShape(new triangale());
  $findshape->addShape(new Name());
  
  echo $findshape->totalShape();
  
  // output: 3 but Name is not shape 
  
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
  // $findshape->addShape(new Name()); this will not work as it dont extend shape
  
  echo $findshape->totalShape();
  
  // output: 2 



  
/**  
  * 11.12 Interface==========================================
  * 
*/


//Interface  

interface  Sam{
  function demo();
  function demo1();
}

interface  Sabbir extends Sam{  // interface another interface k extend kore but class interface k implements kore
  function demo();

}

class Name implements Sam{
  function demo(){
      echo "Hi\n";
  }
  function demo1(){
    echo "Hello\n";
  }
}



$na = new Name();
echo $na instanceof Sam;  // 1 mane Name Sam k implements korese ty 1
$na -> demo();  //output: Hi

// $sa = new Sabbir();  // error bcz interface cannot instantiate or can not make any object so give an error
// echo $sa instanceof Sam;

/**  
  * 11.12 Interface-----------------------------------------------------------
  * 
*/

interface BaseAnimal{
  function isAlive();
  function canEat($param1 , $param2);
  function breed();
}

class Animal implements BaseAnimal{  // class e interface implement korte hy + all function same parameter wise declare korte hbe with body
  function isAlive(){}
  function canEat($param1 , $param2){}
  function breed(){}

  // those are same as BaseAnimal But have body{} 
 
}

interface BaseHuman extends BaseAnimal{  // one interface another interface k extends kore
    // any function delcare korlam 
    function canTalk();
}

class Human implements BaseHuman{  // here as Human implemensts only BaseHuman so canTalk need to declare here with body. But still it will generate an error. Bcz BaseHuman extends Animail
                                    // so BaseHuman all property need to call here as well
 
// need to call all function from Animal as BaseHuman extends Animal 
  function isAlive(){}
  function canEat($param1 , $param2){}
  function breed(){}

  function canTalk(){}

}




$h = new Human();
echo $h instanceof Animal; // 0 no
// // $h as Human did not impleemnts Animal in any way.

echo $h instanceof BaseHuman;  // output: 1 as HUman implements BaseHuman
echo $h instanceof BaseAnimal;  // output: 1 as HUman implements BaseHuman and this BaseHuman extends BaseAnimal so automatic Human implement the BaseAnimal: This is Polymorphism
// one object which is $h is represent BaseHuman and also BaseAnimal so 

$anima = new Animal(); //
echo $anima instanceof BaseAnimal;// 1 yes as Animal implement BaseAnimal
echo $anima instanceof Human;// 0 No as Animal doesnt extends  Human





/**
 * static ========================================= static to static call korte self:: use korbw , assign korte self:: use korbw.   $this-> hbe na.   ar call korte or instantiate korte Class::then oi obj k call korbw, joodio obj create koreo kora jay
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




/**
 * static = extends
 */



class Sabbir{
  private $hi ;
  static $hi2 ;
  private static $hi3 ;
  protected static $hi4 ;
  static function Name($n){
      self::$hi2=$n;  // static e public or other variable $this-> diye assign kora jabe na. or call kora.  use korte hbe self::   
      self::$hi3="he";
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



/**
 * How to declare constant inside the class----------------------------------------------------------
 */

// constant k static er moto kore call korte hy 

class MyClass{
  const CITY = "Hello";
}
echo MYClass::CITY;


/**
 * or
 */

// instantiate korar pore sei object :: kore use kora jay

class MyClass{
  const CITY = "Hello";
}
echo MYClass::CITY;
// or  
$m = new MyClass();
echo $m::CITY;


/**
 * How to declare constant inside the class
 */

// constant k static er moto kore call korte hy 

class MyClass{
  const CITY = "Hello";
  function call(){
      echo "hi from ".self::CITY;  //or 
      echo "hi from ".$this::CITY;
  }
}
echo MYClass::CITY;
// or  
$m = new MyClass();
$m->call();
echo $m::CITY;



//11.17
/**
 * Magic Method , reduce of using getter and setter ===================================================
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
// onk code likte hoilo 
  function setName($setName){
      $this->name = $setName;
  }

  function getName(){
      return $this->name;
  }



  function setRoll($setRoll){
      $this->roll = $setRoll;
  }

  function getRoll(){
      return $this->roll;
  }



  function setClass($setClass){
      $this->class = $setClass;
  }

  function getClass(){
      return $this->class;
  }
// onk code likte hoilo 
}

$r = new Student();
$r->setName("sam");
echo $r->getName();

//sam


// or 
$l = new Student("Sabbir",16,"Four");
echo $l->getName(); //Sabbir


// Normal way end
//  Now by following the magic method  =========================================

//11.17
/**
 * Magic Method , reduce of using getter 
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

  public function __get($prop)  //prop means property 
  {
      return $this->$prop;
  }

}


$l = new Student("Sabbir",16,"Four");
echo $l->roll; //16  but its private, but still is accessiable


// Now set   


/**
 * Magic Method ,setter  ((getter and setter))
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







//11.18
/**
 * Iterator ->iteratorAggregate -> ArrayIterator---------------------------------------------------Below one normal
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
      return new ArrayIterator($this->districts); //this is an abstract method of IteratorAggreate so need to im[plememt]
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




//11.18
/**
 * Iterator Count object
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

echo count($addDis);

// generate error  : count(): Parameter must be an array or an object that implements Countable  so need to implement countable 



// Fix  


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

echo count($addDis); // fix 



/**
 * Object Cloning 
 */


 
class A {
  private $name;
  function __construct($get_name)
  {
         $this->name= $get_name;
  }

  function setName($get_name)
  {
     $this->name= $get_name;
  }
}

//  $a = new A("Hello");
//  $b = $a ;

//  $b->setName("I am new one");

//  print_r($a);
//  print_r($b);

/**
* A Object
(
 [name:A:private] => I am new one
)
A Object
(
 [name:A:private] => I am new one
)
*/

//  now use clone to see the diff 

$a = new A("Hello");
$b = clone $a ;

$b->setName("I am new one");

print_r($a);
print_r($b);

/**
* A Object
(
 [name:A:private] => Hello
)
A Object
(
 [name:A:private] => I am new one
)

*/