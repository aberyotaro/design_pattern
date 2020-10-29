<?php

namespace App\Controller;

use App\Robots\Robot;

class RobotController
{
    public function display(Robot $robot)
    {
        return $robot->execute();
    }
}
