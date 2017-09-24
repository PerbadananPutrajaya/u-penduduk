<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Resident extends Model
{
    use Userstamps;
    protected $fillable = [
        'first_name',
        'last_name',
        'nationality',
        'nric',
        'passport',
        'date_of_birth',
        'gender',
        'blood_group',
        'user_id',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Get the user record associated with the resident.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The residences that belong to the resident.
     */
    public function residences()
    {
        return $this->belongsToMany(Residence::class, 'household');
    }
}
