<?php
 
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