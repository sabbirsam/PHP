<?php 

setcookie("username","data", time()+40); // name, value, time in second 

echo $_COOKIE["username"]; // super global variable to call the  cookie with name 

//--------------


setcookie("username","data", 1); // delete

echo $_COOKIE["username"]; // super global variable to call the  cookie with name 

//-----------------

setcookie("username","data", time()+40, ''); // here demo 1 is anothe php file or can be a folder, so cookie will be availabe on that path only, '' same path or same directory

echo $_COOKIE["username"];



setcookie("username","data", time()+40, '/foldername/folderdemo1'); // here demo 1 is anothe php file or can be a folder, so cookie will be availabe on that path only

// echo $_COOKIE["username"];

