<?php
/**  
  * STRING Start=========== heardoc
 * <<<EOD

EOD;
 */
$name = "sabbir";
$heardoc = <<<EOD
my name is {$name} or $name //it work 
ahmed 
so its working perfectly 
and as you can see it works as new line and can be added multimple 
EOD;

echo  $heardoc;
/**
 * Output: 
my name is sabbir or sabbir //it work 
ahmed
so its working perfectly
and as you can see it works as new line and can be added multimple 
 */


 /**
  * Null doc
  */

$name = "sabbir";
$heardoc = <<<'EOD'
my name is {$name} or $name //it work 
ahmed 
so its working perfectly 
and as you can see it works as new line and can be added multimple 
EOD;

echo  $heardoc;
/**
 * output:
my name is {$name} or $name //it work like single semicolon so $name is treat as string 
ahmed 
so its working perfectly 
and as you can see it works as new line and can be added multimple 
 */




 /**  
  * =============================================================STRING  to print ASCII value
 *
 * 
 */
echo ord('A');//print ascii A value
echo PHP_EOL;
echo ord('a');
/**
65
97
 */
echo chr(65);//print ascii A value
echo PHP_EOL;
echo chr(97);

/**
 * output
A
a 
 */

 