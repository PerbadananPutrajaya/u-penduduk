<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Residence extends Model
{
    use Userstamps;
    protected $fillable = [
        'unit_no',
        'type',
        'apartment_id',
        'street_id',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Get the apartment record associated with the residence.
     */
    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }

    /**
     * Get the street record associated with the residence.
     */
    public function street()
    {
        return $this->belongsTo(Street::class);
    }

    /**
     * The resident that belong to the residences.
     */
    public function residents()
    {
        return $this->belongsToMany(Resident::class, 'household');
    }
}
