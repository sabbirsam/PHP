<?php
include_once "function.php";


//  

function sum($n){
    $total = 0;
    for($i = 0 ; $i <= $n ; $i++){
        $total +=$i;
        $i++;
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