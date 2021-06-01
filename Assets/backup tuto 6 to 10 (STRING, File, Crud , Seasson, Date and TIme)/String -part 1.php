<?php
/**  
  * STRING Start=========== heardoc
 * <<<EOD

EOD;
 */
$name = "sabbir";
$heardoc = <<<EOD
my name is {$name} or $name //it work 
ahmed 
so its working perfectly 
and as you can see it works as new line and can be added multimple 
EOD;

echo  $heardoc;
/**
 * Output: 
my name is sabbir or sabbir //it work 
ahmed
so its working perfectly
and as you can see it works as new line and can be added multimple 
 */


 /**
  * Null doc
  */

$name = "sabbir";
$heardoc = <<<'EOD'
my name is {$name} or $name //it work 
ahmed 
so its working perfectly 
and as you can see it works as new line and can be added multimple 
EOD;

echo  $heardoc;
/**
 * output:
my name is {$name} or $name //it work like single semicolon so $name is treat as string 
ahmed 
so its working perfectly 
and as you can see it works as new line and can be added multimple 
 */




 /**  
  * =============================================================STRING  to print ASCII value
 *
 * 
 */
echo ord('A');//print ascii A value
echo PHP_EOL;
echo ord('a');
/**
65
97
 */
echo chr(65);//print ascii A value
echo PHP_EOL;
echo chr(97);

/**
 * output
A
a 
 */
 /**  
  * =============================================================STRING  to print substr
 *
 * 
 */
$name = "Sabbir Ahmed";

echo $name[0];// print S
echo $name[-1];// print d
print_r($name);//Sabbir Ahmed



//substr-> string, start, length

echo substr($name,9, 11); //med   ->  S=1 a=2 b=3 b=4 i=5 r=6   A=7 h=8 m=9 e=10  d=11 
echo PHP_EOL;
$a = strlen($name);
// echo $a; //12 

echo substr($name,9,$a-3);  //med  -> 12 - 3 = 9 so  and m=9 so start from 9 which is m
echo PHP_EOL;
echo substr($name,$a-3);  //med  -> 12 - 3 = 9 so  and m=9 so start from length dewa nai so last obdi jabe mane d obdi which is m  e  d


/**  
  * ========================================================STRING normal and Reverse
 * 
 */
$name = "Sabbir Ahmed";
//string, start, length

$len= strlen($name) ;  //karon length er cheye 1 ta word choto hte hbe ta na hole ekta error asbe Uninitialized string offset: 12
// Reverse String 
for ($i = 0; $i<$len; $i++){
    echo $name[$i];
}
// output  -> Sabbir Ahmed

/**  
  * ========================================================STRING Reverse
 * 
 */
$name = "Sabbir Ahmed";
//string, start, length

$len= strlen($name) -1;  //karon length er cheye 1 ta word choto hte hbe ta na hole ekta error asbe Uninitialized string offset: 12
// Reverse String 
for ($i = $len; $i>=0; $i--){
    echo $name[$i];
}
// output  -> demhA ribbaS



/**  
  * ========================================================STRING  Reverse easy way
 * 
 */
$name = "Sabbir Ahmed";
echo strrev($name);

// output  ->demhA ribbaS


/**  
  * ========================================================STRING tokenization or array te banano
 * 
 */
$name = "Sabbir Ahmed Sam";

$bangbo = explode(" ", $name);// delimeter, then string
print_r($bangbo);
// output  ->
/**
 * Array
(
    [0] => Sabbir
    [1] => Ahmed 
    [2] => Sam   
)
 * 
 */
$joinkorbw= join(" ",$bangbo);//glue and kake
echo $joinkorbw; //Sabbir Ahmed Sam

echo PHP_EOL;
// or 

$onnojoin = implode(" ",$bangbo);
echo $onnojoin; ////Sabbir Ahmed Sam

/**
 * ============Character wise banga
 */

echo PHP_EOL;
$name = "Sabbir Ahmed Sam";

$vanga = str_split($name);
print_r( $vanga );
/**
 * 
 * Array
(
    [0] => S
    [1] => a
    [2] => b
    [3] => b
    [4] => i
    [5] => r
    [6] =>
    [7] => A
    [8] => h
    [9] => m
    [10] => e
    [11] => d
    [12] =>
    [13] => S
    [14] => a
    [15] => m
)
 * 
 */

echo PHP_EOL;

$vanga = str_split($name, 1); // kake ar koto kore
print_r( $vanga );
/**
 * 
 * Array
(
    [0] => S
    [1] => a
    [2] => b
    [3] => b
    [4] => i
    [5] => r
    [6] =>
    [7] => A
    [8] => h
    [9] => m
    [10] => e
    [11] => d
    [12] =>
    [13] => S
    [14] => a
    [15] => m
)
 */

 
/**  
  * ========================================================Multiple Delimeter( , , . /)  use to divide string 
 * 
 */
$name = "Sabbir ,Ahmed ,Sam";

$a = strtok($name, " ,");  //string then token or delimeter
print_r($a);  //Sabbir then space , and it stop. coz to run full sring need to use while loop with condition
echo"\n";

while($a !== false){
  echo $a."\n";
  $a=strtok(" ,");//now use only delimeter, no need to add string agin here
}
/**
 * out put: 
Sabbir
Ahmed
Sam
 */

 /**  
  * ========================================================Preg_split  use to divide string 
 * 
 */
$name = "Sabbir ,Ahmed ,Sam";

$a = preg_split("/ |,/", $name);   //     || used  for separator then space then | then comma ,  

print_r ($name); // Sabbir ,Ahmed ,SamArray

print_r ($a);
/**
(
    [0] => Sabbir      
    [1] => 
    [2] => Ahmed       
    [3] => 
    [4] => Sam
)
 */


 /**  
  * ========================================================search string 
 * 
 */
$name = "My name is Sabbir Ahmed Sam sam";
echo strpos($name, "Sam"); //haystack, then niddle
// output  24
echo strpos($name, "sam"); //haystack, then niddle
// output  empty , not found as strpos is case sensative so to prevent it use 

// stripos
echo stripos($name, "sam"); //output 24
echo stripos($name, "sam", 24); //output 24
echo stripos($name, "Sam"); //output 24
echo strpos($name, "sam", 24); //output 28


/**  
  * ========================================================search string 
 * 
 */
$name = "My name is Sabbir Ahmed Sam sam";
$find =  strpos($name, "My"); //haystack, then niddle

if($find){
  echo "Found";
}else{
  echo "not found";
}
echo PHP_EOL;
// out put : found  

// now lets find the 0 value which is My 
if($find){
  echo "Found";
}else{
  echo "not found";
}
// not found but MY is there, this issue because it retunr 0 which means false so false means condition also false

// so to fix check if it is not false 
echo PHP_EOL;
if($find !== false){  // !== means false and type 2 ty check kore 
  echo "Found";
}else{
  echo "not found";
}
//Found

/**  
  * ========================================================search string  Reversaly
 * 
 */
$name = "My name is IS Sabbir Ahmed Sam sam";
$find =  strpos($name, "name"); //haystack, then niddle
echo $find; //3
echo PHP_EOL;
$find =  stripos($name, "IS"); //haystack, then niddle
echo $find; //8

echo PHP_EOL;
// strpos -> strrpos and stripos-> strripos used to find reversly
$find =  strrpos($name, "name"); //haystack, then niddle
echo $find; //3

echo PHP_EOL;
$find =  strripos($name, "IS"); //haystack, then niddle
echo $find; //11