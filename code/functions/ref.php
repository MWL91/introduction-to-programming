<?php

$a = 0;

function nonRef(int $number): void {
  $number = 10; // $a will not change it's not referenct
}

function withRef(int &$number): void {
  $number = 10; // $a will be now 10 if passed
}

echo $a; // 0
nonRef($a);
echo $a; // still 0
withRef($a);
echo $a; // now 10