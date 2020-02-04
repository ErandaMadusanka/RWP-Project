<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'name', 'description', 'date','time','venue','organized_by','website','contact_info','user_id','city_id'
    ];
}
