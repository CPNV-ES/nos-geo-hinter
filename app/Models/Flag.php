<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Flag extends Model
{
    public function colors()
    {
        return $this->embedsMany(Color::class);
    }
}
