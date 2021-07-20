<?php

namespace MyCar;

use MyCar\Alarms\FuelMismatchAlarm;
use MyCar\Drivetrains\Drivetrain;
use MyCar\Engines\Engine;
use MyCar\Fuel\Fuel;
use MyCar\Ignition\Ignition;
use MyCar\Keys\KeyInterface;
use MyCar\Security\SecuritySystem;

class Car
{
    protected $drivetrain;
    protected $engine;
    protected $fuelLevel;
    protected $ignition;
    protected $keySignature;
    protected $make;
    protected $model;
    protected $security;
    protected $year;

    public function __construct(string $year, string $make, string $model, Engine $engine, Drivetrain $drivetrain)
    {
        $this->year = $year;
        $this->make = $make;
        $this->model = $model;
        $this->engine = $engine;
        $this->drivetrain = $drivetrain;

        $this->security = new SecuritySystem;
        $this->ignition = new Ignition($this);
    }

    public function drive()
    {
        echo "Vroom vroom\n";
    }

    public function fuelLevel()
    {
        return $this->fuelLevel;
    }

    public function addFuel(Fuel $fuel)
    {
        if ($fuel->type() !== $this->engine->fuelType()) {
            throw new FuelMismatchAlarm;
        }

        $this->fuelLevel = $fuel->amount();
    }

    public function lockDoors(KeyInterface $key)
    {
        $this->security->verifyKey($this->keySignature, $key);
    }

    public function programKey(KeyInterface $key)
    {
        $this->keySignature = $key->signature();
    }
    
    public function start(KeyInterface $key)
    {
        $this->ignition
             ->insert($key)
             ->crank();
        
        echo "Started the car...\n";

        return $this;
    }

    public function setIsRunning(bool $running)
    {
        $this->engine->setIsRunning($running);
    }

    public function unlockDoors(KeyInterface $key)
    {
        $this->security->verifyKey($this->keySignature, $key);
    }
}
