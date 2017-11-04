@extends('layouts/nav')

@section('content')
   <br>
   <h2 style="display:inline;">查看訊息</h2>
   <a class="btn btn-info" style="float:right" href="{{ route('messages.index') }}"> 後退</a>
   <hr>

        <div class="box" style="width:400px;">
        
            <ul class="alt">
                <li>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>標題:</strong>
                                {{ $message->title}}
                            </div>
                        </div>  
                    </div>
                </li>
                <li>            
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>內容:</strong>
                                {{ $message->content}}
                            </div>
                        </div>  
                    </div>
                </li>

            </ul>
        </div>


@endsection