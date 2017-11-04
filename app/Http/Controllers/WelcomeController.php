<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use App\Member;
use App\Message;
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

        $coupontakens = Auth::user()->coupons()->count();

        return view('welcome',compact('couponsCount', 'membersCount', 'coupontakens', 'coupons'));
    }
}
