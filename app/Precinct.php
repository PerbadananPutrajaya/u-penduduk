<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precinct extends Model
{
    public function apartment()
    {
        return $this->hasMany(Apartment::class);
    }

    public function street()
    {
        return $this->hasMany(Street::class);
    }
}
