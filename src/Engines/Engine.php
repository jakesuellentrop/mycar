<?php

namespace MyCar\Engines;

abstract class Engine
{
    protected $cylinders;
    protected $fuelType;
    protected $isRunning;

    abstract public function __construct(string $fuelType);

    public function fuelType()
    {
        return $this->fuelType;
    }

    public function setIsRunning(bool $running)
    {
        $this->isRunning = $running;
    }
}