<?php

class CallableClass
{
    public function __invoke($x): void 
    {
        var_dump($x);
    }
}

$obj = new CallableClass();
$obj(5); // this will run __invoke method

// this class is callable
var_dump(is_callable($obj)); // true