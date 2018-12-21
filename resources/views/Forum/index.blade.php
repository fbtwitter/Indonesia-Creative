@extends('ManagementFile/backend/layout')
@section('title-dashboard') ICS Forum
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
                            <a>Forum</a>
                        </li>
                    </ol>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                {{-- <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome Reza Fauzi Augusdi</span>
                </li>
                <li>
                    <a class="right-sidebar-toggle"><i class="fa fa-tasks"></i></a>
                </li> --}}
            </ul>
        </nav>
    </div>
    <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:10px;">
        <div class="col-lg-12">
            <h2 class="text-center" style="font-weight:700; font-size:26px">ICS FORUM</h2>
            <h2 class="text-center" style="font-weight:300; font-size:18px">Fresh air, good communication and we all together having relation</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                    <div class="ibox-content forum-container">

                            <div class="forum-title">
                                <div class="pull-right forum-desc">
                                        <span class="text-right">
                                                <span class="btn btn-outline btn-primary p-xxs" style="align-items: center;
                                                padding: 0px 15px;
                                                margin-bottom: 6px" data-toggle="modal" data-target="#newtopic"><small>Create New Topic</small></span>
                                </div>
                                <h3>General subjects</h3>
                            </div>
                            <div class="forum-item active">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="forum-icon">
                                                <i class="fa fa-wpexplorer"></i>
                                            </div>
                                            <a data-toggle="modal" data-target="#onpost1" class="forum-item-title">Hey Help me!</a>
                                            <div class="forum-sub-title">Asking help for my problem about having an error shutterspeed.</div>
                                        </div>
                                        <div class="col-md-1 col-md-offset-1 forum-info">
                                            <span class="views-number">
                                                1216
                                            </span>
                                            <div>
                                                <small>Views</small>
                                            </div>
                                        </div>
                                        <div class="col-md-1 forum-info">
                                            <span class="views-number">
                                                368
                                            </span>
                                            <div>
                                                <small>Answer</small>
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
    {{-- Creating topic modal --}}
    <div class="modal inmodal fade" id="newtopic" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header" style="padding: 15px 15px; background:#1ab394; color:white;">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">New Topic</h4>
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
                            <form role="form" action="" method="post">
                                    <div class="form-group"><label>Title</label> <input type="text" name="NAMA_DEPAN" placeholder="Enter your topic" value=""
                                            class="form-control"></div>
                                    <div class="form-group"><label>Description</label> <input type="text" name="NAMA_BELAKANG" placeholder="Enter your description" value=""
                                            class="form-control"></div>
                                    <div class="form-group"><label>Discussion</label><textarea type="text" placeholder="Write your discussion" name="INTRODUCTION" value="{{$data->INTRODUCTION}}"
                                            class="form-control"></textarea></div>
                                    <div>
                                                <div class="fileinput fileinput-new input-group has-success" data-provides="fileinput">
                                                        {{-- <label class="col-sm-2 control-label">Upload</label> --}}
                                                        <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                        <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                                        <a href="#" class="input-group-addon btn btn-defa ult fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                        
                                        <button class="btn btn-sm btn-primary btn-block" type="submit "><strong>Create Topic</strong></button>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
{{-- end of modal --}}

{{-- forum discussion modal --}}
{{-- Modal Content --}}
{{-- 1 --}}
<div class="modal inmodal" id="onpost1" tabindex="-1" role="dialog"  aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content animated fadeIn">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title">Hey Help me!</h4>
    <small>Asking help for my problem about having an error shutterspeed.</small>
</div>

{{-- si penulisnya --}}
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
{{-- end of penulis --}}

{{-- 1 komentar --}}
<div class="modal-view" style="padding: 10px 35px 0px 35px;">
        <span class="pull-right text-right">
                <span class="" style="align-items: center;padding: 0px 15px;margin-bottom: 6px">
                    <small>10-November-2018</small>
                </span>
                <br/>
        </span>
        <div class="profile-image" style="width:40px">
        <img src="{{ asset('admin/img/a4.jpg') }}" class="img-circle circle-border" style="width:40px; height:40px;" alt="profile">
    </div>
    <div class="profile-info" style="margin-left:50px; margin-top:5px">
            <div class="no-margins no-ad">
                <h2 class="no-margins" style="font-size:13px">
                    Alex Smith
                </h2>
                <h4 style="font-size:10px">Founder of Groupeq</h4>
            </div>
    </div>
</div>
<div class="modal-body" style="padding: 10px 35px 0px 35px;">
        <p style="font-size:13px"><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.</p>
    </div>
    {{-- end of 1 komentar --}}

    {{-- Berkomentar --}}
<div class="modal-body" style="padding: 0px 10px 10px 10px; background:aliceblue;">
                        <div class="panel-body" style="padding:2px;">
                                <div class="social-avatar">
                                        <a href="" class="pull-left">
                                                        <img alt="image" src="{{ asset('admin/img/a1.jpg') }}">
                                                    </a>
                                        <div class="media-body">
                                            <a href="#">
                                                            Reza Augusdi
                                                        </a>
                                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    <div class="modal-body" style="padding:10px 20px 50px 20px; background:honeydew;">
                            <form role="form" action="" method="post">
                                    <div class="form-group"><label>Your Opinion</label><textarea type="text" placeholder="Write your discussion" name="INTRODUCTION" value="{{$data->INTRODUCTION}}"
                                            class="form-control"></textarea></div>
                                        
                                        <div class="col-sm-8">
                                                <div class="fileinput fileinput-new input-group has-success" data-provides="fileinput">
                                                        {{-- <label class="col-sm-2 control-label">Upload</label> --}}
                                                        <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                        <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                                        <a href="#" class="input-group-addon btn btn-defa ult fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                        </div>
                                        <div class="col-sm-4"><button class="btn btn-sm btn-primary btn-block" type="submit "><strong>Create Topic</strong></button></div>          
                                </form>
                    </div>
                    {{-- End of berkomentar --}}

</div>
</div>
</div>
{{-- end modal --}}
{{-- end forum --}}
@endsection
@section('scriptjs')
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.spline.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.pie.js') }}"></script>

 <!-- Jasny -->
 <script src="{{ asset('admin/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>

@endsection
