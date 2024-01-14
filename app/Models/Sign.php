<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    public function colors()
    {
        return $this->embedsMany(Color::class);
    }
}
