<?php

class Car
{
    private string $make;
    private string $licensePlate;
    private int $fullGasTank;
    private string $pin;
    private int $fuelConsumption;

    public function __construct(
        string $make,
        string $licensePlate,
        int $fullGasTank,
        string $pin,
        int $fuelConsumption
    )
    {
        $this->make = $make;
        $this->licensePlate = $licensePlate;
        $this->fullGasTank = $fullGasTank;
        $this->pin = $pin;
        $this->fuelConsumption = $fuelConsumption;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getLicensePlate()
    {
        return $this->licensePlate;
    }

    public function getFullGasTank()
    {
        return $this->fullGasTank;
    }

    public function getPin()
    {
        return $this->pin;
    }

    public function getFuelConsumption()
    {
        return $this->fuelConsumption;
    }

}

$cars = [
    new Car("Audi", "AA1234", 50, "123", 7),
    new Car("BMW", "ZZ9514", 40, "369", 10),
    new Car("OPEL", "ZZ9514", 40, "369", 3),

];
$i = 1;
echo "Choose a car:" . PHP_EOL;
foreach ($cars as $car) {

    echo $i . ": " . $car->getMake() . PHP_EOL;
    $i++;
}
$carKey = (int)readline() - 1;
$car = $cars[$carKey] ?? null;
if ($car === null) {
    echo "Wrong car index" . PHP_EOL;
};

$tries = 0;
$pin = 0;
while ($car->getPin() !== $pin && $tries < 3) {
    $pin = readline('Enter PIN code to use the ' . $car->getMake() . ": ");
    $tries++;

}
if ($car->getPin() === $pin) {
    $tank = $car->getFullGasTank();
    $km = 0;
    while ($tank >= 0 && $car->getPin() === $pin) {
        $tank = $tank - ($car->getFuelConsumption()) / 100;
        $km++;
        if ($km % 10 == 0) {

            echo "$km km distance, " . $car->getMake() . " " . $car->getLicensePlate() . " gas left: " . number_format($tank, 2) . PHP_EOL;
            sleep(1);
        }

    }


    sleep(1);
} else {
    echo "Your PIN is not correct!" . PHP_EOL;
}