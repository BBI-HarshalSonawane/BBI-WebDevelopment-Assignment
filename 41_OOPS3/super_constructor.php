<?php

// Parent Class: Vehicle
class Vehicle {
    public string $brand;
    public string $model;
    public int $speed;

    public function __construct(string $brand, string $model, int $speed) {
        $this->brand = $brand;
        $this->model = $model;
        $this->speed = $speed;
    }

    public function startEngine(): string {
        return "The engine of the vehicle has started.";
    }

    public function honk(): string {
        return "The vehicle honks.";
    }

    public function vehicleSpeed(): void {
        echo "The vehicle speed is {$this->speed} km/h.\n";
    }
}

// Child Class: Car
class Car extends Vehicle {
    public function __construct(string $brand, string $model, int $speed) {
        parent::__construct($brand, $model, $speed);
    }

    public function startEngine(): string {
        return "The engine of the car has started.";
    }

    public function openTrunk(): string {
        return "The trunk is now open.";
    }
}

// Child Class: Truck
class Truck extends Vehicle {
    public function __construct(string $brand, string $model, int $speed) {
        parent::__construct($brand, $model, $speed);
    }

    public function startEngine(): string {
        return "The engine of the truck has started.";
    }

    public function loadCargo(): string {
        return "Cargo has been loaded onto the truck.";
    }
}

// Usage
header('Content-Type: text/plain');

// Car Instance
$car = new Car("Toyota", "Camry", 120);
echo $car->startEngine() . "\n"; // Output: The engine of the car has started.
echo $car->openTrunk() . "\n";   // Output: The trunk is now open.
$car->vehicleSpeed();            // Output: The vehicle speed is 120 km/h.

// Truck Instance
$truck = new Truck("Ford", "F-150", 80);
echo $truck->startEngine() . "\n"; // Output: The engine of the truck has started.
echo $truck->loadCargo() . "\n";   // Output: Cargo has been loaded onto the truck.
$truck->vehicleSpeed();            // Output: The vehicle speed is 80 km/h.

?>
