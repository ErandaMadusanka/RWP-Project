<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $fillable = [
        'name', 'description', 'latitude','longitude','image','user_id','city_id'
    ];
}
