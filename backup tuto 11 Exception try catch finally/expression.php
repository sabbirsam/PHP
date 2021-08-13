<?php

/**
 *  Expression  ===============================================
 */


class Registration{

    public function __construct($name, $age)
    { 
        $this->name = $name ;

       if($age< 4){
           throw new Exception("Age is not valid");
       }
       $this->age = $age;
        
    }

   
}

try{
   $reg = new Registration("Sabbir",15);
}catch(Exception $e){
   echo " Age is lesser than 4\n";
}finally{
   echo "I will be run";
}


/**
 *  Expression with error code ===============================================
 */


class Registration{

    public function __construct($name, $age)
    { 
        $this->name = $name ;

       if($age< 4){
           throw new Exception("Age is not valid", 404);
       }
       $this->age = $age;
        
    }

   
}



try{
   $reg = new Registration("Sabbir",1);
   echo "age is valid";
}catch(Exception $e){
   // echo " Age is lesser than 4\n";
   // echo $e->getCode();

   echo $e->getCode().":"." Age is lesser than 4\n";
   
}
//404: Age is lesser than 4




/**
 *   Exception  ===============================================
 */

class Student{
    public function __construct( $name , $age)
    {

       $this->name = $name;

       if ($age<10) {
           throw new Exception("Age is less than 10", 404);
       }elseif($age > 20){
           throw new Exception("Too older");
       }
       $this->age = $age;
    }

}

try {
    $st = new Student("name", 1);
} catch (Exception $e) {
    echo "age is lesser than three\n";
    echo $e->getCode();
}finally{
    echo "It will run auto";
}

// end 


// getCode and getMessage Exception 

class Age{
    public $age;
    public function __construct( $age)
    {
        $this->age = $age;
        if($age < 10){
            throw new Exception("You are too yound", 101);
        }elseif($age > 20){
            throw new Exception("You are too old",102);
        }

    }
}

try{
    $age  = new Age(21);
}catch(Exception $e){
    echo $e->getMessage()."\n";
    echo $e->getCode();
}
    


/**
 *  Custom Expression ===============================================
 */


class MyException extends Exception{}
class NetworkException extends Exception{}

function testException(){
    throw new MyException();
}

try{
    testException();  // called here 
}catch(MyException $e){
    echo "My exception run and found";

}catch(NetworkException $e){
    echo "Network exception run and found";
}catch(Exception $e){
    echo "at the end eta rakbw so uporer exception er bahire hole eta run korbe";
}

//  * My exception run and found

/**
 *   Custom exception example Exception  ===============================================
 */

class olderException extends Exception{}
class younderException extends Exception{}

class Age{
    public $age;
    public function __construct( $age)
    {
        $this->age = $age;
        if($age < 10){
            throw new younderException();
        }elseif($age > 20){
            throw new olderException();
        }

    }
}

try{
    $age  = new Age(21);
}catch(younderException $e){
    echo "You are too yound";
}catch( olderException $e){
    echo "You are too old";
}




