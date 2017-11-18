<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    
    public function coupons()
    {
        return $this->belongsToMany('App\Coupon', 'subr','cpid','member_id')->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'shopsub', 'user_id', 'member_id')->withTimestamps();
    }

  

}

