<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $fillable = [ 'first_name', 'last_name', 'date_of_birth', 'gender', 'user_id'];
}
