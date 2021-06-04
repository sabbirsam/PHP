<?php
include_once "function.php";

/**  
  * ==========================Removethe files
 */


$myFiles = "new4.txt"; //store the file then


if(file_exists($myFiles)){

  unlink($myFiles);
  echo"removed files";
    
}else{
  echo "ERROR: File cannot beFound.";
}


