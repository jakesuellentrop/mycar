<?php

namespace MyCar\Drivetrains;

class FrontWheelDrive extends Drivetrain
{
    public function __construct()
    {
        $this->type = "FWD";
    }
}