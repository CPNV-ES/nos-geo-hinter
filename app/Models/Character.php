<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Character extends Model
{
    public function languages()
    {
        return $this->belongsToMany(Language::class, null, 'characters', '_id');
    }
}
