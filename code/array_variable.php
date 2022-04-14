<?php

// assoc arrays
$a = array('a' => 1,  'b' => 2, 'c' => 3);
$b = ['d' => 4, 'e' => 5, 'f' => 6];
$c = ['a' => 1,  'b' => 2, 'c' => 3];

// numeric arrays
$num1 = [1, 2, 3];
$num2 = [4, 5, 6, 7];
$num3 = ["1", "2", "3"];

// join will be ['a' => 1,  'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6]
$join = $a + $b;

// join will add [0 => 1, 1 => 2, 2 => 3, 4 => 7]
// so final result will be [1, 2, 3, 7]
$nums = $num1 + $num2;


$a == $b;// false, you can not compare assoc array
$num1 == $num3; // true, the same keys and values
$num1 === $num3; // false, the same keys and values - other type
$num1 != $num3; // false, oposite of equality
$num1 <> $num3; // false, oposite of equality
$num1 !== $num3; // true, oposite of equality Non-identity