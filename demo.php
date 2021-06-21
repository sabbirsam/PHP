<?php
include_once "function.php";

setcookie("username","data", time()+40, ''); // here demo 1 is anothe php file or can be a folder, so cookie will be availabe on that path only

echo $_COOKIE["username"];



