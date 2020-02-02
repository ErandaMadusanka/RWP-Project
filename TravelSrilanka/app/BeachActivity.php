<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeachActivity extends Model
{
    
    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
     protected $fillable = [
         'description', 'date','time','image','beach_id'
     ];
}
