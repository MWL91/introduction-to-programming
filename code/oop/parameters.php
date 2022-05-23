<?php
  
class ExampleProporties
{
    public const X = 'const X value';

}

$ex = new ExampleProporties();
echo $ex::X;