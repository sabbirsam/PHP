<?php
include_once "function.php";


  /**  
  * Recursive function
 */


 echo PHP_EOL;

 function printNSO($start , $end, $step ){

    if($start >$end){
        return;
    }

    echo $start."\n";
    // $start = $start + $step;
    $start +=   $step;

    printNSO($start , $end, $step );

 }

 printNSO(6 , 12 , 3);