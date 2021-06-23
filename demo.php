<?php
include_once "function.php";

/**  
  * Public  and private
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
