@extends('layouts/nav') 
@section('content')
<div id="register" class="animate form registration_form">
    <section class="login_content">
        <!-- .row -->
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="white-box">
                    <form action="{{ route('register') }}" method="post">
                        {{ csrf_field() }}
                        <div class="alert alert-light">
                            <h2><i class="fa fa-paw"></i><strong>Hi!</strong> 請在這裡註冊您的帳號</h2>
                        </div>

                        <label class="col-md-12">名稱:</label>
                        <div  class="form-group">
                            <input  id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus> @if ($errors->has('name'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('name') }}</strong>
                        </span> @endif
                        </div>

                        <label class="col-md-12">電子郵箱地址:</label>                   
                        <div  class="form-group">
                            <input  id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                         </span> @endif
                        </div>

                        <label class="col-md-12">密碼:</label>                                           
                        <div  class="form-group">
                            <input  id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                        </span> @endif
                        </div>

                        <label class="col-md-12">確認您的密碼:</label>                                           
                        <div  class="form-group">
                            <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" required><br>
                        </div>

                        <!-- <div class="form-group">
                            <label class="col-sm-12">選擇您的國家地區</label>
                            <div class="col-sm-12">
                                <select class="form-control form-control-line">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                                <option>Taiwan</option>
                                </select><br>
                            </div>
                        </div> -->




                        <div class="clearfix"></div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info">
                            註冊
                            </button>  
                            
                            <a href="{{ url('/login') }}" class="btn btn-info"> 已經是會員了？ </a>
                        </div>

                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                
                               
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
</div>
@endsection