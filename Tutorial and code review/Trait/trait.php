<?php
/**
 *   Trait-> from trait we can not make object so need class to use it
 */

trait Address{
    function Rangpur(){
        echo "Rangpur";
    }
    function Dhaka(){
        echo "Dhaka";
    }
}

class UseTrait{
    use Address;

}
// now make object of class and use it to call trait function 

$ob = new UseTrait();
$ob->Rangpur();

//Rangpur


/**
 *   Trait-> 
 */

trait Address{
    function Rangpur(){
        echo "Rangpur";
    }
    function Dhaka(){
        echo "Dhaka";
    }
}

trait Mobile{
   function MobileGP(){
       echo "MobileGP";
   }
   function MobileRobi(){
       echo "MobileGP";
   }
}

class UseTrait{
    use Address;
    use Mobile;

}
// now make object of class and use it to call trait function 

$ob = new UseTrait();
$ob->Rangpur();
$ob->MobileGP();

//Rangpur



/**
 *   Trait-> one trait can use another trait
 */

trait Address{
    function Rangpur(){
        echo "Rangpur";
    }
    function Dhaka(){
        echo "Dhaka";
    }
}

trait Mobile{
    use Address;
   function MobileGP(){
       echo "MobileGP";
   }
   function MobileRobi(){
       echo "MobileGP";
   }
}

class UseTrait{
    use Mobile;

}
// now make object of class and use it to call trait function 

$ob = new UseTrait();
$ob->Rangpur();


//Rangpur


/**
 *   Trait-> so one trait can use another trait private function 
 */

trait Address{
    private function Rangpur(){
        echo "Rangpur";
    }
    function Dhaka(){
        echo "Dhaka";
    }
}

trait Mobile{
    
   function MobileGP(){
       echo "MobileGP";
   }
   function MobileRobi(){

       $this->Rangpur(); // here
       echo "MobileGP";
   }
}

class UseTrait{
    use Mobile;

}
// now make object of class and use it to call trait function 

$ob = new UseTrait();
$ob->MobileRobi(); // give error as its Address is not used on class or 2nd trait



/**
 *   Trait-> so one trait can use another trait private function 
 */

trait Address{
    private function Rangpur(){
        echo "Rangpur";
    }
    function Dhaka(){
        echo "Dhaka";
    }
}

trait Mobile{

    use Address; // must need

   function MobileGP(){
       echo "MobileGP";
   }
   function MobileRobi(){

       $this->Rangpur(); // here
       echo "MobileGP";
   }
}

class UseTrait{
    use Mobile;

}
// now make object of class and use it to call trait function 

$ob = new UseTrait();
$ob->MobileRobi();
// so one trait can use another trait private function 

/**
 *   Trait-> one trait can use another trait
 */

trait Address{
    private function Rangpur(){
        echo "Rangpur";
    }
    function Dhaka(){
        echo "Dhaka";
    }
}

trait Mobile{

   function MobileGP(){
       echo "MobileGP";
   }
   function MobileRobi(){
       $this->Rangpur();
       echo "MobileGP";
   }
}

class UseTrait{
    use Address,  Mobile;

}


$ob = new UseTrait();
$ob->MobileRobi();



/**
 *   Trait-> override trait function on a class then class override one will call , but not the trait one
 */

trait Address{
   
    function Dhaka(){
        echo "Old Dhaka";
    }
}


class UseTrait{
    use Address;

   function Dhaka(){
       echo "new Dhaka";
   }

}


$ob = new UseTrait();
$ob->Dhaka();
//new Dhaka



/**
 *   Trait-> override trait function on a class then class extend another class which override the trait function then trait function will call , but not the ovverride one 
 */

trait Address{
   
    function Dhaka(){
        echo "Old Dhaka";
    }
}

class Another{
   function Dhaka(){
       echo "Another new Dhaka"; // here is override the trait
   }
}

class UseTrait extends Another{
    use Address; // trait call here and also it extend another class 
    

}


$ob = new UseTrait();
$ob->Dhaka();
//Old Dhaka   



trait Address{
   
    function Dhaka(){
        echo "Old Dhaka";
    }
}

class Another{
   function Dhaka(){
       echo "Another new Dhaka"; // here is override the trait
   }
}

class UseTrait extends Another{
    use Address; // trait call here and also it extend another class 

    function Dhaka(){
       echo "Another new Dhaka"; // here is override the trait
   }

}


$ob = new UseTrait();
$ob->Dhaka();
// Another new Dhaka  === as main class override the trait and extend another class which override the function on both trait and main class but main class will work
  
/**
 * // so from trait run the base class -> parent:: Dhaka(); 
 */

trait Address{
   
    function Dhaka(){
        echo "Old Dhaka";

        parent:: Dhaka(); // base class er mane Another ta
    }
    
}

class Another{
   function Dhaka(){
       echo "Another new Dhaka"; // here is override the trait
   }
}

class UseTrait extends Another{
    use Address; // trait call here and also it extend another class 

}


$ob = new UseTrait();
$ob->Dhaka();
//Old Dhaka
//Another new Dhaka  



/**
 *   Trait-> reuse or alias . change the trait function name and use it to call 
 */

trait Address{
   
    function Dhaka(){
        echo "Old Dhaka";
    }
    
}

class Another{
   function Dhaka(){
       echo "Another new Dhaka"; 
   }
}

class UseTrait extends Another{
   //  use Address;
    use Address{
       Dhaka as Dakka; // change the name which is called alias
    }

}


$ob = new UseTrait();
$ob->Dakka();
//Old Dhaka



/**
 *   Trait-> 
 */

trait Address{
   
    function Dhaka(){
        echo "Old Dhaka";
    }
    
}

trait Another{
   function Dhaka(){
       echo "Another new Dhaka"; 
   }
}

class UseTrait{
   
    use Address, Another{
       Address::Dhaka as Dakkka; 
       Another::Dhaka as Daka; 
    }
    function Dhaka(){
       echo "Another new Dhaka";  // must need to use same function here
   }

}


$ob = new UseTrait();
$ob->Daka();
//Old Dhaka

/**
 *   Trait-> Static
 */

trait Address{
   
    static $name;
 }


 class UseTrait{
    use Address;
 }


$a = UseTrait :: $name = 2;
echo $a;
//2


/**
 *   Trait->  abstract scope
 */

trait Address{
    abstract function Dhaka(); 
}


class UseTrait{
 use Address;
 function Dhaka(){
    echo "Another new Dhaka"; 
  }

 }

$ob = new UseTrait();
$ob->Dhaka();
