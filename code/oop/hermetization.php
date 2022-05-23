<?php

class RandomHermetizated {
  
  private int $min;
  private int $max;
  private int $randomNumber;
  
  public function __construct(int $min, int $max) {
    $this->min = $min;
    $this->max = $max;
  }
  
  private function randNumber(): void {
    $this->randomNumber = rand($this->min, $this->max); 
  }
  
  public function getValue(): int {
    $this->randNumber();
    return $this->randomNumber;
  }
  
  public function setRange(int $min, int $max): int {
    $this->min = $min;
    $this->max = $max;
  }
  
}