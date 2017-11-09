@extends('layouts/nav')

@section('content')


   <br>
   <h2 style="display:inline;">創建新優惠券</h2>
   <a class="btn btn-info" style="float:right" href="{{ route('coupons.index') }}"> 後退</a>
   <hr>

    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

                                



    {!! Form::open(array('route' => 'coupons.store','method'=>'POST')) !!}
         @include('coupons.form')
    {!! Form::close() !!}


@endsection
