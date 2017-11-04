<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use App\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class CouponMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $search = \Request::get('usr_phone');

        if($search){

            $coupon_member = DB::table('coupon_member')
            ->join('coupons', 'coupon_member.coupon_id', '=', 'coupons.id')
            ->join('members', 'coupon_member.member_id', '=', 'members.id')
            ->Where('members.phone', 'like', '%'.$search.'%')
            ->where('coupons.user_id', '=', Auth::user()->id)
            ->select('coupon_member.id', 'coupons.content', 'members.name', 'members.phone')
            ->get();

        }else{

            $coupon_member = DB::table('coupon_member')
            ->join('coupons', 'coupon_member.coupon_id', '=', 'coupons.id')
            ->join('members', 'coupon_member.member_id', '=', 'members.id')
            ->where('coupons.user_id', '=', Auth::user()->id)
            ->select('coupon_member.id', 'coupons.content', 'members.name', 'members.phone')
            ->get();

        }

    return view('coupon_member.index', compact('coupon_member','members', 'coupons'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon_member = DB::table('coupon_member')->select('coupon_member.id')->WHERE('coupon_member.id', '=', $id)->delete();
        return redirect()->route('coupon_member.index')
                        ->with('success','Coupon deleted successfully');
    }
}
