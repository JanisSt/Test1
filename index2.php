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
    public function model():string
    {
        return $this->model;
    }
    public function gasTank():string
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
    public string $color;
    public function __construct(string $model, int $gasTank, string $color)
    {
        parent::__construct($model, $gasTank);
        $this->color = $color;

}}



$CARS = [
    new Audi('Q7', 100, 'green'),
    new Tesla('model3', 0)

];
foreach ($CARS as $CART){

    echo $CART -> model() . " has gas tank of " . $CART->gasTank() . PHP_EOL;
}
