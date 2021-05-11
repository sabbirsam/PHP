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

/**
 * Print OCTAL by using 0 before the value or %o 
 */

$n = 12;

$o = 012; //0 means octal , now use %d to print // or use %o 
printf("Number %d of octal is %d", $n,$o);  //Number 12 of octal is 10


$b = 13; //%o means hex print 
printf("Number of octal value is %o",$b);  //Number of octal value is 15

/**
 * Hexa Decimal so use 0x  and %d or // only use %x
 */
 
$n = 12;

$h = 0x2B; //0x means hex , now use %d to print
printf("Number %d of Hex value is %d", $n,$h);  //Number 12 of Hex value is 43

$b = 13; //%x means hex print 
printf("Number of hex value is %x",$b);  //Number of binary value is d

/**
 * Binary so just use %b
 */
$b = 13; //%b means binary print 
printf("Number of binary value is %b",$b);  //Number of binary value is 1101


/**
 * Printf variable swapping to set which function will run first
 */

$fname = "Sabbir";
$lname = "Ahmed";

printf("My name is %s %s" , $fname, $lname); //My name is Sabbir Ahmed
echo"\n";

printf("My name is %2$s %1$s" , $fname, $lname); //use %2$ and s to set which want to print first
//output: error PHP Notice:  Undefined variable: s in

// if i use "" then  Undefined variable error so use ' ' 
printf('My name is %2$s %1$s' , $fname, $lname); //use %2$ and s to set which want to print first
//output: My name is My name is Ahmed Sabbir



/**
 * Print upto that amount fraction point and also print value 0  first
 */

$a = 10;
$b = 20;

printf("a = %07d",$a);  //% then ki hbe 0 koto gor 7 ta total
echo"\n";
printf("b = %07d",$b); //% then ki hbe 0 koto gor 7 ta total
//  output  a = 0000010
//           b = 0000020

echo "\n";
printf("a = %07.2f",$a);  //% then ki hbe 0 koto gor 7 ta total with .2 gor fraction value
echo"\n";
printf("b = %07.2f",$b); //% then ki hbe 0 koto gor 7 ta total .2 gor fraction value

//outpu a = 0010.00
// b = 0020.00


/**
 * sprintf used to get it return. printf can not return but sprintf can be return
 */
$fname = "Sabbir";
$lname = "Ahmed";

$output = sprintf("My name is %s %s", $fname, $lname); //here value is return to output

echo $output;  // here value is return to output and now we can echo the return




/**
 * Logical Modulas======================Leap year===============
 */


$n = readline("Enter the value\n");

if ($n % 4 == 0){
    if($n % 100 != 0){
       printf( "%s is Leap year",$n);
    }else{
        if($n == 400){
            printf( "%s is  Leap year",$n);
        }
        else{
            printf( "%s is not Leap year",$n);
        }
    }
}else{
    printf( "%s is not Leap year",$n);
}
    

if($n % 4 !=0 && $n !=400 ) {
    printf( "%s is not Leap year",$n);
}else{
    printf( "%s is  Leap year",$n);
}

//&& -> true && true = True-> print hbe wow , others all false
if (true && true){
    echo "WOW";
}

//&& -> false || false  = false print hbe na , others all true
echo "\n";
if (false || false){
    echo "IUBAT";
}

echo "\n";


/**
 *Ternary Module=====================
 */

$k=10;

if(12 == $k){
    echo"Twelve";

}elseif(10 == $k){
    echo "Ten";
}else{
    echo"A number";
}

echo"\n";

$n = (12 == $k ) ? "Twelve" : (10 == $k) ? "Ten": "A number";
echo $n;



/**
 * Switch Case
 */

$k= "green";

switch( $k ){
    case 'red':
    case 'green':
        echo ucwords($k)." Color";
        break;
    case 'blue':
        echo"Blue Color";
        break;
        
       
    default:
        echo"not color";    
}   



/**
 * Switch Case
 */

$n= -11;
$k = abs($n) % 2;

switch( $k ){
    case 0:

        switch(true){
            case $n>0:
                echo"This is a positive even number ";
                break;
            case $n<0:
                echo"This is a negative even number ";
                break;

        }

        break; 

    default:
    switch(true){
        case $n>0:
            echo"This is a positive even number ";
            break;
        case $n<0:
            echo"This is a negative even number ";
            break;

    }

    break;   

}   

// or


switch(true){
    case ($k==0 && $n>0):
        echo"$n is a positive even number ";
        break;

    case ($k == 1 && $n<0):
        echo"$n is a positive ODD number ";
        break;
    case ($k == 0 && $n<0):
        echo"$n is a negative even number ";
        break;
    case ($k == 1 && $n<0):
        echo"$n is a negative odd number ";
        break;

}




$today = date("D"); //This work windows Todays Date wise
// $today = "Sat";  // this work directly
switch($today){
    case "Mon":
        echo "Today is Monday. Clean your house.";
        break;
    case "Tue":
        echo "Today is Tuesday. Buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday. Do some rest.";
        break;
    default:
        echo "No information available for that day.";
        break;
}


/**
 * new if ======================================
 */

$n=10;

if ($n%2 == 0):
   echo "Even";
   echo PHP_EOL; //new line
else:
   echo "Odd";
endif;

/**
 * new if 
 */

$n=10;

if ($n%2 == 0):
   echo "Even";
   echo PHP_EOL; //new line

elseif (true): 
   
else:
   echo "Odd";
endif;



/**
* If new
*/

if($n%2==0):
   ?>
       even
   <?php
else:
   ?>
   Odd
   <?php
endif;
     
 

/**
* Switch new
*/

switch ($n%2 ==0):
   case 0:
   echo "Even";
   echo PHP_EOL; //new line
   break;

   default:
   echo "Even";
endswitch;


/**
* 
* Ternary operator fix
*/
$n=10;
$result = ($n%2==0) ? "A" : (($n==11) ? "B" : "C");//always use () bracket at the end condition
echo $result;


/**
 * For Loop
 */

for ($i = 0; $i < 10; $i++ ){
    echo $i;
    echo "\n";
}

echo PHP_EOL;

/**
 * while 
 */

$i=0;
while($i<9){
    echo $i;
    $i++;
}


echo PHP_EOL;
 
/**
 *  do while
 */
$i = 0;
do{
    $i++;
    echo $i;
}while($i<10);


 
/**
 *  go to , need a line where it should go
 */

$i = 0;
a: $i++;
echo $i;
echo "\n";

if($i<10) goto a;

 /**
  * for loop with multiple condition at the same time
  */

  for($i=10,$j=1; $i>0; $i-=1,$j++){
    echo $i.":".$j;
    echo "\n";
}


 
/**  
 *  PHP 7 Specific Operator  <=>         =========================================start
 */

$x = 5;
$y = 9;
function graterOrsmaller($x , $y){
   if($x>$y ){
       return 1;
   }elseif ($x<$y) {
       return 0;
   }else{
       return -1;
   }
}


// now use the one of the below code to run 
if ( graterOrsmaller($x , $y)== 1){
    echo "$x is grater than $y";
}elseif (graterOrsmaller($x , $y)== 0) {
    echo "$x is equal  $y";
}else{
    echo "$x is smaller than $y";
}


/**
 * or
 */  


$res= $x <=> $y;
if ( $res== 1){
   echo "$x is grater than $y";
}elseif ( $res== 0) {
   echo "$x is equal  $y";
}else{
   echo "$x is smaller than $y";
}

/**  
 *  PHP 7 Specific Operator  <=>         ========================================= End
 */


 
 /**  
  * ternary colses on if else
 *  ternary Operator  isset(sam jodi hy) ? sam print koro : na hole default ta print koro
 */


$def_lat = 23.9;
$def_lon = 90.8;
// same thing in if else

if (isset($user_lat)){
    $lat = $user_lat;
}else{
    $lat = $def_lat;
}
echo $lat;


echo PHP_EOL;

/**  
 *  Ternary Operator  ? : ->     isset(sam jodi hy) ? sam print koro : na hole default ta print koro
 */

$def_lat = 23.9;
$def_lon = 90.8;

$user_lat; // this is the variable which will store user input 

$lat = isset($user_lat) ? $user_lat : $def_lat; 
//store = jodi $user_lat hy tahole $user_lat : na hole $def_lat

echo $lat;
echo PHP_EOL;


 /**  
  * Null colses     ??
 *  Null Operator   ??  
 */
$def_lat = 23.9;
$def_lon = 90.8;

$user_lat; // this is the variable which will store user input 

$lat = $user_lat ?? $def_lat; 
//store = jodi $user_lat hy tahole $user_lat ??  na hole $def_lat
echo $lat;


/**
 * String Length 15 ta ase eikane
 */
$name = "MD Sabbir Ahmed";
echo( strlen($name));
echo PHP_EOL;
// output: 15

/**
 * String word count 3 ta ase eikane
 */

$name = "MD Sabbir Ahmed";
echo ( str_word_count($name));
// output: 3
echo PHP_EOL;

/**
 * String replace
 */

$name = "MD Sabbir Ahmed";
$a =str_replace("MD" , "MUHAMMAD" , $name);  //word, ja diye replace korbw , jei string seta
echo $name;// same aase. MD Sabbir Ahmed
echo $a; //MUHAMMAD Sabbir Ahmed


// output: 3
echo PHP_EOL;

$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Display replaced string
echo str_replace("facts", "truth", $my_str);


/**
 * String str_replace with 4th parameter
 */
$my_str = 'If the sam do not fit the theory, change the sam.';
 
// Perform string replacement
echo str_replace("sam", "sabbir", $my_str, $count);

echo PHP_EOL;
 
// Display number of replacements performed
echo "The text was replaced $count times.";

//output: 
// If the sabbir do not fit the theory, change the sabbir.
// The text was replaced 2 times.


/**
 * Identical	$x === $y	True if $x is equal to $y, and they are of the same type
 */
$x = 25;
$y = 35;
$z = "25";
$k = 25;

// var_dump($x === $k); // Outputs: boolean True bcz both are int and both value are same 25
// var_dump($x === $y); // Outputs: boolean false both are int but not same value
// var_dump($x === $z); // Outputs: boolean false bith value are same but type is not same, one is int  , one is string

/**
bool(true) 
bool(false)
bool(false)
 */

echo PHP_EOL;
/**
 * 	Not identical	$x !== $y	True if $x is not equal to $y, or they are not of the same type
 */
$x = 25;
$y = 35;
$z = "25";
$k = 25;

// value can not be same for true 

var_dump($x !== $k); // Outputs: boolean false bcz both are equal value and type 
var_dump($x !== $y); // Outputs: boolean true both are int but value is not same 25  and 35
var_dump($x !== $z); // Outputs: boolean true both value are not same and type is not same, one is int  , one is string

/**
bool(false)
bool(true) 
bool(true) 
 */




 /**
 * Incrementing and Decrementing Operators
 */

$x = 10;
echo ++$x; // Outputs: 11   //Increments $x by one, then returns $x
echo "\n";
echo $x;   // Outputs: 11   // x is 10 and ++ age, barbe age then return hbe so 10 + 1 = 11 then return so output 11

echo "\n";
 
$x = 10;
echo $x++; // Outputs: 10  //Returns $x, then increments $x by one  // x is 10 and return so output 10
echo "\n";
echo $x;   // Outputs: 11 //  return 10 then increment so output is 11

echo "\n";

$x = 10;
echo --$x; // Outputs: 9   //Decrements $x by one, then returns $x
echo "\n";
echo $x;   // Outputs: 9
 

echo "\n";

$x = 10;
echo $x--; // Outputs: 10  //Returns $x, then decrements $x by one
echo "\n";
echo $x;   // Outputs: 9



/**
 * Spaceship Operator s
 * 1. spaceship operator <=> returns 0 if both operands are equal $x == $y it return 0
 * 2. 1 if the left is greater $x > $y , return 1
 * 3. -1 if the right is greater $x < $y , return -1 left is small then rigt
 * so========================== left choto -1, soman then 0 ar righnt choto 1.
 */

 /**
 *  1< 1 and 1==1 and 1> 1 = as both operand are equal so it will return 0
 */
echo 1 <=> 1; // Outputs: 0   


echo PHP_EOL;
/**
 * 1< 2   => true and 1 = 2  =>false and  1 > 2 => also false so first one is only true, so 1 less than 2. left is small then right so -1
 */
echo 1 <=> 2; // Outputs: -1
echo PHP_EOL;

/**
 * 
 */
echo 2 <=> 1; // Outputs: 1   1 if the left is greater $x=2 > $y=1 , return 1
echo PHP_EOL;
 
// Comparing Floats
/**
 * 
 */
echo 1.5 <=> 1.5; // Outputs: 0
echo PHP_EOL;

/**
 * 
 */
echo 1.5 <=> 2.5; // Outputs: -1
echo PHP_EOL;

/**
 * 
 */
echo 2.5 <=> 1.5; // Outputs: 1
echo PHP_EOL;
 
// Comparing Strings
/**
 * 
 */
echo "x" <=> "x"; // Outputs: 0
echo PHP_EOL;

/**
 * 
 */
echo "x" <=> "y"; // Outputs: -1
echo PHP_EOL;

/**
 * 
 */
echo "y" <=> "x"; // Outputs: 1
echo PHP_EOL;
