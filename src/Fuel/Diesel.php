<?php

namespace MyCar\Fuel;

class Diesel extends Fuel
{
    public function type(): string
    {
        return "diesel";
    }
}