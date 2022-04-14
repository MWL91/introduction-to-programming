<?php

$a = 10;
$b = 4;

$value = $a / $b;
$restOfDiv = $a % $b;

$a = $a % $b;
$a = $a + $a;

var_dump($a);
//var_dump(floor($value), ceil($value));
