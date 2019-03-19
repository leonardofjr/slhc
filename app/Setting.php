<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $timestamps = false;

    function users() {
        return $this->belongsToMany('App\User', 'user_setting');
    }
}
