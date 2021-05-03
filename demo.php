<?php

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