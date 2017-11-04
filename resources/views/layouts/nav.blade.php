@extends('layouts.app')
@section('nav')


                @include('layouts.navbar')


                <!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
                </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; 這裡是店家折價券整合平台.com </footer>
        </div>
        <!-- /#page-wrapper -->


@endsection




