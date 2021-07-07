<?php

namespace MyCar\Engines;

class V8Engine extends Engine
{
    public function __construct(string $fuelType)
    {
        $this->fuelType = $fuelType;
        $this->cylinders = 8;
    }
}