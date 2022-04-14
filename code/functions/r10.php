<?php
  
$i = 0;

function repeatUntil(int $start): void {
  if($start>=10) {
    return; // exit without value
  }
  
  echo $start;
  repeatUntil(++$start);
}

repeatUntil($i);