<?php

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