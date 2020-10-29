<?php

namespace App\Functions;

use App\Contracts\WalkInterface;

class BipedalWalk implements WalkInterface
{
    public function walk()
    {
        return '2足歩行';
    }
}
