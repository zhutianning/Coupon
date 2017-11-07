@extends('layouts/nav')

@section('content')
   <br>
   <h2 style="display:inline;">店家資訊</h2>
   <hr>



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- <div style="padding:0px 100px 0px 100px;"> -->
  



  
 <div class="table-responsive">
 <table class="table ">
     <thead>
         <tr>
            <th>店家名稱</th>
            <th>電子郵箱</th>
            <th>聯繫電話</th>
            <th>店家地址</th>
            <th>商家介紹</th>
            <th width="200px"></th> 
         </tr>
     </thead>
     <tbody>
         <tr>
             <td class="txt-oflo">{{ Auth::user()->name}}</td>
             <td>{{ Auth::user()->email}}</td>
             <td class="txt-oflo">{{ Auth::user()->phone}}</td>
             <td><span class="text-success">{{ Auth::user()->address}}</span></td>
             <td>{{ Auth::user()->store_intro}}</td>
             <td>

             <a class="btn btn-primary" href="{{ route('users.show',Auth::user()) }}">查看</a>
             <a class="btn btn-danger" href="{{ route('users.edit', Auth::user()) }}">編輯</a>
           
             

             </td>
         </tr>
     </tbody>
    
 </table> 
</div>
     

@endsection