<?php
/**
 * Print Constant value ============================================================Start
 */
define ("PI", 3.1416);

echo "this is PI and its value:".PI;// 1. simple way to print Constant
echo constant('PI'); // 2. another way to print PI

$PI= 'PI';

echo "My Constant value is {$PI('PI')}";// 3.to print constant inside a "".

/**
 * Print Constant value ================================================================End
 */

/**
 * Printf use ================================================================Start
 */

$name = "Sabbir Ahmed";
//%s is only work on printf 
//printf is need to show funtion easily exm: strtoupper function which is not possible in this way on echo
printf("My name is %s",$name);
printf("My name is %s", strtoupper($name));




// second example
$name = "Sabbir Ahmed";
$uname = strtoupper($name);
//%s is only work on printf 
//printf is need to show funtion easily exm: strtoupper function which is not possible in this way on echo
printf("My name is %s",$uname);
printf("My name is %s", strtoupper($name));




// Third Example
$name = "Sabbir Ahmed";
$fname= "Sabbir";
$lname= "Ahmed";
$uname = strtoupper($name);
//%s is only work on printf 
//printf is need to show funtion easily exm: strtoupper function which is not possible in this way on echo
printf("My name is %s",$uname);
echo"\n";
printf("My name is %s", strtoupper($name));
echo"\n";
printf("MY %s name is %s %s","Full",$fname,$lname);//output: MY Full name is Sabbir Ahmed

/**
 * Printf use ================================================================Start
 */
