@extends('layouts/nav')

@section('content')
    <br>
    <h2 style="display:inline;">訊息推播</h2>
    <a class="btn btn-info" style="float:right" href="{{ route('messages.create') }}"> 發送新的訊息</a>
    <hr>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- <div style="padding:0px 100px 0px 100px;"> -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">訊息推播
                            </h3>
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            
                                            <th>標題</th>
                                            <th>內容</th>
                                            <th width="280px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($messages as $message)
                                        <tr>
                                           
                                            <td>{{ $message->title}}</td>
                                            <td>{{ $message->content}}</td>
                                            
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('messages.show',$message->id) }}">查看</a>
                                                <!-- <a class="btn btn-primary" href="{{ route('messages.edit',$message->id) }}">Edit</a> -->
                                                {!! Form::open(['method' => 'DELETE','route' => ['messages.destroy', $message->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('刪除', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table> 
                             </div>
                        </div>
                    </div>
                </div>

    {!! $messages->links() !!}
@endsection