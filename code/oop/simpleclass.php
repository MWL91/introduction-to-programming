<?php

class SimpleClass
{
   public $var1 = 'hello ' . 'world'; 
   public $var2 = <<<EOD
hello world
EOD;
   public $var3 = 1+2;

   public $var4 = myConstant;
   public $var5 = [true, false];

   static $var6;
   readonly int $var7;
}