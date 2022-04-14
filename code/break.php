<?php

function printOddNumbers(): int {
  $i = 0;

  // this while will be executed forever
  while(true) {
    if($i>=10) {
      // but when i is >= 10 will exit loop
      break;
    }

    $i++;

    if($i%2 == 0) {
      // if i is even, while will do next iteration
      continue;
    }

    echo $i . ', ';
  }

  // Final printed string of program will be 1, 3, 5, 7, 9

  return $i;
}

$lastNumber = printOddNumbers();
$lastNumber === 9; // true