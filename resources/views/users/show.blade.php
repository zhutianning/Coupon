@extends('layouts/nav')

@section('content')
   <br>
   <h2 style="display:inline;">查看店家資訊</h2>
   <a class="btn btn-info" style="float:right" href="{{ route('users.index') }}"> 後退</a>
   <hr>

    <div class="box" style="width:400px;">

    <ul class="alt">
		<li>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>店家名稱</strong>  
                            {{ $user->name}}
                    </div>
                </div>  
            </div>
        </li>
		<li>            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>電子郵箱:</strong>
                        {{ $user->email}}
                    </div>
                </div>  
            </div>
        </li>
		<li>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>聯繫電話:</strong>
                        {{ $user->phone}}
                    </div>
                </div>  
            </div>
        </li>
        <li>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>店家地址:</strong>
                        {{ $user->address}}
                    </div>
                </div>  
            </div>
        </li>
        <li>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>商家介紹:</strong>
                        {{ $user->store_intro}}
                    </div>
                </div>  
            </div>
        </li>
	</ul>
    </div>
@endsection