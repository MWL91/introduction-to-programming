<?php

interface Walk
{
    public function walk(): void;
}

interface Friend extends Walk
{
    public function walkWithSomeone(Walk $someone): void;
}

interface Fly
{
    public function fly(): void;
}

abstract class WalkingOne implements Walk
{
    abstract public function run(): void;

    public function slowWalk(): void
    {
        echo "slow walk";
    }
}

final class ExampleHuman extends WalkingOne
{
    public function walk(): void
    {
        echo "Human is walking on the steet";
    }

    public function run(): void
    {
        echo "Run as human";
    }
}

class ExampleAnimal extends WalkingOne implements Friend, Fly
{
    public function walk(): void
    {
        echo "Animal is walking";
    }

    public function walkWithSomeone(Walk $someone): void
    {
        $this->walk();
        echo "\n";
        $someone->walk();
        echo "\n";
    }

    public function run(): void
    {
        echo "Run as animal";
    }

    public function fly(): void
    {
        throw new RuntimeException("This animal can not fly");
    }
}

class ExampleBird extends ExampleAnimal
{
    use CanFly;
}

class ExampleDog extends ExampleAnimal
{
}

trait CanFly
{
    public function fly(): void
    {
        echo 'fly!';
    }
}

class CanNotFlyException extends Exception
{
}

$human = new ExampleHuman();
$animal = new ExampleDog();
$bird = new ExampleBird();


var_dump($human);
var_dump($animal);
var_dump($bird);

// $animal->walkWithSomeone($bird);

// $human->slowWalk();

function x(ExampleAnimal $animal): string
{
    try {
        $animal->fly();
        return 'i was flying';
    } catch (CanNotFlyException $e) {
        return "CAN NOT FLY :(";
    } catch (Exception $e) {
        return "We have an issue: " . $e->getMessage();
    } finally {
        echo "DONE!";
    }
}

echo x($animal);
