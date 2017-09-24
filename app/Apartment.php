<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Apartment extends Model
{
    use Userstamps;
    public function street() {
        $this->belongsTo(Street::class);
    }

    public function residence() {
        $this->hasMany(Residence::class);
    }
}
