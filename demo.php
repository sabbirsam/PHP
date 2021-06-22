<?php
include_once "function.php";

$d1 = new DateTime("15 june 2021");
$d2 = new DateTime("22 june 2021");

$difference = date_diff($d1, $d2);

echo $difference->format("%d");//7
echo $difference->format("%D");//07
echo $difference->format("%m month %D Days");//0 month 07 Days