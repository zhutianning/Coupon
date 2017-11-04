@extends('layouts/nav')

@section('content')

   <br>
   <h2 style="display:inline;">會員中心</h2>
   <!-- <a class="button" style="float:right" href="{{ route('coupons.create') }}"> Create New Coupon</a> -->
   <hr>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- <div style="padding:0px 100px 0px 100px;"> -->
    <div class="box">   
         <table class="table table-striped">
             <tr>
        
                <th>Phone</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Birthday</th>
                <!-- <th width="280px">Action</th> -->
             </tr>
            @foreach ($members as $member)
            <tr>
                
                <td>{{ $member->phone}}</td>
                <td>{{ $member->name}}</td>
                <td>{{ $member->sex}}</td>
                <td>{{ $member->birthday}}</td>

            </tr>
            @endforeach
        </table>
    </div>
    

@endsection