<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use App\Message;
use App\Subr;
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
        $messages = Auth::user()->messages()->get();
        $members = Auth::user()-> members()->get();
        

        $subr = DB::table('subr')
            ->join('coupons', 'subr.coupon_id', '=', 'coupons.id')
            ->join('members', 'subr.member_id', '=', 'members.id')
            ->where('coupons.user_id', '=', Auth::user()->id)
            ->select('subr.id', 'coupons.content', 'members.name', 'members.phone')
            ->get()->count();


        return view('welcome',compact('couponsCount', 'membersCount', 'subr','coupons','messages', 'members'));
    }
}
