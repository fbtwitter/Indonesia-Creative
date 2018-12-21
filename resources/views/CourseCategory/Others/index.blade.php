@extends('ManagementFile/backend/layout')
@section('title-dashboard') Other Course | IC Surabaya
@endsection

@section('scriptcss')
<!-- Gritter -->
<link href="{{ asset('admin/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

<link href="{{ asset('admin/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
@endsection

@section('body-content')



<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
        {{-- Navbar --}}
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
                <ol class="breadcrumb" style="background-color: transparent;margin: 20px 0px 0px 70px;">
                        <li>
                            <a href="{{ url('Dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb" style="background-color: transparent;">
                            <a>Course Category</a>
                        </li>
                        <li class="active">
                            <strong>Other Course</strong>
                        </li>
                    </ol>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                {{-- <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome {{$data->NAMA_DEPAN}}</span>
                </li>
                <li>
                    <a class="right-sidebar-toggle"><i class="fa fa-tasks"></i></a>
                </li> --}}
            </ul>
        </nav>
    </div>
    <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:10px;">
        <div class="col-lg-12">
            <h2 class="text-center" style="font-weight:700; font-size:26px">Other Course</h2>
            <h2 class="text-center" style="font-weight:300; font-size:18px">Take a look all the class here, and enjoy with your extra coffee</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-container">

                    <div class="tabs-left">
                        <ul class="nav nav-tabs">
                          @php
                            $i=1
                          @endphp
                          @foreach ($daftar as $d)
                              <li class="@if ($i==1)
                                active
                              @endif"><a data-toggle="tab" href="#tab-{{$i}}">{{$d->NAMA_COURSE}}</a></li>
                            @php
                              $i++
                            @endphp
                          @endforeach
                        </ul>
                        <div class="tab-content ">
                          @php
                            $i=1
                          @endphp
                          @foreach ($daftar as $d)
                            <div id="tab-{{$i}}" class="tab-pane @if ($i==1)
                              active
                            @endif">
                                <div class="panel-body" style="background-image:url('{{ asset('admin/img/course/bg-1.jpg') }}');">
                                    <div class="col-lg-7">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-content" style="background-color:transparent;">
                                                <figure>
                                                    <iframe width="300" height="300" src="http://www.youtube.com/embed/bwj2s_5e12U" frameborder="0" allowfullscreen></iframe>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-content profile-content" style="background-color:transparent; color: white">
                                                <h2><strong>{{$d->NAMA_COURSE}} Class</strong></h2>
                                                <p><i class="fa fa-clock-o"></i> Uploaded on October 27, 2011</p>
                                                <p>{{$d->DEFINISI_COURSE}}</p>
                                                <div class="row m-t-md">
                                                    <div class="col-md-12">
                                                      <form class="" action="{{route('Others.store')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="idcourse" value="{{$i}}">
                                                          @if (isset($join))
                                                            @if (in_array($i,$join))
                                                              <button class="btn btn-primary btn-outline btn-block" type="submit" disabled>Joined</button>
                                                            @else
                                                              <button class="btn btn-primary btn-outline btn-block" type="submit">Join Class!</button>
                                                            @endif
                                                            @else
                                                              <button class="btn btn-primary btn-outline btn-block" type="submit">Join Class!</button>
                                                            @endif
                                                      </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                              $i++
                            @endphp
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('ManagementFile/backend/footer')
</div>

@endsection
@section('scriptjs')
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.spline.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.pie.js') }}"></script>

<!-- Peity -->
<script src="{{ asset('admin/js/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('admin/js/demo/peity-demo.js') }}"></script>

<!-- GITTER -->
<script src="{{ asset('admin/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('admin/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Sparkline demo data  -->
<script src="{{ asset('admin/js/demo/sparkline-demo.js') }}"></script>

<!-- ChartJS-->
<script src="{{ asset('admin/js/plugins/chartJs/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/video/responsible-video.js') }}"></script>

<script>
    $(document).on('webkitfullscreenchange mozfullscreenchange fullscreenchange', function (e){
        $('body').hasClass('fullscreen-video') ? $('body').removeClass('fullscreen-video') : $('body').addClass('fullscreen-video')
    });

</script>
@endsection
