<?php

namespace App\Robots;

use App\Functions\BipedalWalk;

class AType extends Robot
{
    public function execute()
    {
        $walkStyle = new BipedalWalk();
        return $walkStyle->walk();
    }
}
