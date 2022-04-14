<?php

$num1 = 1;
$num2 = "1";

//$someCheck = !true && true;
$anotherCheck = $num1 === $num2 || $num1 == $num2;

$none = 'Nothing';

//var_dump($someCheck);

var_dump($none ?? "test");
