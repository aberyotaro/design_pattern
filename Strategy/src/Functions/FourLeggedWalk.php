<?php

namespace App\Functions;

use App\Contracts\Walk;

class FourLeggedWalk implements Walk
{
    public function walk()
    {
        return '4足歩行';
    }
}
