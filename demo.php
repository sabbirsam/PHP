<?php
include_once "function.php";

/**  
  * STRING access individually
 * 
 */
$name = "Sabbir Ahmed";

echo $name[0];// print S
echo $name[-1];// print d

//  ============================print from start to end ============================
/**
 * // with substr
 */

echo substr($name,0,4);//0 mane S then 4 mane count from S and make it 1 then 2 is a then b is 3 then 4 is b
// output     Sabb

//=====================================other way to print
PHP_EOL;
$name = "Ahmed";
$length = strlen($name);
echo substr($name, $length-1); //length mane Ahmed = 5 length so 5-1=4 which is d 0 => ,1 ,2 ,3 ,4 = d
PHP_EOL; PHP_EOL; PHP_EOL;
echo substr($name, -3,2);  //me => Ahmed so -3 = m pich theke count hbe and 2 = e // - dewa mane picon theke suru hbe

