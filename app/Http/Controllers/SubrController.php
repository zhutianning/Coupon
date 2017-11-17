<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use App\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class SubrController extends Controller
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

            $subr = DB::table('subr')
            ->join('coupons', 'subr.coupon_id', '=', 'coupons.id')
            ->join('members', 'subr.member_id', '=', 'members.id')
            ->Where('members.phone', 'like', '%'.$search.'%')
            ->where('coupons.user_id', '=', Auth::user()->id)
            ->select('subr.id', 'coupons.content', 'members.name', 'members.phone')
            ->get();

        }else{

            $subr = DB::table('subr')
            ->join('coupons', 'subr.coupon_id', '=', 'coupons.id')
            ->join('members', 'subr.member_id', '=', 'members.id')
            ->where('coupons.user_id', '=', Auth::user()->id)
            ->select('subr.id', 'coupons.content', 'members.name', 'members.phone')
            ->get();

        }

    return view('subr.index', compact('subr','members', 'coupons'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subr = DB::table('subr')->select('subr.id')->WHERE('subr.id', '=', $id)->delete();
        return redirect()->route('subr.index')
                        ->with('success','Coupon deleted successfully');
    }
}
