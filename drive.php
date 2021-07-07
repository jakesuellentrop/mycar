<?php

require_once(__DIR__ . '/vendor/autoload.php');

use MyCar\Car;
use MyCar\Drivetrains\FourWheelDrive;
use MyCar\Engines\V8Engine;
use MyCar\Fuel\Gasoline;
use MyCar\Keys\Key;

$engine = new V8Engine("gasoline");
$car = new Car("2006", "Toyota", "4Runner", $engine, new FourWheelDrive);
$key = new Key;
$fuel = new Gasoline;

$car->programKey($key);
$car->addFuel($fuel);

$car->start($key)->drive();

var_dump($car);