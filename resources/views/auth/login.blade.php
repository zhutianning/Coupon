@extends('layouts/nav') @section('content')

<form action="{{ route('login') }}" method="post">
    {{ csrf_field() }}
    

    <div class="alert alert-light">
   
    <h2><i class="fa fa-paw"></i><strong>Hi!</strong> 這裡是商家折價券整合平台</h2>
    </div>
    <div class="form-group">
        <label class="col-md-12">電子郵箱:</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus> @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                </span> @endif
    </div>

    <div class="form-group">
        <label for="example-email" class="col-md-12">密碼:</label>
            <input id="password" type="password" class="form-control" name="password" required><br> @if ($errors->has('password'))
                <span class="help-block">
                     <strong>{{ $errors->first('password') }}</strong>
                 </span> @endif
    </div>



    <div class="form-group">
        <button type="submit" class="btn btn-primary">
        登入    
        </button>
        <a href="{{ route('password.request') }}" class="btn btn-info">
                 忘記密碼了嗎?
        </a>
    </div>

    <div class="separator">
        <p class="change_link" >
            <a href="{{ url('/register') }}" class="btn btn-info"> 還沒有註冊帳號?</a>
        </p>

        <div class="clearfix"></div>
        <br />

        <div>
       
            
        </div>
    </div>

</form>
@endsection