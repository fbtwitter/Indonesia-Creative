<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title-dashboard')</title>

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet"> {{-- yield --}} @yield('scriptcss') {{-- yield --}}
    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    @include('ManagementFile/backend/navbar') @yield('body-content')



        <!-- Mainly scripts -->
        <script src="{{ asset('admin/js/plugins/fullcalendar/moment.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{{ asset('admin/js/inspinia.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/pace/pace.min.js') }}"></script>

        <!-- jQuery UI -->
        <script src="{{ asset('admin/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

        @yield('scriptjs')

</body>

</html>