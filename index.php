<?php declare(strict_types=1);

class Person
{
    protected string $name;
    protected string $surname;
    protected ?string  $midlname;


    public function __construct(string $name, string $midlname = null, string $surname)
    {
        $this->name = $name;
        $this->midlname = $midlname;
        $this->surname = $surname;

    }

    public function surname(): string
    {
        return $this->surname;

    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function midlname(): ?string
    {
        return $this->midlname;
    }
}

$person = new Person('Janis', 'Ivars', 'Stals');

$person2 = new Person('Ilze', null, 'Bieza');

$person3 = new Person('Niksons', 'Ze', 'Chan');

echo $person->name() . PHP_EOL;
echo $person->midlname() . PHP_EOL;
echo $person->surname() . PHP_EOL;
echo "----------------" . PHP_EOL;
echo $person2->name() . PHP_EOL;
echo $person2->midlname() . PHP_EOL;
echo $person2->surname() . PHP_EOL;
echo "----------------" . PHP_EOL;
echo $person3->name() . PHP_EOL;
echo $person3->midlname() . PHP_EOL;
echo $person3->surname() . PHP_EOL;





