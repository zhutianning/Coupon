<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use App\Member;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
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
        $coupons = Auth::user()->coupons()->latest()->paginate(5);
        return view('coupons.index',compact('coupons'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function member_coupon()
    // {
    //     // $members = Member::all();        
    //     // $coupons = Auth::user()->coupons;   
    //     // $coupons = $members->Coupons; w
    //     // $members = $coupons->members;
    //     // $members = Auth::user()->coupons()->Members; 
    //     $members = DB::table('coupon_member')
    //     ->join('coupons', 'coupon_member.coupon_id', '=', 'coupon.id')
    //     ->join('members', 'coupon_member.member_id', '=', 'member.id')
    //     ->select('coupon_member.*', 'coupons.content', 'members.name')
    //     ->get();
    //     return view('coupons.member_coupon', compact('members', 'coupons'));                    
    // }

    /**
     * 查询所有持有该店家优惠券的会员
     *
     * @return Response
     */
    public function member_coupon()
    {
        $subr = DB::table('subr')
            ->join('coupons', 'subr.coupon_id', '=', 'coupons.id')
            ->join('members', 'subr.member_id', '=', 'members.id')
            ->where('coupons.user_id', '=', Auth::user()->id)
            ->select('coupons.id', 'coupons.content', 'members.name')
            ->get();

        
        return view('coupons.member_coupon', compact('subr','members', 'coupons'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'content' => 'required',
            'amount' => 'required',
            'time'=>'required',
        ]);
        
        Auth::user()->coupons()->create($request->all());
        return redirect()->route('coupons.index')
                        ->with('success','Coupon created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coupon = Auth::user()->coupons()->find($id);
        return view('coupons.show',compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon = Auth::user()->coupons()->find($id);
        return view('coupons.edit',compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'content' => 'required',
            'amount' => 'required',
            'time'=>'required',
        ]);
        Auth::user()->coupons()->find($id)->update($request->all());
        return redirect()->route('coupons.index')
                        ->with('success','Coupon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Auth::user()->coupons()->find($id)->delete();
        return redirect()->route('coupons.index')
                        ->with('success','Coupon deleted successfully');
    }
}
