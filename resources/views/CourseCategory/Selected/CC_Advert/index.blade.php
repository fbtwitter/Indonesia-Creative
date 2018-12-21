@extends('ManagementFile/backend/layout')
@section('title-dashboard') Advertising Class | IC Surabaya
@endsection


@section('scriptcss')
<link href="{{ asset('admin/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
<link href="{{ asset('admin/css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
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
                    <li class="breadcrumb" style="background-color: transparent;">
                        <a>Selected Course</a>
                    </li>
                    <li class="active">
                        <strong>Advertising</strong>
                    </li>
                </ol>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                {{-- <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome {{$data->NAMA_DEPAN}} {{$data->NAMA_BELAKANG}}</span>
                </li>
                <li>
                    <a class="right-sidebar-toggle"><i class="fa fa-tasks"></i></a>
                </li> --}}
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


                        <button class="btn btn-primary btn-block" style="margin-top:0px;margin-bottom:10px; padding: 5px 15px 10px 15px; text-align:center;" data-toggle="modal" data-target="#ratekelas_1"><strong>Rate this class!</strong></button>
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
                                                                margin-bottom: 6px" data-toggle="modal" data-target="#master_1"><small>Detail</small></span>
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
                                                                <div class="panel-body white-bg" style="padding: 10px 15px 0px 15px;">
                                                                        <div class="text-center">
                                                                                <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-warning btn-block" style="margin-top:-5px;
                                                                                    margin-right: 15px;
                                                                                    padding: 3px 10px 3px 10px;
                                                                                    font-size: unset; font-weight:600;" data-toggle="modal" data-target="#annon1">Announcement</h3>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="hr-line-solid no-margins no-padding">
                                                            <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                                <span class="pull-right text-right" style="margin-top: 5px;">
                                                                            <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                                margin-right: 15px;
                                                                                padding: 3px 10px 3px 10px;
                                                                                font-size: unset;" data-toggle="modal" data-target="#detailcs1">Detail Event</h3><strong><i class="fa fa-check-circle  fa-2x"></i></strong></span>
                                                                </span>
                                                                <div class="text-left">
                                                                    <h6 class="no-margins" style=" font-weight:200">
                                                                        Saturday, 20/1/2019
                                                                    </h6>
                                                                    <h4 style="font-weight:600">Monthly Meeting : 1</h4>
                                                                </div>
                                                            </div>
                                                            <hr class="hr-line-solid no-margins no-padding">
                                                            <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                                <span class="pull-right text-right" style="margin-top: 5px;">
                                                                                <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                                    margin-right: 15px;
                                                                                    padding: 3px 10px 3px 10px;
                                                                                    font-size: unset;" data-toggle="modal" data-target="#detailcs2">Detail Event</h3><strong><i class="fa fa-check-circle  fa-2x"></i></strong></span>
                                                                </span>
                                                                <div class="text-left">
                                                                    <h6 class="no-margins" style=" font-weight:200">
                                                                        Saturday, 20/2/2019
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
                                                                        Saturday, 20/12/2018
                                                                    </h6>
                                                                    <h4 style="font-weight:600">Monthly Meeting : 3</h4>
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
                                                <hr>
                                                <div class="social-avatar">
                                                    <a href="" class="pull-left">
                                                                            <img alt="image" src="{{ asset('admin/img/a4.jpg') }}">
                                                                        </a>
                                                                        <span class="pull-right text-right">
                                                                                <span class="btn btn-primary p-xxs" style="align-items: center;
                                                                                       padding: 0px 15px;
                                                                                       margin-bottom: 6px"><small>Nama Sub-Coursenya</small></span>
                                                                                </span>
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
                                                                        <span class="pull-right text-right">
                                                                                <span class="btn btn-primary p-xxs" style="align-items: center;
                                                                                       padding: 0px 15px;
                                                                                       margin-bottom: 6px"><small>Nama Sub-Coursenya</small></span>
                                                                                </span>
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
                                                                        <span class="pull-right text-right">
                                                                                <span class="btn btn-primary p-xxs" style="align-items: center;
                                                                                       padding: 0px 15px;
                                                                                       margin-bottom: 6px"><small>Nama Sub-Coursenya</small></span>
                                                                                </span>
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
                                                                                        <img alt="image" src="{{ asset('admin/img/library/sf_1.png') }}">
                                                                                    </a>
                                                                    <div class="media-body">
                                                                        <span class="pull-right text-right">
                                                                                    <span class="btn btn-outline btn-primary p-xxs" style="align-items: center;
                                                                                    padding: 0px 15px;
                                                                                    margin-bottom: 6px" href="https://www.adobe.com/sea/products/premiere.html"><small>Downloads</small></span>
                                                                        <br/>
                                                                        <small style="margin-right:10px;"><strong>273</strong> Times</small>
                                                                        </span>
                                                                        <a href="#">
                                                                                Adobe Premiere Pro
                                                                                        </a>
                                                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                                                    </div>
                                                                </div>
                                                                <div class="social-body">
                                                                    <p>
                                                                            Adobe Premiere Pro is a timeline-based video editing app developed by Adobe Systems and published as part of the Adobe Creative Cloud licensing program. First launched in 2003, Adobe Premiere Pro is a successor of Adobe Premiere
                                                                    </p>
                                                                </div>
                                                                <hr>
                                                                <div class="social-avatar">
                                                                    <a href="" class="pull-left">
                                                                                            <img alt="image" src="{{ asset('admin/img/library/sf_2.png') }}">
                                                                                        </a>
                                                                    <div class="media-body">
                                                                        <span class="pull-right text-right">
                                                                                    <span class="btn btn-outline btn-primary p-xxs" style="align-items: center;
                                                                                    padding: 0px 15px;
                                                                                    margin-bottom: 6px" href="https://www.adobe.com/sea/products/aftereffects.html"><small>Downloads</small></span>
                                                                        <br/>
                                                                        <small style="margin-right:10px;"><strong>259</strong> Times</small>
                                                                        </span>
                                                                        <a href="#">
                                                                                                Adobe After Effects
                                                                                            </a>
                                                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                                                    </div>
                                                                </div>
                                                                <div class="social-body">
                                                                    <p>
                                                                            Adobe After Effects is a digital visual effects, motion graphics, and compositing application developed by Adobe Systems and used in the post-production process of film making and television production. Among other things, After Effects can be used for keying, tracking, compositing and animation.
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
                                                                                        <img alt="image" src="{{ asset('admin/img/library/bk_1.jpg') }}">
                                                                                    </a>
                                                                    <div class="media-body">
                                                                        <span class="pull-right text-right">
                                                                                    <span class="btn btn-outline btn-primary p-xxs" style="align-items: center;
                                                                                    padding: 0px 15px;
                                                                                    margin-bottom: 6px" href="https://www.free-ebooks.net/ebook/The-Facebook-Advertising-Five-Step-Formula-to-get-More-Traffic"><small>Downloads</small></span>
                                                                        <br/>
                                                                        <small style="margin-right:10px;"><strong>15</strong> Events</small>
                                                                        </span>
                                                                        <a href="#">
                                                                                The Facebook Advertising Five Step Formula to get More Traffic
                                                                                        </a>
                                                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                                                    </div>
                                                                </div>
                                                                <div class="social-body">
                                                                    <p>
                                                                            Do you want to be successful in advertising your online business and get more traffic? Do you want to know what the experts know about Facebook ads? Well, in this book, I want to teach you everything you need to know about advertising on Facebook.
                                                                    </p>
                                                                </div>
                                                                <hr>
                                                                <div class="social-avatar">
                                                                    <a href="" class="pull-left">
                                                                                            <img alt="image" src="{{ asset('admin/img/library/bk_2.jpg') }}">
                                                                                        </a>
                                                                    <div class="media-body">
                                                                        <span class="pull-right text-right">
                                                                                    <span class="btn btn-outline btn-primary p-xxs" style="align-items: center;
                                                                                    padding: 0px 15px;
                                                                                    margin-bottom: 6px" href="https://www.free-ebooks.net/ebook/10-Ways-to-Write-More-Effective-Ads"><small>Downloads</small></span>
                                                                        <br/>
                                                                        <small style="margin-right:10px;"><strong>15</strong> Events</small>
                                                                        </span>
                                                                        <a href="#">
                                                                                10 Ways to Write More Effective Ads
                                                                                            </a>
                                                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                                                    </div>
                                                                </div>
                                                                <div class="social-body">
                                                                    <p>
                                                                            If you've been struggling to make sales, more than likely your ad copy is to blame. But don't worry because it's not your fault. Big companies pay advertising agencies to handle the hard work for them; and the people at those companies have made it their business to know the art of writing to sell. They have spent years learning the psychology of selling, as well as how to find the right words that will push the hot buttons to make the buying public buy the products or services that they're being paid to sell with effective ad copy. Now you too can write more effective ads for your own products, just like those highly-paid copywriters do. This free eBook provides you with the information that you need to be able to write to sell!
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

    {{-- Calling modal --}}
    {{-- Rate Kelas --}}
    <div class="modal inmodal fade" id="ratekelas_1" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header" style="padding: 15px 15px; background:#1ab394; color:white;">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Rate This Class</h4>
                    </div>
                    <div class="modal-body" style="padding: 0px 0px 10px 0px;">
                        <div class="panel-body" style="padding:2px;">
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
                        </div>
                    </div>
                    <div class="modal-body" style="padding:10px 10px 10px 10px">
                            <h2 class="text-center" style="margin-top:0px;"><strong>Rate Point</strong></h2> 
                            <form role="form" action="" method="post">
                                    <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                    <input type="text" name="NAMA_DEPAN" placeholder="Enter your Rate" value=""
                                                    class="form-control"></div>
                                            </div>
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                    <input type="text" name="NAMA_DEPAN" placeholder="Out of 5" value=""
                                                    class="form-control"></div>
                                            </div>
                                        </div>    
                                    
                                        
                                  
                                        <button class="btn btn-sm btn-primary btn-block" type="submit "><strong>Send Rate</strong></button>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>

    {{-- End of Rate Kelas --}}
    {{-- Annonuncement modal --}}
    <div class="modal inmodal fade" id="annon1" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header" style="padding: 15px 15px; background:orange; color:white;">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Announcement</h4>
                    </div>
                    <div class="modal-body" style="padding: 0px 0px 10px 0px;">
                        <div class="panel-body" style="padding:2px;">
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
                                    <hr style="margin-top: -5px; margin-bottom: 0;">
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal" style="background:orange; color:white">Thank you! :D</button>
                    </div>
                </div>
            </div>
        </div>
{{-- end of modal --}}

{{-- detail course modal --}}
{{-- Modal Content --}}
{{-- 1 --}}
<div class="modal inmodal" id="detailcs1" tabindex="-1" role="dialog"  aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content animated fadeIn">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title">Monthly Meeting 1</h4>
    <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
</div>
<div class="modal-body" style="padding: 10px 30px 0px 30px;">
        <span class="pull-right text-right">
                <span class="" style="align-items: center;padding: 0px 15px;margin-bottom: 6px">
                    <small>10-November-2018</small>
                </span>
                <br/>
        </span>
        <div class="profile-image" style="width:60px">
        <img src="{{ asset('admin/img/a4.jpg') }}" class="img-circle circle-border" style="width:60px; height:60px;" alt="profile">
    </div>
    <div class="profile-info" style="margin-left:70px; margin-top:10px">
            <div class="no-margins no-ad">
                <h2 class="no-margins" style="font-size:16px">
                    Alex Smith
                </h2>
                <h4>Founder of Groupeq</h4>
            </div>
    </div>
</div>
<div class="modal-body">
    <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
        printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.</p>
</div>
<div class="modal-body" style="background:aliceblue" style="padding: 10px 30px 30px 30px;">
    <h5 style="margin-bottom:20px">Items Need to carry :</h5>
        <div class="row">
            <div class="col-lg-3 col-lg-offset-1"><i class="fa fa-microchip fa-2x"></i></div>
            <div class="col-lg-3"><i class="fa fa-bandcamp fa-2x"></i></div>
            <div class="col-lg-3"><i class="fa fa-podcast fa-2x"></i></div>
            <div class="col-lg-2"><i class="fa fa-shower fa-2x"></i></div>
        </div>
    </div>
    <div class="modal-body" style="padding: 10px 30px 10px 30px;">
            <div class="fileinput fileinput-new input-group has-success" data-provides="fileinput">
                    {{-- <label class="col-sm-2 control-label">Upload</label> --}}
                    <div class="form-control" data-trigger="fileinput"><label class="col-sm-2 control-label" style="margin-right:15px">Upload</label><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                    <a href="#" class="input-group-addon btn btn-defa ult fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
    </div>
<div class="modal-footer">
    <button type="button" class="btn btn-white" data-dismiss="modal">I'm Busy</button>
    <button type="button" class="btn btn-primary">Attend!</button>
</div>
</div>
</div>
</div>
{{-- 2 --}}
<div class="modal inmodal" id="detailcs2" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-clock-o modal-icon"></i>
                        <h4 class="modal-title">Modal title</h4>
                            <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
            </div>
        <div class="modal-body">
                
        </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>
</div>
{{-- end modal --}}
{{-- end course banner --}}

{{-- Master Modal --}}
{{-- 1 --}}
<div class="modal inmodal" id="master_1" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Master Profile</h4>
            <small>Sensei Sensei Sensei Sensei hoorayy <('')</small>
        </div>
        <div class="modal-body" style="padding: 10px 30px 0px 30px;">    
        <div class="row">
            <div class="col-sm-9">
                    <div class="form-group"><label>Nama Depan</label> <input type="text" name="NAMA_DEPAN" placeholder="Enter your first name" value="{{$data->NAMA_DEPAN}}"
                        class="form-control"></div>
                <div class="form-group"><label>Nama Belakang</label> <input type="text" name="NAMA_BELAKANG" placeholder="Enter your last name" value="{{$data->NAMA_BELAKANG}}"
                        class="form-control"></div>
            </div>
            <div class="col-sm-3 ">
                    <h4>Profile Picure</h4>
                    <div class="ibox-content no-padding border-left-right">
                        <img alt="image" class="img-responsive  b-r" src="{{$data->FOTO_PROFIL}}" onerror="this.src='admin/img/default.jpg'">
                    </div>
                </div>
            </div>
            <br/>
        <div class="form-group no-margins no-padding">
                <label>Jenis Kelamin</label>
                <select class="form-control m-b" name="gender">
                            <option value="L" @if ($data->GENDER=='L')
                              checked="checked"
                            @endif>Laki-Laki</option>
                            <option value="P" @if ($data->GENDER=='P')
                              checked="checked"
                            @endif>Perempuan</option>
                        </select>
            </div>
            <div class="form-group"><label>Domisili</label> <input type="text" name="DOMISILI" placeholder="Enter your address" value="{{$data->DOMISILI}}"
                    class="form-control"></div>
            <div class="form-group"><label>No. Telpon</label> <input type="tel" placeholder="Enter your phone number" name="NOMOR_TELP" value="{{$data->NOMOR_TELP}}"
                    class="form-control"></div>
            <div class="form-group"><label>Introduction</label> <textarea type="text" placeholder="Tell us about you" name="INTRODUCTION" value="{{$data->INTRODUCTION}}"
                    class="form-control"></textarea></div>
        </div>
        </div>
        </div>
        </div>

{{-- End of Master Modal --}}

@endsection
@section('scriptjs')
    <!-- Flot -->
    <script src="{{ asset( 'admin/js/plugins/flot/jquery.flot.js') }} "></script>
    <script src="{{ asset( 'admin/js/plugins/flot/jquery.flot.tooltip.min.js') }} "></script>
    <script src="{{ asset( 'admin/js/plugins/flot/jquery.flot.spline.js') }} "></script>
    <script src="{{ asset( 'admin/js/plugins/flot/jquery.flot.resize.js') }} "></script>
    <script src="{{ asset( 'admin/js/plugins/flot/jquery.flot.pie.js') }} "></script>

    <!-- Jasny -->
    <script src="{{ asset('admin/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
     
    {{-- <!-- Peity -->
    <script src="{{ asset( 'admin/js/plugins/peity/jquery.peity.min.js') }} "></script>
    <script src="{{ asset( 'admin/js/demo/peity-demo.js') }} "></script>

    <!-- GITTER -->
    <script src="{{ asset( 'admin/js/plugins/gritter/jquery.gritter.min.js') }} "></script>

    <!-- Sparkline -->
    <script src="{{ asset( 'admin/js/plugins/sparkline/jquery.sparkline.min.js') }} "></script>

    <!-- Sparkline demo data  -->
    <script src="{{ asset( 'admin/js/demo/sparkline-demo.js') }} "></script>

    <!-- ChartJS-->
    <script src="{{ asset( 'admin/js/plugins/chartJs/Chart.min.js') }} "></script> --}}
    
@endsection
