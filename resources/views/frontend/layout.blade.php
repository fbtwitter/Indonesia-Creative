<!DOCTYPE html>
<html lang="en">

<head>
    @extends('frontend/title')

    @section('titlename')
        IC SURABAYA
    @stop
</head>

<body id="page-top">
    @include('frontend/nav')
    @include('frontend/header')

    <div class="content">
        @yield('content')
    </div>

    @include('frontend/footer')
    @include('frontend/script')
</body>

</html>
