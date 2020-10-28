<?php

namespace App\Controller;

use App\Robots\AType;
use App\Robots\BType;

class RobotController
{
    public function index()
    {
        $robot = new AType();
        return $robot->display();
    }
}
