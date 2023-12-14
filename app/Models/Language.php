<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Language extends Model
{
    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
