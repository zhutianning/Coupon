@extends('layouts.app')
@section('nav')


                @include('layouts.navbar')


                <!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
                </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center">©2017  世新大學資訊管理學系資訊管理組四年級甲班.畢業專題製作.Q胖小組</footer>
        </div>
        <!-- /#page-wrapper -->
        


@endsection




