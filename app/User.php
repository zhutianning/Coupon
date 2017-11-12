<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function coupons()
    {
        return $this->hasMany('App\Coupon');
    }
    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    public function members()
    {
        return $this->belongsToMany('App\Member',  'sub', 'user_id', 'member_id')->withTimestamps();
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address', 'store_intro'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
