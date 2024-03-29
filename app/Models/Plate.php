<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Plate extends Model
{
    public function colors()
    {
        return $this->embedsMany(Color::class);
    }
    public function specifications()
    {
        return $this->embedsOne(Specification::class);
    }
}
