<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Language extends Model
{
    protected $connection = 'mongodb';

    public function characters()
    {
        return $this->embedsMany(Character::class);
    }
}
