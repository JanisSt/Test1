<?php

class Car
{
    public string $make;
    public string $licensePlate;
    public int $gasTank;

    public function __construct(string $make, string $licensePlate, int $gasTank ){
        $this->make = $make;
        $this->licensePlate = $licensePlate;
        $this->gasTank = $gasTank;
    }

    public function make(): string{
        return $this->make;
    }
    public function licensePlate():string{
        return $this->licensePlate;
    }
    public function gasTank(): int{
        return $this->gasTank;
    }



}

$myCar = new Car("Audi", "AA1234", 40);

$gasUsage = 7/100;
$tank = $myCar->gasTank;
$km = 0;
while($tank >= 0) {
    $tank = $tank - $gasUsage;
    $km++;
    if($km % 10 == 0) {
        echo "$km km distance, $myCar->make,  $myCar->licensePlate,  gas left: " . number_format($tank, 2) . PHP_EOL;
        sleep(1);
    }
}

