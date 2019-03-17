<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoursOfOperation extends Model
{ 
    public $timestamps = false;

    function setting() {
        return $this->belongsTo('App\Setting', "id");
    }
}
