<?php

namespace MyCar\Fuel;

abstract class Fuel
{
    protected $amount;

    public function __construct(int $fillAmount = 100)
    {
        $this->amount = $fillAmount;
    }

    public function amount()
    {
        return $this->amount;
    }

    abstract public function type(): string;
}