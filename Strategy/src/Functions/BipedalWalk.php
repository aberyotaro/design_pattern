<?php

namespace App\Functions;

use App\Contracts\Walk;

class BipedalWalk implements Walk
{
    public function walk()
    {
        return '2足歩行';
    }
}
