<?php
/**
 * 
 * Date anmd time 
 */

 
//  Unix time stamp= >  January 01 1970 theke time mane 00 theke ekhn  obdi koy sec par hyece seta Unix time stamp 
echo time();// 1624252305 second 

echo PHP_EOL;

echo microtime(true);// 1624252614.8602 micro second  
echo PHP_EOL;
echo microtime(false);// 0.50691400 1624252763 micro second  
echo PHP_EOL;
var_dump( microtime(false) );// string(21) "0.47925900 1624252819" micro second  

echo PHP_EOL;
/**
 * Date
 */
echo date('d/m/y'); //date month year  21/06/21

echo PHP_EOL;

echo date('d/F/Y'); //date Fullmonth Fullyear 21/June/2021



/**
 * -=========================Time complexity
 */

function sum($n){
    $total = 0;
    for($i = 1 ; $i < $n ; $i++){
        $total +=$i;
    }
    return $total;
}

$start = microtime(true);
echo (sum(4));
echo PHP_EOL;
$end = microtime(true);

$total = ($end - $start);

echo $total;

// 6
// 0.0006110668182373

/**
 * ================================
 */



 /**
 * ================================
 */



 /**
 * ================================
 */




 /**
 * ================================
 */





 /**
 * ================================
 */





 /**
 * ================================
 */




 /**
 * ================================
 */