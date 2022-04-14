<?php
  
function summary(float ...$values) {
  $result = 0;
  foreach($values as $value) {
    $result += $value;
  }
  return $result;
}

function multiply(float ...$values) {
  $result = 1;
  foreach($values as $value) {
    $result *= $value;
  }
  return $result;
}

function calculator(string $operator, float ...$values) {
  switch($operator) {
    case '*': return multiply(...$values);
    case '+': return summary(...$values);
  }
}

echo calculator('*', 5, 5);