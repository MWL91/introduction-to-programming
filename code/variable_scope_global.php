<?php
// global keyword
$a = 1;
$b = 2;

function exampleFunction()
{
    global $a, $b;

    $b = $a + $b;
} 

exampleFunction();
echo $b; // prints value 3 after adding 1 + 2 in function


// GLOBALS variable
$c = 1;
$d = 2;

function exampleFunctionOnGlobals()
{
    $GLOBALS['d'] = $GLOBALS['c'] + $GLOBALS['d'];
} 

exampleFunctionOnGlobals();
echo $d; // prints value 3 after adding 1 + 2 in function



