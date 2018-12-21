@extends('ManagementFile/backend/layout')
@include('sweet::alert')
@section('title-dashboard') Dashboard | IC Surabaya
@endsection

@section('scriptcss')
<!-- Gritter -->
<link href="{{ asset('admin/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">
<link href="{{ asset('admin/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
<link href="{{ asset('admin/css/plugins/slick/slick.css') }}" rel="stylesheet">
<link href="{{ asset('admin/css/plugins/slick/slick-theme.css') }}" rel="stylesheet">
@endsection

@section('body-content')



<div id="page-wrapper" class="gray-bg sidebar-content">
    <div class="row border-bottom">
        {{-- Navbar --}}
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
                <div class="form-group">
                    <ol class="breadcrumb active" style="margin: 20px 0px 0px 70px;">
                        <li>
                            <a href="{{ url('Dashboard')}}">Home</a>
                        </li>
                    </ol>
                </div>
            </div>
            {{-- <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome {{$data->NAMA_DEPAN}}</span>
                </li>
                <li>
                    <a class="right-sidebar-toggle fa"><i class="fa fa-tasks"></i></a>
                </li>
            </ul> --}}
        </nav>
    </div>
    {{-- end of navbar --}}
    <div class="sidebar-panel">
            <h2 style="font-weight:300; font-size:24px">Welcome <span class="m-r-sm text-center" style="font-weight:600; font-size:24px">{{$data->NAMA_DEPAN}}</span></h2>
            <hr class="hr-line-solid">
        <div rows="10" style="resize:none;">
            <h4>Announcement <span class="btn badge badge-info pull-right" data-toggle="modal" data-target="#moreannounce">16</span></h4>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="{{ asset('admin/img/a1.jpg') }}">
                </a>
                <div class="media-body">
                        <a href="#">
                                Andrew Williams
                            </a><br/>
                    There are many variations of passages of Lorem Ipsum available.
                    <br>
                    <small class="text-muted">Today 4:21 pm</small>
                </div>
            </div>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="{{ asset('admin/img/a1.jpg') }}">
                </a>
                <div class="media-body">
                        <a href="#">
                                Reza Augusdi
                            </a><br/>
                    There are many variations of passages of Lorem Ipsum available.
                    <br>
                    <small class="text-muted">Today 4:21 pm</small>
                </div>
            </div>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="{{ asset('admin/img/a1.jpg') }}">
                </a>
                <div class="media-body">
                        <a href="#">
                                Agung W
                            </a><br/>
                    There are many variations of passages of Lorem Ipsum available.
                    <br>
                    <small class="text-muted">Today 4:21 pm</small>
                </div>
            </div>
        </div>
        <hr>
        <div class="m-t-md">
            <h4>Best Student</h4>
            <ul class="list-group clear-list m-t">
                <li class="list-group-item fist-item">
                    <span class="pull-right">
                                420
                            </span>
                    <span class="label label-success">1</span> Albert Einstein
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                                370
                            </span>
                    <span class="label label-info">2</span> Nelson Mandela
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                                330
                            </span>
                    <span class="label label-primary">3</span> Christoper Colombus
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                                250
                            </span>
                    <span class="label label-default">4</span> Steve Jog
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                                200
                            </span>
                    <span class="label label-primary">5</span> Bill Gets
                </li>
            </ul>
        </div>
        <hr>
        <div class="m-t-md">
            <h4>Discussion<a class="btn badge badge-info pull-right" href="{{ url('/Forum')}}">Go To</a></h4>
            <div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge badge-primary">16</span> Hey Help Me!
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content ">
                        <div class="carousel slide" id="carousel2">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img alt="image" class="img-responsive" src="{{ asset('admin/img/banner/bg-6.jpg') }}">
                                    <div class="carousel-caption" style="top:70%">
                                        <button type="button" class="btn btn-info btn-outline" data-toggle="modal" data-target="#onbanner1" style="padding-left: 100px;padding-right: 100px;">Detail Event</button>
                                    </div>
                                </div>
                                <div class="item ">
                                    <img alt="image" class="img-responsive" src="{{ asset('admin/img/banner/bg-7.jpg') }}">
                                    <div class="carousel-caption" style="top:70%">
                                        <div class="btn btn-info btn-outline" style="padding-left: 100px;padding-right: 100px;">Detail Event</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="image" class="img-responsive" src="{{ asset('admin/img/banner/bg-8.jpg') }}">
                                    <div class="carousel-caption" style="top:70%">
                                        <div class="btn btn-info btn-outline" style="padding-left: 100px;padding-right: 100px;">Detail Event</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="image" class="img-responsive" src="{{ asset('admin/img/banner/bg-9.jpg') }}">
                                    <div class="carousel-caption" style="top:70%">
                                        <div class="btn btn-info btn-outline" style="padding-left: 100px;padding-right: 100px;">Detail Event</div>
                                    </div>
                                </div>
                            </div>
                            <a data-slide="prev" href="#carousel2" class="left carousel-control">
                                <span class="fa fa-chevron-left" style="position: absolute;top: 50%;margin-left: -25px;"></span>
                            </a>
                            <a data-slide="next" href="#carousel2" class="right carousel-control">
                                <span class="fa fa-chevron-right" style="position: absolute;top: 50%;margin-right: -25px;"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">Today</span>
                        <h5>Your Best Score</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">85.0</h1>
                        <div class="stat-percent font-bold text-navy">12/12/2018</div>
                        <small>Last Update : </small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">Monthly</span>
                        <h5>Yor Accumulation Score</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">420.6</h1>
                        <div class="stat-percent font-bold text-navy">12/12/2018</div>
                        <small>Last Update : </small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-warning pull-right">Annual</span>
                        <h5>Joined Monthly Meeting</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">12</h1>
                        <div class="stat-percent font-bold text-navy">12/12/2018</div>
                        <small>Last Update : </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Sending Message to Master</h5>
                    </div>
                    <div class="ibox-content ibox-heading">
                        <form class="form-horizontal" method="get">
                            <div class="form-group no-margins no-padding"><label class="col-sm-2 control-label">To:</label>

                                <div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>Master Reza</option>
                                        <option>Master Agung</option>
                                    </select></div>
                            </div>
                            <div class="form-group no-margins no-padding"><label class="col-sm-2 control-label">Subject:</label>

                                <div class="col-sm-10"><input type="text" class="form-control" value=""></div>
                            </div>
                        </form>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <div class="row no-margins no-padding">
                                <div class="col-lg-8">
                                    <textarea type="text" placeholder="Send your message here" class="form-control"></textarea>
                                </div>
                                <div class="col-lg-4 pull-right">
                                    <button class="btn btn-success btn-outline btn-block" style="padding-top:25%; padding-bottom:25%"><strong>Send!</strong></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Read below comments and tweets</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                        </div>
                    </div>
                    <div class="ibox-content no-padding">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p><a class="text-info" href="#">@Alan Marry</a> I belive that. Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry.</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 minuts ago</small>
                            </li>
                            <li class="list-group-item">
                                <p><a class="text-info" href="#">@Stock Man</a> Check this stock chart. This price is crazy!
                                </p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small>
                            </li>
                            <li class="list-group-item">
                                <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown printer took a galley
                                </p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Monthly Meeting Timeline </h5>
                        <span class="label label-primary pull-right">Meeting today</span>
                    </div>

                    <div class="ibox-content inspinia-timeline">

                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-4 date">
                                    <i class="fa fa-briefcase"></i> 20-Nov-2018
                                    <br/>
                                    <small class="text-navy">2 more days</small>
                                </div>
                                <div class="col-xs-8 content no-top-border">
                                    <span class="label label-default pull-right">Session 1</span>
                                    <p class="m-b-xs"><strong>Nama Sub Course</strong></p>

                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends
                                        in marketing and products.</p>

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-4 date">
                                    <i class="fa fa-camera-retro"></i> 23-Nov-2018
                                    <br/>
                                    <small class="text-navy">2 more days</small>
                                </div>
                                <div class="col-xs-8 content no-top-border">
                                    <span class="label label-default pull-right">Session 1</span>
                                    <p class="m-b-xs"><strong>Nama Sub Course 2</strong></p>

                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends
                                        in marketing and products.</p>

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-4 date">
                                    <i class="fa fa-gamepad"></i> 25-Nov-2018
                                    <br/>
                                    <small class="text-navy">2 more days</small>
                                </div>
                                <div class="col-xs-8 content no-top-border">
                                    <span class="label label-default pull-right">Session 1</span>
                                    <p class="m-b-xs"><strong>Nama Sub Course 3</strong></p>

                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends
                                        in marketing and products.</p>

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-4 date">
                                    <i class="fa fa-code"></i> 27-Nov-2018
                                    <br/>
                                    <small class="text-navy">2 more days</small>
                                </div>
                                <div class="col-xs-8 content no-top-border">
                                    <span class="label label-default pull-right">Session 1</span>
                                    <p class="m-b-xs"><strong>Nama Sub Course 4</strong></p>

                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends
                                        in marketing and products.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @include('ManagementFile/backend/footer')
</div>

    {{-- Calling modal --}}
    {{-- announcement modal --}}
    <div class="modal inmodal fade" id="moreannounce" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header" style="padding: 15px 15px;">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Announcement</h4>
                    </div>
                    <div class="modal-body" style="padding: 0px 0px 10px 0px;">
                        <div class="panel-body" style="padding:2px;">
                                <div class="social-avatar">
                                        <a href="" class="pull-left">
                                                        <img alt="image" src="{{ asset('admin/img/a1.jpg') }}">
                                                    </a>
                                                    <span class="pull-right text-right">
                                                            <span class="btn btn-primary p-xxs" style="align-items: center;
                                                                   padding: 0px 15px;
                                                                   margin-bottom: 6px"><small>Nama Sub-Coursenya</small></span>
                                                            </span>
                                        <div class="media-body">
                                            <a href="#">
                                                            Andrew Williams
                                                        </a>
                                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="social-body">
                                        <p>
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                            ipsum' will uncover many web sites still in their infancy. Packages
                                            and web page editors now use Lorem Ipsum as their default model text.
                                        </p>
                                    </div>
                                    <hr style="margin-top: -5px; margin-bottom: 0;">
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal" style="">Thank you! :D</button>
                    </div>
                </div>
            </div>
        </div>
    {{-- end of modal --}}

    {{-- event banner modal --}}
    {{-- Modal Content --}}
        {{-- 1 --}}
        <div class="modal inmodal" id="onbanner1" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Data for Development Festival</h4>
                        <small>Global Partnership for sustainable development data</small>
                    </div>
                    <div class="modal-body" style="background:#f4f7f8">
                            <img alt="image" class="img-responsive" src="{{ asset('admin/img/banner/bg-6.jpg') }}"> 
                    </div>
                    <div class="modal-body" style="background:#f4f7f8">
                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.</p>
                        </div>
                        <div class="modal-body" style="background:#ebebed">
                                <div class="row text-center">
                                    <div class="col-sm-6" style="border-right: 1px solid;">
                                        <h3>Date : <strong>10 Desember 2018</strong></h3> 
                                        <h3>Time : <strong>09.00 - 13.00</strong></h3>
                                    </div>
                                    <div class="col-sm-6">
                                            <h2 style="margin-top: 8%;">Ticket : <strong>Free Charge</strong></h2> 
                                        </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    {{-- end modal --}}
    {{-- end event banner --}}


@endsection
@section('scriptjs')
<!-- Flot -->
<script src="{{ asset( 'admin/js/plugins/flot/jquery.flot.js') }} "></script>
<script src="{{ asset( 'admin/js/plugins/flot/jquery.flot.tooltip.min.js') }} "></script>
<script src="{{ asset( 'admin/js/plugins/flot/jquery.flot.spline.js') }} "></script>
<script src="{{ asset( 'admin/js/plugins/flot/jquery.flot.resize.js') }} "></script>
<script src="{{ asset( 'admin/js/plugins/flot/jquery.flot.pie.js') }} "></script>

<!-- Peity -->
<script src="{{ asset( 'admin/js/plugins/peity/jquery.peity.min.js') }} "></script>
<script src="{{ asset( 'admin/js/demo/peity-demo.js') }} "></script>

<!-- GITTER -->
<script src="{{ asset( 'admin/js/plugins/gritter/jquery.gritter.min.js') }} "></script>

<!-- Sparkline -->
<script src="{{ asset( 'admin/js/plugins/sparkline/jquery.sparkline.min.js') }} "></script>

<!-- Sparkline demo data  -->
<script src="{{ asset( 'admin/js/demo/sparkline-demo.js') }} "></script>

<!-- ChartJS-->
<script src="{{ asset( 'admin/js/plugins/chartJs/Chart.min.js') }} "></script>

<!-- slick carousel-->
<script src="{{ asset( 'admin/js/plugins/slick/slick.min.js') }} "></script>


@endsection
