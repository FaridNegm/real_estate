<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="{{ url('website') }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ url('website') }}/css/fancybox.css">
	<link rel="stylesheet" href="{{ url('website') }}/style.css">
    <link href="{{url('css/alertify.min.css')}}" id="theme" rel="stylesheet">

    @yield('header')
</head>
<body>

    {{--  @include('website/nav')  --}}

    @yield('content')

    @include('website/footer')



	<script src="{{ url('website') }}/js/jquery.js"></script>
	<script src="{{ url('website') }}/js/plugins.js"></script>
	<script src="{{ url('website') }}/js/bootstrap-slider.min.js"></script>
	<script src="{{ url('website') }}/js/jquery.main.js"></script>
	<script type="text/javascript" src="{{ url('website') }}/js/init.js"></script>
    <script src="{{url('js/alertify.min.js')}}"></script>
    <script src="{{url('js/select2.min.js')}}"></script>

    <script>
        $(document).ready(function () {

            @if(Session::has('success'))
                alertify.alert('Congratulation', "{{session()->get('success')}}").delay(3);

            @elseif(Session::has('error'))
                alertify.set('notifier','position', 'top-center');
                alertify.success("{{session()->get('error')}}");

            @endif
        });
    </script>

    @yield('footer')
</body>
</html>
