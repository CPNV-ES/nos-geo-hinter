<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Circulation extends Model
{

    public function plate()
    {
        return $this->embedsOne(Plate::class);
    }

}
