<?php

class RandomNumber
{
    protected int $min;
    protected int $max;
    private int $randomValue;
    private int $randRepeat = 0;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
        $this->rand();
    }

    protected function rand(): void
    {
        $this->randomValue = rand($this->min, $this->max);
    }

    public function get(): int
    {
        return $this->randomValue;
    }

    public function reRand(): void
    {
        $this->rand();
        $this->randRepeat++;
    }

    public function getRandRepetation(): int
    {
        return $this->randRepeat;
    }
}

final class RandomPercent extends RandomNumber
{
    public function __construct()
    {
        parent::__construct(0, 100);
        $this->rand();
    }
}


$firstRandomNumber = new RandomPercent();
echo "Random number is " . $firstRandomNumber->get() . " repeated: " . $firstRandomNumber->getRandRepetation() . "\n";

$firstRandomNumber->reRand();
echo "Random number is " . $firstRandomNumber->get() . " repeated: " . $firstRandomNumber->getRandRepetation() . "\n";
