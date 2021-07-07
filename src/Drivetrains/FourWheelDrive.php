<?php

namespace MyCar\Drivetrains;

class FourWheelDrive extends Drivetrain
{
    public function __construct()
    {
        $this->type = "4WD";
    }
}