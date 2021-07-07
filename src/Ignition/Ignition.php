<?php

namespace MyCar\Ignition;

use MyCar\Alarms\MissingKeyAlarm;
use MyCar\Alarms\OutOfFuelAlarm;
use MyCar\Car;
use MyCar\Keys\KeyInterface;

class Ignition
{
    protected $car;
    protected $key;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function insert(KeyInterface $key)
    {
        $this->key = $key;

        return $this;
    }

    public function crank()
    {
        if (! $this->key) {
            throw new MissingKeyAlarm;
        }

        echo "Cranking the engine...\n";

        if (! $this->car->fuelLevel()) {
            throw new OutOfFuelAlarm;
        }

        $this->car->setIsRunning(true);
    }
}