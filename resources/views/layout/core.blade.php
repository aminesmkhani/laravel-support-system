<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('panel/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('panel/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
   @include('layout.nav')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layout.side')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->
        @yield('content')
        <!-- Main content -->
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    @include('layout.dark-side')
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('layout.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('panel/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('panel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('panel/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('panel/dist/js/adminlte.min.js')}}"></script>

<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>
</body>
</html>
