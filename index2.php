<?php

class car
{
    public string $model;
    public int $gasTank;

    public function __construct(string $model, int $gasTank)
    {
        $this->model = $model;
        $this->gasTank = $gasTank;
    }

    public function model(): string
    {
        return $this->model;
    }

    public function gasTank(): string
    {
        return $this->gasTank;
    }

}

class Tesla extends car
{
    public function gasTank(): string
    {
        $gasTank = parent::gasTank();
        return $gasTank . " Electric motor";

    }
}

class Audi extends car
{

    public function AudiSeats(): string {
        return "leather seats";
    }
//
}


$CARS = [
    new Audi('Q7', 100),
    new Tesla('model3', 0)

];
foreach ($CARS as $CART) {

    echo $CART->model() . " has gas tank of " . $CART->gasTank();
    if ($CART instanceof Audi)
    {
        echo $CART ->AudiSeats();
    }
    echo PHP_EOL;
}
