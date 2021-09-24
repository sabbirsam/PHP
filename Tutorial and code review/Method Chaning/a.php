<?php

include_once "function.php";


 /**
  * Method chaning example 1 string replace
 */

 class StringUtility{
    private $string;
    private $search;

    public function __construct($string)
    {
        $this->string=$string;
    }

    function search($search){
        $this->search=$search;
        return $this;
    }

    function replace($string){
       
        if(!isset($this->search)){
            throw new Exception("No text found");
        }

        $this->string= str_replace($this->search, $string, $this->string);
        return $this;

    }

    function upperCase(){
        $this->string=strtoupper($this->string);
        return $this;
    }

    function print(){
        echo $this->string;
    }

 }

 $s= new StringUtility("Hello Sabbir");

 $s->search("Hello")->replace("Hi")->upperCase()->print();

 
 /**
  * Method chaning same but modified example 
 */

class StringUtility{
    private $string;
    private $search;

    public function __construct($string)
    {
        $this->string=$string;
    }

    function search($search){
        $this->search=$search;
        return $this;
    }

    function replace($string){
       
        if(!isset($this->search)){
            throw new Exception("No text found");
        }

        $this->string= str_replace($this->search, $string, $this->string);
        $this->search="";
        return $this;

    }

    function upperCase(){
        $this->string=strtoupper($this->string);
        return $this;
    }

    function print(){
        echo $this->string;
    }

 }

 $s= new StringUtility("Hello Sabbir Ahmed");

 $s->search("Hello")
 ->replace("Hi")

 ->search("Ahmed")
 ->replace("sam")

 ->upperCase()
 ->print();

 //Hello Sabbir Ahmed
//  HI SABBIR SAM



 /**
  * Without -> IOC - Inversation of control / Dependency injection
 */

interface BaseStudent{
    function DisplayName();
}

class Student implements BaseStudent {
   private $name;
   function __construct($name){
       $this->name = $name;
   }

   function DisplayName(){
       echo "Hi I am ".$this->name;
   }
}

class StudentManager{
    function IntroduceStudent($name){
       $st = new Student($name); // here its instantiate an object with is not good and its a hard dependency, 
       $st->DisplayName();
    }
}

$sm = new StudentManager();
$sm->IntroduceStudent("Sabbir");
//Hi I am Sabbir


 /**
  * IOC - Inversation of control / Dependency injection  (FIX)
 */

interface BaseStudent{
    function DisplayName();
}

class Student implements BaseStudent {
   private $name;
   function __construct($name){
       $this->name = $name;
   }

   function DisplayName(){
       echo "Hi I am ".$this->name;
   }
}

//  class StudentManager{
//      function IntroduceStudent($name){
//         $st = new Student($name); // here its instantiate an object with is not good and its a hard dependency, 
//         $st->DisplayName();
//      }
//  }

class StudentManager{
   function IntroduceStudent($student){
       $student->DisplayName();
   }
}

$st = new Student("sam");

$sm = new StudentManager();
$sm->IntroduceStudent( $st);
//Hi I am sam

 /**
  * IOC - Inversation of control / Dependency injection
 */

interface BaseStudent{
    function DisplayName();
}


class NewStudent implements BaseStudent {
   private $name;
   private $from;
   function __construct($name, $from){
       $this->name = $name;
       $this->from = $from;
   }

   function DisplayName(){
       echo "Hi I am {$this->name} from {$this->from} ";
   }
}

class Student implements BaseStudent {
   private $name;
   function __construct($name){
       $this->name = $name;
   }

   function DisplayName(){
       echo "Hi I am ".$this->name;
   }
}

//  class StudentManager{
//      function IntroduceStudent($name){
//         $st = new Student($name); // here its instantiate an object with is not good and its a hard dependency, 
//         $st->DisplayName();
//      }
//  }

class StudentManager{
   function IntroduceStudent(BaseStudent $student){
       $student->DisplayName();
   }
}

$st = new Student("sam");
$nst = new NewStudent("sam","Dhaka");

$sm = new StudentManager();
$sm->IntroduceStudent( $st);  // or
$sm->IntroduceStudent( $nst);
//Hi I am Sabbir
//Hi I am sam from Dhaka 



 /**
  * Need to learn again and again 
 */

