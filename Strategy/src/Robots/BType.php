<?php

namespace App\Robots;

use App\Functions\FourLeggedWalk;

class BType extends Robot
{
    public function execute()
    {
        $walkStyle = new FourLeggedWalk();
        return $walkStyle->walk();
    }
}
