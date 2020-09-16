<?php declare(strict_types=1);

class Person{
    protected string $name;
    protected ?string  $midlname;
    protected string $surname;

    public function __construct(string $name, string $midlname = null, string $surname)
    {
        $this ->name = $name;
        $this -> midlname=$midlname;
        $this ->surname=$surname;

    }

    public function surname(): string{
        return $this->surname;
    }
}

$person = new Person( 'Janis', 'Ivars', 'Stals');

$person2 = new Person('Ilze', '', 'Bieza');
var_dump($person, $person2);




