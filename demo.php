<?php

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



