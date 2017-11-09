<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use App\Member;
use App\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $couponsCount = Auth::user()->coupons()->count();
        $coupons = Auth::user()->coupons()->get();
        $membersCount = Auth::user()->members()->count();

        $coupon_member = DB::table('coupon_member')
            ->join('coupons', 'coupon_member.coupon_id', '=', 'coupons.id')
            ->join('members', 'coupon_member.member_id', '=', 'members.id')
            ->where('coupons.user_id', '=', Auth::user()->id)
            ->select('coupon_member.id', 'coupons.content', 'members.name', 'members.phone')
            ->get()->count();

        return view('welcome',compact('couponsCount', 'membersCount', 'coupon_member','coupons','members'));
    }
}
