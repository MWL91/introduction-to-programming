<?php

echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world'); // outputs helloWorld

$functionAsVariable = function(string $param): string {
  return $param . $param;
};

echo $functionAsVariable('hello'); // hellohello

$number = 3;

$functionUsingVariable = function(string $text) use ($number): string {
  return str_repeat($text, $number);
};

echo $functionUsingVariable("A"); // AAA

$number = 10;
echo $functionUsingVariable("A"); // still AAA - it's not global parameter
