@extends('layouts.nav')

@section('content')
   <br>
   <h2 style="display:inline;">編輯商家資訊</h2>
   <a class="btn btn-primary" style="float:right" href="{{ route('users.index') }}"> 後退</a>
   <hr>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model( $user, ['method' => 'PATCH','route' => ['users.update',  $user]]) !!}
    @include('users.form')
    {!! Form::close() !!}

@endsection