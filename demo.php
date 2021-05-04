<?php

/**
 * Logical Modulas
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

