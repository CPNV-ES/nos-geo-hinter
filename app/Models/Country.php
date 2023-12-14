<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'countries';

    public function flag()
    {
        return $this->embedsOne(Flag::class);
    }
}
