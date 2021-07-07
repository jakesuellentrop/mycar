<?php

namespace MyCar\Keys;

class Key implements KeyInterface
{
    protected $signature;

    public function __construct()
    {
        $this->signature = uniqid();
    }

    public function signature()
    {
        return $this->signature;
    }
}