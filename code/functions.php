<?php

function example(int $a, int $b): int {
  return $a + $b;
}

$example = fn(int $a, int $b): int => $a + $b; 

echo example(1, 2); // 3
echo $example(1, 2); // 3
