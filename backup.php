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


 /**
  * addition substraction and all=============================================Start
  */

$a = 12;
$a+= 1;
$b = 6;
$c=$a+$b;
printf("Sum of %s is ",$a);
echo "\n";
printf("Sum of %s and %s is %s",$a,$b,$a+$b);
echo "\n";
printf("Sum of %s and %s is %s",$a,$b,$a-$b);
echo "\n";
printf("Sum of %s and %s is %s",$a,$b,$a*$b);
echo "\n";
printf("Sum of %s and %s is %s",$a,$b,$a/$b);
echo "\n";
printf("Sum of %s and %s is %s",$a,$b,$a%$b);
echo "\n";
printf("Sum of %s and %s is %s",$a,$b,$c);
echo "\n";


$a = 12;
$b=1;
$b+=$a+2;
echo ($a);
echo"\n";
echo ($b);



$a = 12;
$b=1;

$a++;
$b--;
echo "\n";
echo $a;
echo "\n";
$a--;
echo "\n";
echo $a;
echo "\n";

echo $b;

/**
  * addition substraction and all=============================================End
  */


// assignment operator with increment and decrement\

/**
 * $m = $n then 
 * $n = $n+1  
 * so output : m= 1, n=2
 */
$n = 1;
$m= $n++; //first m will be assign on n then  increase then n 
echo $m, "\n", $n; // meabs $m = $n then $n = $n+1  so output : m= 1, n=2


echo "\n";

/**
 *  
 * $n = $n+1 
 * $m = $n then 
 * so output : m= 1, n=2
 */
$n = 1;
$m= ++$n;  //first n will increase then m = n

$n = 1;
$m= ++$n;

echo $m, "\n", $n;// $n= $n + 1 $n then $m=$n  //so output 2 2


/**
 * m = n then
 * n=m - 1
 */
$n = 1;
$m= $n--;
echo $m, " \n",$n;


//n=n-1 then m = n   so 0  0
$n = 1;
$m= --$n;

//n=n-1 then m = n   so 0  0
echo $m ,"\n" , $n;

