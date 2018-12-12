@foreach ($data as $d)
@extends('ManagementFile/backend/layout')
@section('title-dashboard') Advertising Class
@endsection

@section('scriptcss')
<!-- Toastr style -->
<link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

<!-- Gritter -->
<link href="{{ asset('admin/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

<link href="{{ asset('admin/css/plugins/iCheck/custom.css') }}" rel="stylesheet">

<link href="{{ asset('admin/css/plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
<link href="{{ asset('admin/css/plugins/fullcalendar/fullcalendar.print.css') }}" rel='stylesheet' media='print'>
@endsection

@section('body-content')



<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
        {{-- Navbar --}}
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
                <ol class="breadcrumb" style="background-color: transparent;margin: 20px 0px 0px 70px;">
                    <li>
                        <a href="{{ url('Dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb" style="background-color: transparent;">
                        <a>Course Category</a>
                    </li>
                    <li class="breadcrumb" style="background-color: transparent;">
                        <a>Selected Course</a>
                    </li>
                    <li class="active">
                        <strong>Advertising</strong>
                    </li>
                </ol>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome {{$d->NAMA_DEPAN}} {{$d->NAMA_BELAKANG}}</span>
                </li>
                <li>
                    <a class="right-sidebar-toggle"><i class="fa fa-tasks"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    {{-- Navbar --}}
    <div class="row  border-bottom white-bg dashboard-header" style="background-image:url('{{ asset('admin/img/course/bg-1.jpg') }}');">
        <div class="row">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-content" style="background-color:transparent; padding-bottom:0px; border-style:none">
                        <figure>
                            <iframe width="100%" height="280" src="http://www.youtube.com/embed/bwj2s_5e12U" frameborder="0" allowfullscreen></iframe>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-content profile-content" style="background-color:transparent; color: white;">
                        <h1><strong>Advertising Class</strong></h1>
                        <p><i class="fa fa-clock-o"></i> Uploaded on October 27, 2011</p>
                        <p>
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                            ipsum' will uncover many web sites still in their infancy. Packages and web page editors now
                            use Lorem Ipsum as their default model text.
                        </p>
                        <div class="col-xs-3">
                            <div class=" m-l-md text-center">
                                <span class="h4 font-bold m-t block">20</span>
                                <small class="text-muted m-b block" style="color:white">Sub Course</small>
                            </div>
                        </div>
                        <div class="col-xs-5">
                            <div class=" m-l-md text-center">
                                <span class="h4 font-bold m-t block">30</span>
                                <small class="text-muted m-b block" style="color:white">Master</small>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class=" m-l-md text-center">
                                <span class="h4 font-bold m-t block"><i class="fa fa-star-o fa-1x"></i>
                                        <i class="fa fa-star-o fa-1x"></i>
                                        <i class="fa fa-star-o fa-1x"></i>
                                        <i class="fa fa-star-o fa-1x"></i>
                                        <i class="fa fa-star-o fa-1x"></i></span>
                                <small class="text-muted m-b block" style="color:white">Rating</small>
                            </div>
                        </div>


                        <button class="btn btn-primary btn-block" style="margin-top:0px;margin-bottom:10px; padding: 5px 15px 10px 15px; text-align:center;"><strong>Rate this class!</strong></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            {{-- first page --}}
            <div class="wrapper wrapper-content">
                {{-- first row --}}
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title" style="padding-bottom: 40px;">
                                <h5 style="font-size: 20px;"><strong>Option</strong></h5>
                            </div>
                            <div class="ibox-content">
                                <div>
                                    <ul class="feed-activity-list">
                                        <li class="feed-element">
                                            <a data-toggle="tab" href="#overview">
                                                Overview
                                            </a>
                                        </li>
                                        <li class="feed-element">
                                            <a data-toggle="tab" href="#content">
                                                Course Content
                                            </a>
                                        </li>
                                        <li class="feed-element">
                                            <a data-toggle="tab" href="#announcement">
                                                Announcement
                                            </a>
                                        </li>
                                        <li class="feed-element">
                                            <a data-toggle="tab" href="#library">
                                                Library
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            {{-- Bagian Overview --}}
                            <div id="overview" class="tab-pane">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title " style="padding-bottom: 20px;">
                                        <h5 style="font-size: 20px;"><strong>Overview</strong></h5>
                                        <div class="ibox-tools ">
                                            <a class="collapse-link ">
                                            <i class="fa fa-chevron-up "></i>
                                        </a>
                                            <a class="dropdown-toggle " data-toggle="dropdown " href="# ">
                                            <i class="fa fa-wrench "></i>
                                        </a>
                                            <ul class="dropdown-menu dropdown-user ">
                                                <li><a href="# ">Config option 1</a>
                                                </li>
                                                <li><a href="# ">Config option 2</a>
                                                </li>
                                            </ul>
                                            <a class="close-link ">
                                            <i class="fa fa-times "></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content no-padding animated fadeIn ">
                                        <div class="list-group active">
                                            <div class="panel-body">
                                                <h3>About this course</h3>

                                                <p>New to programming? Want to create awesome apps? This is the perfect course
                                                    for you.</p>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="list-group">
                                            <div class="panel-body">
                                                <div class="col-md-3">
                                                    <h4>Description</h4>
                                                </div>
                                                <div class="col-md-9 border-left">
                                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                                    <p>A wonderful serenity has taken possession of my entire soul, like these
                                                        sweet mornings of spring which I enjoy with my whole heart. I am
                                                        alone, and feel the charm of existence in this spot, which was created
                                                        for the bliss of souls like mine.</p>

                                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of
                                                        mere tranquil existence, that I neglect my talents. I should be incapable
                                                        of drawing a single stroke at the present moment; and yet I feel
                                                        that I never was a greater artist than now. When.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group">
                                            <div class="panel-body">
                                                <div class="col-md-3">
                                                    <h4>Master</h4>
                                                </div>
                                                <div class="col-md-9 border-left">

                                                    <div class="profile-image">
                                                        <img src="{{ asset('admin/img/a4.jpg') }}" class="img-circle circle-border m-b-md" alt="profile">
                                                    </div>
                                                    <div class="profile-info">
                                                        <div class="">
                                                            <div>
                                                                <span class="pull-right text-right">
                                                                <span class="btn btn-outline btn-primary p-xxs" style="align-items: center;
                                                                padding: 0px 15px;
                                                                margin-bottom: 6px"><small>Detail</small></span>
                                                                <br/>
                                                                <small style="margin-right:10px;"><strong>15</strong> Events</small>
                                                                </span>
                                                                <h2 class="no-margins">
                                                                    Alex Smith
                                                                </h2>

                                                                <h4>Founder of Groupeq</h4>
                                                                <small>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form Ipsum available.</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <div class="profile-image">
                                                        <img src="{{ asset('admin/img/a2.jpg') }}" class="img-circle circle-border m-b-md" alt="profile">
                                                    </div>
                                                    <div class="profile-info">
                                                        <div class="">
                                                            <div>
                                                                <span class="pull-right text-right">
                                                                    <span class="btn btn-outline btn-primary p-xxs" style="align-items: center;
                                                                    padding: 0px 15px;
                                                                    margin-bottom: 6px"><small>Detail</small></span>
                                                                <br/>
                                                                <small style="margin-right:10px;"><strong>15</strong> Events</small>
                                                                </span>
                                                                <h2 class="no-margins">
                                                                    Thomas Scanlan
                                                                </h2>

                                                                <h4>CS Instructor and Software Developer</h4>
                                                                <small>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form Ipsum available.</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Akhirnya --}} {{-- Bagian Course Content --}}
                            <div id="content" class="tab-pane active">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title" style="padding-bottom: 20px;">
                                        <h5 style="font-size: 20px;"><strong>Course Content</strong></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                <i class="fa fa-wrench"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-user ">
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
                                    <div class="ibox-content no-padding animated fadeIn" style="margin-bottom:200px;">
                                        <div class="list-group">
                                            <div class="panel-body">
                                                <div class="ibox" style="margin-bottom: 0px;">
                                                    <button class="btn btn-primary btn-outline btn-block collapse-link">
                                                                    <span class="pull-right text-right">
                                                                    <small><strong>0/5</strong></small>
                                                                    </span>
                                                                    <div class="text-left">
                                                                        <h4 class="no-margins" style=" font-weight:200">
                                                                            Master : Alex Smith
                                                                        </h4>
                                                                        <h2 style="margin-top: 10px; font-weight:600">Understand Exposure</h2>
                                                                    </div>
                                                                    </button>
                                                    <div class="ibox-content no-padding gray-bg">
                                                        <div class="list-group">
                                                            <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                                <span class="pull-right text-right" style="margin-top: 5px;">
                                                                            <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                                margin-right: 15px;
                                                                                padding: 3px 10px 3px 10px;
                                                                                font-size: unset;">Detail Event</h3><strong><i class="fa fa-check-circle fa-2x"></i></strong></span>
                                                                </span>
                                                                <div class="text-left">
                                                                    <h6 class="no-margins" style=" font-weight:200">
                                                                        Saturday, 20/1/2019
                                                                    </h6>
                                                                    <h4 style="font-weight:600">Monthly Meeting : 2</h4>
                                                                </div>
                                                            </div>
                                                            <hr class="hr-line-solid no-margins no-padding">
                                                            <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                                <span class="pull-right text-right" style="margin-top: 5px;">
                                                                                <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                                    margin-right: 15px;
                                                                                    padding: 3px 10px 3px 10px;
                                                                                    font-size: unset;">Detail Event</h3><strong><i class="fa fa-check-circle fa-2x"></i></strong></span>
                                                                </span>
                                                                <div class="text-left">
                                                                    <h6 class="no-margins" style=" font-weight:200">
                                                                        Saturday, 20/2/2019
                                                                    </h6>
                                                                    <h4 style="font-weight:600">Monthly Meeting : 3</h4>
                                                                </div>
                                                            </div>
                                                            <hr class="hr-line-solid no-margins no-padding">
                                                            <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                                <span class="pull-right text-right" style="margin-top: 5px;">
                                                                                    <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                                        margin-right: 15px;
                                                                                        padding: 3px 10px 3px 10px;
                                                                                        font-size: unset;">Detail Event</h3><strong><i class="fa fa-check-circle fa-2x"></i></strong></span>
                                                                </span>
                                                                <div class="text-left">
                                                                    <h6 class="no-margins" style=" font-weight:200">
                                                                        Saturday, 20/12/2018
                                                                    </h6>
                                                                    <h4 style="font-weight:600">Monthly Meeting : 1</h4>
                                                                </div>
                                                            </div>
                                                            <hr class="hr-line-solid no-margins no-padding">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="ibox" style="margin-bottom: 0px;">
                                                    <button class="btn btn-primary btn-outline btn-block collapse-link">
                                                                    <span class="pull-right text-right">
                                                                    <small><strong>0/5</strong></small>
                                                                    </span>
                                                                    <div class="text-left">
                                                                        <h4 class="no-margins" style=" font-weight:200">
                                                                            Master : Saridono Bob
                                                                        </h4>
                                                                        <h2 style="margin-top: 10px; font-weight:600">Photo Editing in Lightroom</h2>
                                                                    </div>
                                                                    </button>
                                                    <div class="ibox-content no-padding gray-bg">
                                                        <div class="list-group">
                                                            <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                                <span class="pull-right text-right" style="margin-top: 5px;">
                                                                            <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                                margin-right: 15px;
                                                                                padding: 3px 10px 3px 10px;
                                                                                font-size: unset;">Detail Event</h3><strong><i class="fa fa-check-circle fa-2x"></i></strong></span>
                                                                </span>
                                                                <div class="text-left">
                                                                    <h6 class="no-margins" style=" font-weight:200">
                                                                        Saturday, 20/1/2019
                                                                    </h6>
                                                                    <h4 style="font-weight:600">Monthly Meeting : 2</h4>
                                                                </div>
                                                            </div>
                                                            <hr class="hr-line-solid no-margins no-padding">
                                                            <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                                <span class="pull-right text-right" style="margin-top: 5px;">
                                                                                <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                                    margin-right: 15px;
                                                                                    padding: 3px 10px 3px 10px;
                                                                                    font-size: unset;">Detail Event</h3><strong><i class="fa fa-check-circle fa-2x"></i></strong></span>
                                                                </span>
                                                                <div class="text-left">
                                                                    <h6 class="no-margins" style=" font-weight:200">
                                                                        Saturday, 20/2/2019
                                                                    </h6>
                                                                    <h4 style="font-weight:600">Monthly Meeting : 3</h4>
                                                                </div>
                                                            </div>
                                                            <hr class="hr-line-solid no-margins no-padding">
                                                            <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                                <span class="pull-right text-right" style="margin-top: 5px;">
                                                                                    <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                                        margin-right: 15px;
                                                                                        padding: 3px 10px 3px 10px;
                                                                                        font-size: unset;">Detail Event</h3><strong><i class="fa fa-check-circle fa-2x"></i></strong></span>
                                                                </span>
                                                                <div class="text-left">
                                                                    <h6 class="no-margins" style=" font-weight:200">
                                                                        Saturday, 20/12/2018
                                                                    </h6>
                                                                    <h4 style="font-weight:600">Monthly Meeting : 1</h4>
                                                                </div>
                                                            </div>
                                                            <hr class="hr-line-solid no-margins no-padding">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="ibox" style="margin-bottom: 0px;">
                                                    <button class="btn btn-primary btn-outline btn-block collapse-link">
                                                                    <span class="pull-right text-right">
                                                                    <small><strong>0/5</strong></small>
                                                                    </span>
                                                                    <div class="text-left">
                                                                        <h4 class="no-margins" style=" font-weight:200">
                                                                            Master : Petter Jackson
                                                                        </h4>
                                                                        <h2 style="margin-top: 10px; font-weight:600">Make Money With Photography</h2>
                                                                    </div>
                                                                    </button>
                                                    <div class="ibox-content no-padding gray-bg">
                                                        <div class="list-group">
                                                            <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                                <span class="pull-right text-right" style="margin-top: 5px;">
                                                                            <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                                margin-right: 15px;
                                                                                padding: 3px 10px 3px 10px;
                                                                                font-size: unset;">Detail Event</h3><strong><i class="fa fa-check-circle fa-2x"></i></strong></span>
                                                                </span>
                                                                <div class="text-left">
                                                                    <h6 class="no-margins" style=" font-weight:200">
                                                                        Saturday, 20/1/2019
                                                                    </h6>
                                                                    <h4 style="font-weight:600">Monthly Meeting : 2</h4>
                                                                </div>
                                                            </div>
                                                            <hr class="hr-line-solid no-margins no-padding">
                                                            <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                                <span class="pull-right text-right" style="margin-top: 5px;">
                                                                                <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                                    margin-right: 15px;
                                                                                    padding: 3px 10px 3px 10px;
                                                                                    font-size: unset;">Detail Event</h3><strong><i class="fa fa-check-circle fa-2x"></i></strong></span>
                                                                </span>
                                                                <div class="text-left">
                                                                    <h6 class="no-margins" style=" font-weight:200">
                                                                        Saturday, 20/2/2019
                                                                    </h6>
                                                                    <h4 style="font-weight:600">Monthly Meeting : 3</h4>
                                                                </div>
                                                            </div>
                                                            <hr class="hr-line-solid no-margins no-padding">
                                                            <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                                <span class="pull-right text-right" style="margin-top: 5px;">
                                                                                    <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                                        margin-right: 15px;
                                                                                        padding: 3px 10px 3px 10px;
                                                                                        font-size: unset;">Detail Event</h3><strong><i class="fa fa-check-circle fa-2x"></i></strong></span>
                                                                </span>
                                                                <div class="text-left">
                                                                    <h6 class="no-margins" style=" font-weight:200">
                                                                        Saturday, 20/12/2018
                                                                    </h6>
                                                                    <h4 style="font-weight:600">Monthly Meeting : 1</h4>
                                                                </div>
                                                            </div>
                                                            <hr class="hr-line-solid no-margins no-padding">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Akhirnya --}} {{-- Bagian Announcement --}}
                            <div id="announcement" class="tab-pane">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title" style="padding-bottom: 20px;">
                                        <h5 style="font-size: 20px;"><strong>Announcement</strong></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                    <i class="fa fa-wrench"></i>
                                                </a>
                                            <ul class="dropdown-menu dropdown-user ">
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
                                    <div class="ibox-content no-padding animated fadeIn">
                                        <div class="list-group active">
                                            <div class="panel-body">
                                                <div class="social-avatar">
                                                    <a href="" class="pull-left">
                                                                    <img alt="image" src="{{ asset('admin/img/a1.jpg') }}">
                                                                </a>
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
                                                <hr>
                                                <div class="social-avatar">
                                                    <a href="" class="pull-left">
                                                                            <img alt="image" src="{{ asset('admin/img/a4.jpg') }}">
                                                                        </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                                                Steve Gets
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
                                                <hr>
                                                <div class="social-avatar">
                                                    <a href="" class="pull-left">
                                                                            <img alt="image" src="{{ asset('admin/img/a3.jpg') }}">
                                                                        </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                                                Rosalia Steve
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
                                                <hr>
                                                <div class="social-avatar">
                                                    <a href="" class="pull-left">
                                                                            <img alt="image" src="{{ asset('admin/img/a2.jpg') }}">
                                                                        </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                                                Phil
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Akhirnya --}} {{-- Bagian Library --}}
                            <div id="library" class="tab-pane">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title" style="padding-bottom: 20px;">
                                        <h5 style="font-size: 20px;"><strong>Library</strong></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                        <i class="fa fa-wrench"></i>
                                                    </a>
                                            <ul class="dropdown-menu dropdown-user ">
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
                                    <div class="ibox-content no-padding animated fadeIn">
                                        <div class="list-group active">
                                            <div class="panel-body">
                                                <div class="col-md-3">
                                                    <a data-toggle="tab" href="#software">
                                                        <h4>Software</h4>
                                                    </a>
                                                    <a data-toggle="tab" href="#book">
                                                        <h4>Book</h4>
                                                    </a>
                                                </div>

                                                <div class="col-md-9 border-left">
                                                    <div class="tab-content">
                                                        {{-- Software tab --}}
                                                        <div id="software" class="tab-pane active">
                                                            <div class="ibox float-e-margins animated fadeIn">
                                                                <div class="social-avatar">
                                                                    <a href="" class="pull-left">
                                                                                        <img alt="image" src="{{ asset('admin/img/a1.jpg') }}">
                                                                                    </a>
                                                                    <div class="media-body">
                                                                        <span class="pull-right text-right">
                                                                                    <span class="btn btn-outline btn-primary p-xxs" style="align-items: center;
                                                                                    padding: 0px 15px;
                                                                                    margin-bottom: 6px"><small>Detail</small></span>
                                                                        <br/>
                                                                        <small style="margin-right:10px;"><strong>273</strong> Times</small>
                                                                        </span>
                                                                        <a href="#">
                                                                                            Andrew Williams
                                                                                        </a>
                                                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                                                    </div>
                                                                </div>
                                                                <div class="social-body">
                                                                    <p>
                                                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                                                        ipsum' will uncover many web sites still in their
                                                                        infancy. Packages and web page editors now use Lorem
                                                                        Ipsum as their default model text.
                                                                    </p>
                                                                </div>
                                                                <hr>
                                                                <div class="social-avatar">
                                                                    <a href="" class="pull-left">
                                                                                            <img alt="image" src="{{ asset('admin/img/a4.jpg') }}">
                                                                                        </a>
                                                                    <div class="media-body">
                                                                        <span class="pull-right text-right">
                                                                                    <span class="btn btn-outline btn-primary p-xxs" style="align-items: center;
                                                                                    padding: 0px 15px;
                                                                                    margin-bottom: 6px"><small>Detail</small></span>
                                                                        <br/>
                                                                        <small style="margin-right:10px;"><strong>259</strong> Times</small>
                                                                        </span>
                                                                        <a href="#">
                                                                                                Andrew Williams
                                                                                            </a>
                                                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                                                    </div>
                                                                </div>
                                                                <div class="social-body">
                                                                    <p>
                                                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                                                        ipsum' will uncover many web sites still in their
                                                                        infancy. Packages and web page editors now use Lorem
                                                                        Ipsum as their default model text.
                                                                    </p>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                        {{-- Akhirnya --}} {{-- Book Tab --}}
                                                        <div id="book" class="tab-pane">
                                                            <div class="ibox float-e-margins animated fadeIn">
                                                                <div class="social-avatar">
                                                                    <a href="" class="pull-left">
                                                                                        <img alt="image" src="{{ asset('admin/img/a2.jpg') }}">
                                                                                    </a>
                                                                    <div class="media-body">
                                                                        <span class="pull-right text-right">
                                                                                    <span class="btn btn-outline btn-primary p-xxs" style="align-items: center;
                                                                                    padding: 0px 15px;
                                                                                    margin-bottom: 6px"><small>Detail</small></span>
                                                                        <br/>
                                                                        <small style="margin-right:10px;"><strong>15</strong> Events</small>
                                                                        </span>
                                                                        <a href="#">
                                                                                            Alexander Witch
                                                                                        </a>
                                                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                                                    </div>
                                                                </div>
                                                                <div class="social-body">
                                                                    <p>
                                                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                                                        ipsum' will uncover many web sites still in their
                                                                        infancy. Packages and web page editors now use Lorem
                                                                        Ipsum as their default model text.
                                                                    </p>
                                                                </div>
                                                                <hr>
                                                                <div class="social-avatar">
                                                                    <a href="" class="pull-left">
                                                                                            <img alt="image" src="{{ asset('admin/img/a3.jpg') }}">
                                                                                        </a>
                                                                    <div class="media-body">
                                                                        <span class="pull-right text-right">
                                                                                    <span class="btn btn-outline btn-primary p-xxs" style="align-items: center;
                                                                                    padding: 0px 15px;
                                                                                    margin-bottom: 6px"><small>Detail</small></span>
                                                                        <br/>
                                                                        <small style="margin-right:10px;"><strong>15</strong> Events</small>
                                                                        </span>
                                                                        <a href="#">
                                                                                                Andrew Williams
                                                                                            </a>
                                                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                                                    </div>
                                                                </div>
                                                                <div class="social-body">
                                                                    <p>
                                                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                                                        ipsum' will uncover many web sites still in their
                                                                        infancy. Packages and web page editors now use Lorem
                                                                        Ipsum as their default model text.
                                                                    </p>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                        {{-- Akhirnya --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Akhirnya --}}
                            </div>
                        </div>
                    </div>
                    {{-- first row --}} {{-- first page --}}
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
@endsection
