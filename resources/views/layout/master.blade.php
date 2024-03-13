<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Dashboard</title>
         
        @include('layout.link')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60" />
            </div>

            <!-- Navbar Header -->
            @include('layout.header')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('layout.sidebar')

            @yield('content')
           
            <!-- Content Wrapper. Contains page content -->
            @include('layout.footer')
            <!-- /.content-wrapper -->

            <!-- /.script -->
            @include('layout.script')
    </body>
</html>
