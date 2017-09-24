<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Street extends Model
{
    use Userstamps;
    public function residence() {
        return $this->hasMany(Residence::class);
    }
}
