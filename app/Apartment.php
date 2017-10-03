<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Apartment extends Model
{
    use Userstamps;

    public function street()
    {
        return $this->belongsTo(Street::class);
    }

    public function precinct()
    {
        return $this->belongsTo(Precinct::class);
    }

    public function residence()
    {
        return $this->hasMany(Residence::class);
    }
}
