<?php

namespace MyCar\Drivetrains;

class RearWheelDrive extends Drivetrain
{
    public function __construct()
    {
        $this->type = "FWD";
    }
}