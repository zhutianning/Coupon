<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Coupon;
use App\User;

use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //
    

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $users = Auth::user()->users;        
        // $members = Member::all()->load('users');        
        $members = Auth::user()->Members;        
        return view('members.index', compact('members', 'users'));
    }

    // public function member_coupon()
    // {
    //     $members = Member::all();        
    //     // $coupons = Auth::user()->coupons;   
    //     $coupons = $members->Coupons;  
    //     // $members = Auth::user()->coupons()->Members;        
    //     return view('members.member_coupon', compact('members', 'coupons'));                    
    // }

}
