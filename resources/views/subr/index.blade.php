@extends('layouts/nav')

@section('content')

    <br>
    <div class="alert alert-info" role="alert">
    <h2 style="display:inline;">請在這裡結帳!</h2>
    </div>
    
   <!-- <a class="button" style="float:right" href="{{ route('coupons.create') }}"> Create New Coupon</a> -->
   <hr>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    {!! Form::open( ['method' => 'GET']) !!}
            <h4 style="display:inline;">顧客手機號碼：</h4>
            <input type="text" name="usr_phone" id="usr_phone">
		    <input type="submit" value="搜尋" class="btn btn-danger" />
		
    {!! Form::close() !!}


    <!-- <div style="padding:0px 100px 0px 100px;"> -->
    <div class="box">   
         <table class="table table-striped">
             <tr>
                
                <!-- <th width="280px">Action</th> -->
             </tr>
            <tr>
            
            </tr>


        </table>
    </div>

    <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">折價卷
                            </h3>
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                        <th></th>
                                            <th>優惠券內容</th>
                                            <th>顧客姓名</th>
                                            <th>顧客phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($subr as $subr)
                                        <tr>
                                            <td>{{ $subr->id}}</td>
                                            <td>{{ $subr->content}}</td>
                        
                                    
                                            <td>{{ $subr->name}}</td>
                                            <td>{{ $subr->phone}}</td>
                                            <td>
                                            
                                            {!! Form::open(['method' => 'DELETE','route' => ['subr.destroy', $subr->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('刪除', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}

                                            </td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
        </div>



@endsection