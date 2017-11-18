<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    // public function user()
    // {
    //     return $this->belongsTo('App\User', 'id', 'user_id');
    // }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function members()
    {
        return $this->belongsToMany('App\Member', 'subr', 'cpid', 'member_id')->withTimestamps();
    }

    //
    protected $fillable = [
        'content', 'amount','time','user_id'
    ];
}
