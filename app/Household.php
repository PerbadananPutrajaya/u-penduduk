<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Household extends Model
{
    use Userstamps;
    protected $fillable = [
        'resident_id',
        'residence_id',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
