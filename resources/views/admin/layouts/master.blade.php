<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PPC_COMPANY||ADMIN_TIN TUC</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{--<link rel="stylesheet" href="{{asset('css/styles.css')}}">--}}

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <link rel="stylesheet" href="{{asset('css/AdminLTE.css')}}">

    <link rel="stylesheet" href="{{asset('css/skins/_all-skins.min.css')}}">


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('admin.layouts.header')
    @include('admin.layouts.menu')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @yield('Content')
        </section>
    </div>
    @include('admin.layouts.footer')
</div>

<script type="text/javascript" src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('plugins/fastclick/fastclick.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

<script type="text/javascript" src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/chartjs/Chart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/demo.js')}}"></script>
<script type="text/javascript" src="{{asset('js/calendar.js')}}"></script>
</body>

</html>
