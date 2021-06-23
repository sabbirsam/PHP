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
