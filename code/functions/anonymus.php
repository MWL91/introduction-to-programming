<?php

$example = function (int $a, int $b): float {
    return $a * $b;
};

$exampleArrow = fn (int $a, int $b): float => $a / $b;

$executeTwoFunctions = fn (int $num1, int $num2): callable => fn (callable $one, callable $two) => $one($num1, $num2) + $two($num1, $num2);

var_dump($executeTwoFunctions(10, 5)($example, $exampleArrow));
