<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'slug', 'service_name', ' service_price', 'short_description', 'detailed_description',
    ];

}
