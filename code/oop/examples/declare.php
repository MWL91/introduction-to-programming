<?php

class Human
{
    private string $name;
    private static string $pseudo = 'pseudo';
    public static string $test = 'static';

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public static function getX(): string
    {
        return self::$pseudo;
    }

    public function __destruct()
    {
        //echo 'Bye from ' . $this->name;
    }
}

echo Human::$pseudo;
echo "\n";

exit();

$marcin = new Human("Marcin");
$marcin->setPseudo('php');

$komila = new Human("Komila");
$komila->setPseudo('example');

exit();

echo $marcin->getPseudo();
echo "\n";
echo $komila->getPseudo();

echo "\n";
