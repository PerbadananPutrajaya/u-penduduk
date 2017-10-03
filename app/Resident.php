<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Resident extends Model
{
    use Userstamps;
    protected $fillable = [
        'name',
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
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_of_birth',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function age()
    {
        return $this->date_of_birth->diffInYears(Carbon::now());
    }

    public function setNricAttribute($value)
    {
        if (empty($value)) { // will check for empty string, null values, see php.net about it
            $this->attributes['nric'] = NULL;
        } else {
            $this->attributes['nric'] = $value;
        }
    }

    public function setPassportAttribute($value)
    {
        if (empty($value)) { // will check for empty string, null values, see php.net about it
            $this->attributes['passport'] = NULL;
        } else {
            $this->attributes['passport'] = $value;
        }
    }

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
