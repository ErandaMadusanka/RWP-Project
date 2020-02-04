<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $fillable = [
        'activity_name', 'description', 'date','time','duration','important_info','guid_info','user_id','city_id'
    ];
}