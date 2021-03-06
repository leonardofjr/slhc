<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname' ,'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_role');
    }

    public function settings()
    {
        return $this->belongsToMany('App\Setting', 'user_setting');
    }

    public function hoursOfOperations() {
        return $this->belongsToMany( 'App\HoursOfOperation', 'user_hours_of_operation');
    }

    public function hasAnyRole($roles) {
        if (is_array($roles)) {
            foreach($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        }
        else {
            if ($this->hasRole($role)) {
                return true;
            }
        return false;
        }
    }

    public function hasRole($role) {
        if($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
}
