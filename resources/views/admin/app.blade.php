<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin-minimal/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Sep 2018 09:15:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>
        @yield('title')
    </title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('admin')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{url('admin')}}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{url('admin')}}/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{url('admin')}}/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{url('admin')}}/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="{{url('admin')}}/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="{{url('admin')}}/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- animation CSS -->
    <link href="{{url('admin')}}/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('admin')}}/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{url('admin')}}/css/colors/default.css" id="theme" rel="stylesheet">

    <link href="{{url('css/alertify.min.css')}}" id="theme" rel="stylesheet">
    <link href="{{url('css/select2.min.css')}}" id="theme" rel="stylesheet">
    <link href="{{url('css/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('header')

</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div>

<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">

        @include('admin/topnav')

    </nav>

    <div class="navbar-default sidebar" role="navigation">

        @include('admin/navleft')

    </div>

        @yield('content')

        <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
</div>

<script src="{{url('admin')}}/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{url('admin')}}/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{url('admin')}}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="{{url('admin')}}/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="{{url('admin')}}/js/waves.js"></script>
<!-- chartist chart -->
<script src="{{url('admin')}}/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
<script src="{{url('admin')}}/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{url('admin')}}/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="{{url('admin')}}/js/custom.min.js"></script>
<script src="{{url('admin')}}/js/dashboard1.js"></script>
<script src="{{url('admin')}}/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<!--Style Switcher -->
<script src="{{url('admin')}}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<script src="{{url('js/alertify.min.js')}}"></script>
<script src="{{url('js/select2.min.js')}}"></script>

<script>
    $(document).ready(function () {
        {{--  $('.js-example-basic-single').select2();  --}}

        @if(Session::has('success'))
            alertify.alert('Success Message', "{{session()->get('success')}}").delay(3);

        @elseif(Session::has('error'))
            alertify.set('notifier','position', 'top-center');
            alertify.success("{{session()->get('error')}}");

        @endif
    });
</script>

@yield('footer')

</body>

<!-- Mirrored from wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin-minimal/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Sep 2018 09:17:21 GMT -->
</html>
