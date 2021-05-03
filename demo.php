<?php

define ("PI", 3.1416);

echo "this is PI and its value:".PI;// 1. simple way to print Constant
echo constant('PI'); // 2. another way to print PI

$PI= 'PI';

echo "My Constant value is {$PI('PI')}";// 3.to print constant inside a "".

