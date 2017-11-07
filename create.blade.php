@extends('layouts/nav')

@section('content')
   <br>
   <h2 style="display:inline;">發送新的訊息</h2>
   <a class="btn btn-info" style="float:right" href="{{ route('messages.index') }}"> 後退</a>
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

    {!! Form::open(array('route' => 'messages.store','method'=>'POST')) !!}
         @include('messages.form')
    {!! Form::close() !!}

@endsection
