<?php

namespace MyCar\Fuel;

class Gasoline extends Fuel
{
    public function type(): string
    {
        return "gasoline";
    }
}