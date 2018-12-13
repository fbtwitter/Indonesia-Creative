@foreach ($data as $d)
@extends('ManagementFile/backend/layout')
@section('title-dashboard') IC Surabaya
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
                    <ol class="breadcrumb" style="margin: 20px 0px 0px 70px;">
                        <li>
                            <a href="{{ url('Dashboard')}}">Home</a>
                        </li>
                    </ol>
                </div>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome {{$d->NAMA_DEPAN}}</span>
                </li>
                <li>
                    <a class="right-sidebar-toggle"><i class="fa fa-tasks"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    {{-- Navbar --}} {{--
    <div class="row  border-bottom white-bg dashboard-header">

        <div class="col-md-3">
            <h2>Welcome {{$d->NAMA_DEPAN}}!</h2>
            <small>Student Ranking Based On Point of Monthly Meeting.</small>
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
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="slick_demo_1">
                    <div>
                        <div class="container ibox-content" style="width:100%;height:auto;padding:0px;margin:0px;">
                            <img alt="image" class="banner text-center" src="{{ asset('admin/img/banner/bg-4.jpg') }}">
                            <div class="carousel-caption">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="container ibox-content" style="width:100%;height:auto;padding:0px;margin:0px;">
                            <img alt="image" class="banner text-center" src="{{ asset('admin/img/banner/bg-5.jpg') }}">
                            <div class="carousel-caption">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="container ibox-content" style="width:100%;height:auto;padding:0px;margin:0px;">
                            <img alt="image" class="banner text-center" src="{{ asset('admin/img/banner/bg-6.jpg') }}">
                            <div class="carousel-caption">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-left ">
                <div class="col-xs-4 ">
                    <div class=" m-l-md ">
                        <span class="h4 font-bold m-t block ">14</span>
                        <small class="text-muted m-b block ">Total Class</small>
                    </div>
                </div>
                <div class="col-xs-4 ">
                    <span class="h4 font-bold m-t block "> 15,234</span>
                    <small class="text-muted m-b block ">Student Here</small>
                </div>
                <div class="col-xs-4 ">
                    <span class="h4 font-bold m-t block ">1,653</span>
                    <small class="text-muted m-b block ">Master Here</small>
                </div>

            </div>
        </div>
        <div class="col-md-3 ">
            <div class="statistic-box ">
                <h4>
                    Project Beta progress
                </h4>
                <p>
                    You have two project with not compleated task.
                </p>
                <div class="row text-center ">
                    <div class="col-lg-6 ">
                        <canvas id="doughnutChart2 " width="80 " height="80 " style="margin: 18px auto 0 "></canvas>
                        <h5>Kolter</h5>
                    </div>
                    <div class="col-lg-6 ">
                        <canvas id="doughnutChart " width="80 " height="80 " style="margin: 18px auto 0 "></canvas>
                        <h5>Maxtor</h5>
                    </div>
                </div>
                <div class="m-t ">
                    <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                </div>
            </div>
        </div>
    </div> --}} {{-- Side right--}}
    <div class="sidebar-panel">
        <div>
            <h4>Messages <span class="badge badge-info pull-right">16</span></h4>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="img/a1.jpg">
                </a>
                <div class="media-body">
                    There are many variations of passages of Lorem Ipsum available.
                    <br>
                    <small class="text-muted">Today 4:21 pm</small>
                </div>
            </div>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="img/a2.jpg">
                </a>
                <div class="media-body">
                    TIt is a long established fact that.
                    <br>
                    <small class="text-muted">Yesterday 2:45 pm</small>
                </div>
            </div>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="img/a3.jpg">
                </a>
                <div class="media-body">
                    Many desktop publishing packages.
                    <br>
                    <small class="text-muted">Yesterday 1:10 pm</small>
                </div>
            </div>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="img/a4.jpg">
                </a>
                <div class="media-body">
                    The generated Lorem Ipsum is therefore always free.
                    <br>
                    <small class="text-muted">Monday 8:37 pm</small>
                </div>
            </div>
        </div>
        <div class="m-t-md">
            <h4>Statistics</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
            </p>
            <div class="row m-t-sm">
                <div class="col-md-6">
                    <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                    <h5><strong>169</strong> Posts</h5>
                </div>
                <div class="col-md-6">
                    <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                    <h5><strong>28</strong> Orders</h5>
                </div>
            </div>
        </div>
        <div class="m-t-md">
            <h4>Discussion</h4>
            <div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge badge-primary">16</span> General topic
                    </li>
                    <li class="list-group-item ">
                        <span class="badge badge-info">12</span> The generated Lorem
                    </li>
                    <li class="list-group-item">
                        <span class="badge badge-warning">7</span> There are many variations
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
                                    <img alt="image" class="img-responsive" src="{{ asset('admin/img/banner/bg-6.jpg') }}">                                    {{--
                                    <div class="carousel-caption">
                                        <p>This is simple caption 1</p>
                                    </div> --}}
                                </div>
                                <div class="item ">
                                    <img alt="image" class="img-responsive" src="{{ asset('admin/img/banner/bg-7.jpg') }}">                                    {{--
                                    <div class="carousel-caption">
                                        <p>This is simple caption 2</p>
                                    </div> --}}
                                </div>
                                <div class="item">
                                    <img alt="image" class="img-responsive" src="{{ asset('admin/img/banner/bg-8.jpg') }}">                                    {{--
                                    <div class="carousel-caption caption-control">
                                        <p>This is simple caption 3</p>
                                    </div> --}}
                                </div>
                                <div class="item">
                                    <img alt="image" class="img-responsive" src="{{ asset('admin/img/banner/bg-9.jpg') }}">                                    {{--
                                    <div class="carousel-caption caption-control">
                                        <p>This is simple caption 3</p>
                                    </div> --}}
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
                {{--
                <div class="ibox float-e-margins">
                    <div class="slick_demo_1">
                        <div>
                            <div class="container ibox-content" style="width:100%;height:auto;margin:0px;">
                                <img alt="image" class="banner text-center" src="{{ asset('admin/img/banner/bg-4.jpg') }}">
                                <div class="carousel-caption">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="container ibox-content" style="width:100%;height:auto;padding:0px;margin:0px;">
                                <img alt="image" class="banner text-center" src="{{ asset('admin/img/banner/bg-5.jpg') }}">
                                <div class="carousel-caption">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="container ibox-content" style="width:100%;height:auto;padding:0px;margin:0px;">
                                <img alt="image" class="banner text-center" src="{{ asset('admin/img/banner/bg-6.jpg') }}">
                                <div class="carousel-caption">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>


        <div class="row">

            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">Today</span>
                        <h5>visits</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">22 285,400</h1>
                        <div class="stat-percent font-bold text-navy">20% <i class="fa fa-level-up"></i></div>
                        <small>New orders</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">Monthly</span>
                        <h5>Orders</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">60 420,600</h1>
                        <div class="stat-percent font-bold text-info">40% <i class="fa fa-level-up"></i></div>
                        <small>New orders</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-warning pull-right">Annual</span>
                        <h5>Income</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">$ 120 430,800</h1>
                        <div class="stat-percent font-bold text-warning">16% <i class="fa fa-level-up"></i></div>
                        <small>New orders</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>New data for the report</h5>
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
                    <div class="ibox-content ibox-heading">
                        <h3>Stock price up
                            <div class="stat-percent text-navy">34% <i class="fa fa-level-up"></i></div>
                        </h3>
                        <small><i class="fa fa-stack-exchange"></i> New economic data from the previous quarter.</small>
                    </div>
                    <div class="ibox-content">
                        <div>

                            <div class="pull-right text-right">

                                <span class="bar_dashboard">5,3,9,6,5,9,7,3,5,2,4,7,3,2,7,9,6,4,5,7,3,2,1,0,9,5,6,8,3,2,1</span>
                                <br/>
                                <small class="font-bold">$ 20 054.43</small>
                            </div>
                            <h4>NYS report new data!
                                <br/>
                                <small class="m-r"><a href="graph_flot.html"> Check the stock price! </a> </small>
                            </h4>
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
                            <li class="list-group-item ">
                                <p><a class="text-info" href="#">@Jonathan Febrick</a> The standard chunk of Lorem Ipsum</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Timeline</h5>
                        <span class="label label-primary">Meeting today</span>
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

                    <div class="ibox-content inspinia-timeline">

                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i> 6:00 am
                                    <br/>
                                    <small class="text-navy">2 hour ago</small>
                                </div>
                                <div class="col-xs-7 content no-top-border">
                                    <p class="m-b-xs"><strong>Meeting</strong></p>

                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends
                                        in marketing and products.</p>

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-file-text"></i> 7:00 am
                                    <br/>
                                    <small class="text-navy">3 hour ago</small>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>Send documents to Mike</strong></p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                        has been the industry's standard dummy text ever since.</p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-coffee"></i> 8:00 am
                                    <br/>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>Coffee Break</strong></p>
                                    <p>
                                        Go to shop and find some products. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                        has been the industry's.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-phone"></i> 11:00 am
                                    <br/>
                                    <small class="text-navy">21 hour ago</small>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>Phone with Jeronimo</strong></p>
                                    <p>
                                        Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </p>
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

{{-- Content Right SideBar --}}
<div id="right-sidebar" class="animated">
    <div class="sidebar-container">

        <ul class="nav nav-tabs navs-2">
            <li class="active"><a data-toggle="tab" href="#bar-1">
                    Announcements
                        </a></li>
            <li class=""><a data-toggle="tab" href="#bar-2">
                    Joined Course
                </a></li>
        </ul>

        <div class="tab-content">
            {{-- Tab 1 --}}
            <div id="bar-1" class="tab-pane active">

                <div class="sidebar-title">
                    <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
                    <small><i class="fa fa-tim"></i> You have 10 new message.</small>
                </div>

                <div>

                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="img/a1.jpg">

                                <div class="m-t-xs">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="media-body">

                                There are many variations of passages of Lorem Ipsum available.
                                <br>
                                <small class="text-muted">Today 4:21 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="img/a2.jpg">
                            </div>
                            <div class="media-body">
                                The point of using Lorem Ipsum is that it has a more-or-less normal.
                                <br>
                                <small class="text-muted">Yesterday 2:45 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                <div class="m-t-xs">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                <br>
                                <small class="text-muted">Yesterday 1:10 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                            </div>

                            <div class="media-body">
                                Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                <br>
                                <small class="text-muted">Monday 8:37 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="img/a8.jpg">
                            </div>
                            <div class="media-body">

                                All the Lorem Ipsum generators on the Internet tend to repeat.
                                <br>
                                <small class="text-muted">Today 4:21 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="img/a7.jpg">
                            </div>
                            <div class="media-body">
                                Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                <br>
                                <small class="text-muted">Yesterday 2:45 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                <div class="m-t-xs">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                                <br>
                                <small class="text-muted">Yesterday 1:10 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                            </div>
                            <div class="media-body">
                                Uncover many web sites still in their infancy. Various versions have.
                                <br>
                                <small class="text-muted">Monday 8:37 pm</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Tab 2 --}}
            <div id="bar-2" class="tab-pane">

                <div class="sidebar-title">
                    <h3> <i class="fa fa-cube"></i>Monthly Meeting</h3>
                    <small><i class="fa fa-tim"></i> You have 14 joined meeting. 10 not completed.</small>
                </div>

                <ul class="sidebar-list">
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago</div>
                            <h4>Business valuation</h4>
                            It is a long established fact that a reader will be distracted.

                            <div class="small">Completion with: 22%</div>
                            <div class="progress progress-mini">
                                <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                            </div>
                            <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago</div>
                            <h4>Contract with Company </h4>
                            Many desktop publishing packages and web page editors.

                            <div class="small">Completion with: 48%</div>
                            <div class="progress progress-mini">
                                <div style="width: 48%;" class="progress-bar"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago</div>
                            <h4>Meeting</h4>
                            By the readable content of a page when looking at its layout.

                            <div class="small">Completion with: 14%</div>
                            <div class="progress progress-mini">
                                <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span class="label label-primary pull-right">NEW</span>
                                <h4>The generated</h4>
                                There are many variations of passages of Lorem Ipsum available.
                                <div class="small">Completion with: 22%</div>
                                <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                            </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago</div>
                            <h4>Business valuation</h4>
                            It is a long established fact that a reader will be distracted.

                            <div class="small">Completion with: 22%</div>
                            <div class="progress progress-mini">
                                <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                            </div>
                            <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago</div>
                            <h4>Contract with Company </h4>
                            Many desktop publishing packages and web page editors.

                            <div class="small">Completion with: 48%</div>
                            <div class="progress progress-mini">
                                <div style="width: 48%;" class="progress-bar"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago</div>
                            <h4>Meeting</h4>
                            By the readable content of a page when looking at its layout.

                            <div class="small">Completion with: 14%</div>
                            <div class="progress progress-mini">
                                <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span class="label label-primary pull-right">NEW</span>
                                <h4>The generated</h4>
                                <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                                There are many variations of passages of Lorem Ipsum available.
                                <div class="small">Completion with: 22%</div>
                                <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                            </a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>
@endsection
 @endforeach
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

<!-- Additional style only for demo purpose -->
<style>
    .slick_demo_2 .ibox-content {
        margin: 0 10px;
    }
</style>

<script>
    $(document).ready(function(){


            $('.slick_demo_1').slick({
                dots: false
            });

            $('.slick_demo_2').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.slick_demo_3').slick({
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                adaptiveHeight: true
            });
        });

</script>
@endsection
