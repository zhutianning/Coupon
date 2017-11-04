<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    
    public function coupons()
    {
        return $this->belongsToMany('App\Coupon', 'coupon_member')->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'sub', 'user_id', 'member_id')->withTimestamps();
    }

  

}

