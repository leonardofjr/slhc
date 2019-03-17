<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    function hours_of_operation() {
        return $this->hasMany('App\HoursOfOperation', "settings_id");
    }
}
