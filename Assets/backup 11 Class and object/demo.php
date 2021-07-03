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
  

  