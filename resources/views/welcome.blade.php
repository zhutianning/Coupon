@extends('layouts.nav')
@section('content')


                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">主控台</h4> </div>
                    <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                        <ol class="breadcrumb">
                       
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">折價卷 數量</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger">{{ $couponsCount }}</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ $couponsCount }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $couponsCount }}%"> <span class="sr-only">{{ $couponsCount }}% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-muted vb">訂閱會員 數量</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna">{{ $membersCount }}</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="{{ $membersCount }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $membersCount }}%"> <span class="sr-only">{{ $membersCount }}% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                    <h5 class="text-muted vb">折價卷拿取數量</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-primary">{{ $coupon_member }}</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{ $coupon_member }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $coupon_member }}%"> <span class="sr-only">{{ $coupon_member }}% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div> 
               <!--row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">最新折價卷
                            </h3>
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>折價卷內容</th>
                                            <th>數量</th>
                                            <th>發行期限</th>
                                            <th>發行時間</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($coupons as $coupon)
                                        <tr>
                                            <td class="txt-oflo">{{ $coupon->content}}</td>
                                            <td>{{ $coupon->amount}}</td>
                                            <td class="txt-oflo">{{ $coupon->time}}</td>
                                            <td><span class="text-success">{{ $coupon->created_at}}</span></td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">最近推播的訊息</h3>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>  
                                            <th>標題</th>
                                            <th>內容</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($messages as $message)
                                        <tr>
                                           
                                            <td>{{ $message->title}}</td>
                                            <td>{{ $message->content}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table> 
                             </div>

                        </div>
                    </div>
                
                <!-- /.row -->
                <!-- row --> 
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">最近訂閱的會員</h3>
                                <div class="table-responsive">
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
                        </div>
                    </div>
                </div>
                <!-- /.row -->

@endsection