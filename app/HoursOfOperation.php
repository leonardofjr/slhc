<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoursOfOperation extends Model
{ 
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_hours_of_operation');
    }
}
