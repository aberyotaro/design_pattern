<?php

namespace App\Functions;

use App\Contracts\WalkInterface;

class FourLeggedWalk implements WalkInterface
{
    public function walk()
    {
        return '4足歩行';
    }
}
