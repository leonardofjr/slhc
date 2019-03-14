<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'slug', 'service_name', ' service_price', 'short_description', 'detailed_description',
    ];

}
