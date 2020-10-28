<?php

namespace App\Robots;

use App\Functions\BipedalWalk;

class AType extends Robot
{
    public function display()
    {
        $walkStyle = new BipedalWalk();
        return $walkStyle->walk();
    }
}
