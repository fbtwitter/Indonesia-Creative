
@extends('ManagementFile/backend/layout')
@section('title-dashboard') Setting
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
                    <li class="active">
                        <strong>Setting</strong>
                    </li>
                </ol>
            </div>
            <ul class="nav navbar-top-links navbar-right">

                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome {{$data->NAMA_DEPAN}}</li>
                <li>
                    <a class="right-sidebar-toggle"><i class="fa fa-tasks"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="wrapper wrapper-content animated fadeIn">
        <div class="row">
            {{-- beda --}}
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title" style="padding-bottom: 0px; background-color:transparent;">
                        <h5 style="font-size: 20px;"><strong>Setting Akun</strong></h5>
                    </div>
                    <div class="ibox-content" style="padding-top:0px; background-color:transparent;">
                        <div>
                            <ul class="feed-activity-list" style="margin-left: -50px;">
                                <li class=" feed-element no-margins no-padding">
                                    <a data-toggle="tab" href="#informasi">
                                            <button class="btn btn-primary btn-outline btn-block">
                                                    <div class="text-left">
                                                        <h4 class="no-margins" style=" font-weight:200">
                                                            <strong>Informasi Pribadi</strong>
                                                        </h4>
                                                    </div>
                                                    </button>
                                            </a>

                                </li>
                                <li class=" feed-element no-margins no-padding">
                                    <a data-toggle="tab" href="#gantipass">
                                                <button class="btn btn-primary btn-outline btn-block">
                                                        <div class="text-left">
                                                            <h4 class="no-margins" style=" font-weight:200">
                                                                <strong>Kata Sandi</strong>
                                                            </h4>
                                                        </div>
                                                        </button>
                                                </a>
                                </li>
                                <li class=" feed-element no-margins no-padding">
                                    <a data-toggle="tab" href="#kursus">
                                                    <button class="btn btn-primary btn-outline btn-block">
                                                            <div class="text-left">
                                                                <h4 class="no-margins" style=" font-weight:200">
                                                                   <strong>Kursus</strong>
                                                                </h4>
                                                            </div>
                                                            </button>
                                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content">
                    <div id="informasi" class="tab-pane active">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content animated fadeIn ">

                                <div class="list-group active">
                                    <div class="panel-body">
                                        <h3>Informasi Pribadi</h3>
                                        </p>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <form role="form" action="{{route('Setting.update', 1)}}" method="post">
                                                  {{csrf_field()}}
                                                  {{ method_field('PUT') }}
                                                    <div class="form-group"><label>Nama Depan</label> <input type="text" name="NAMA_DEPAN" placeholder="Enter your first name" value="{{$data->NAMA_DEPAN}}"
                                                            class="form-control"></div>
                                                    <div class="form-group"><label>Nama Belakang</label> <input type="text" name="NAMA_BELAKANG" placeholder="Enter your last name" value="{{$data->NAMA_BELAKANG}}"
                                                            class="form-control"></div>
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
                                                    <div class="form-group"><label>Domisili</label> <input type="text" name="DOMISILI" placeholder="Enter your address" value={{$data->DOMISILI}}
                                                            class="form-control"></div>
                                                    <div class="form-group"><label>No. Telpon</label> <input type="tel" placeholder="Enter your phone number" name="NOMOR_TELP" value="{{$data->NOMOR_TELP}}"
                                                            class="form-control"></div>
                                                    <div class="form-group"><label>Introduction</label> <textarea type="text" placeholder="Tell us about you" name="INTRODUCTION" value="{{$data->INTRODUCTION}}"
                                                            class="form-control"></textarea></div>

                                                    <div>
                                                        <button class="btn btn-sm btn-primary pull-left m-t-n-xs
                                                            " type="submit "><strong>UPDATE PROFILE</strong></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-4 ">
                                                <h4>Profile Picure</h4>
                                                <div class="ibox-content no-padding border-left-right">
                                                    <img alt="image" class="img-responsive  b-r" src="{{$data->FOTO_PROFIL}}" onerror="this.src='admin/img/default.jpg'">
                                                </div>
                                                <div class="ibox-content no-padding border-left-right">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput" style="margin-top:10px;">
                                                        <span class="fileinput-exists"></span><input type="file" name="..."
                                                        /></span>
                                                        <span class="fileinput-filename"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="gantipass" class="tab-pane ">
                        <div class="ibox float-e-margins ">
                            <div class="ibox-content animated fadeIn ">
                                <div class="list-group active ">
                                    <div class="panel-body">
                                        <h3>Ubah Kata Sandi</h3>
                                        </p>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <form role="form" action="{{route('Setting.update', 2)}}" method="post">
                                                  {{csrf_field()}}
                                                  {{ method_field('PUT') }}
                                                    <div class="form-group"><label>Old password</label> <input name="old" type="password" class="form-control"></div>
                                                    <div class="form-group"><label>New password</label> <input name="new1" type="password" class="form-control"></div>
                                                    <div class="form-group"><label>Confirm new password</label> <input name="new2" type="password" class="form-control"></div>
                                                    <button class="btn btn-sm btn-primary pull-left m-t-n-xs
                                                            " type="submit "><strong>UPDATE PASSWORD</strong></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="kursus" class="tab-pane ">
                        <div class="ibox float-e-margins ">
                            <div class="ibox-content no-padding animated fadeIn ">
                                <div class="list-group active ">
                                    <div class="panel-body ">
                                        <h3>Kursus</h3>

                                        <p>New to programming? Want to create awesome apps? This is the perfect course for you.
                                        </p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="list-group ">
                                    <div class="panel-body ">
                                        <div class="col-md-3 ">
                                            <h4>Nama Course</h4>
                                        </div>
                                        <div class="col-md-9 border-left ">
                                            <div class="ibox-content no-padding gray-bg">
                                                <div class="list-group">
                                                    <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                        <span class="pull-right text-right" style="margin-top: 5px;">
                                                                    <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                        margin-right: 15px;
                                                                        padding: 3px 10px 3px 10px;
                                                                        font-size: unset;">Detail</h3><strong><button class="fa fa-trash fa-2x" style="color:red;"></button></strong></span>
                                                        </span>
                                                        <div class="text-left">
                                                            <h6 class="no-margins" style=" font-weight:200">
                                                                Saturday, 20/1/2019
                                                            </h6>
                                                            <h4 style="font-weight:600">Nama Sub Course</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group">
                                                    <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                        <span class="pull-right text-right" style="margin-top: 5px;">
                                                                    <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                        margin-right: 15px;
                                                                        padding: 3px 10px 3px 10px;
                                                                        font-size: unset;">Detail</h3><strong><button class="fa fa-trash fa-2x" style="color:red;"></button></strong></span>
                                                        </span>
                                                        <div class="text-left">
                                                            <h6 class="no-margins" style=" font-weight:200">
                                                                Saturday, 20/1/2019
                                                            </h6>
                                                            <h4 style="font-weight:600">Nama Sub Course 2</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group ">
                                    <div class="panel-body ">
                                        <div class="col-md-3 ">
                                            <h4>Nama Course 2</h4>
                                        </div>
                                        <div class="col-md-9 border-left ">
                                            <div class="ibox-content no-padding gray-bg">
                                                <div class="list-group">
                                                    <div class="panel-body" style="padding: 10px 15px 0px 15px;">
                                                        <span class="pull-right text-right" style="margin-top: 5px;">
                                                                    <span style="margin-top:0px; margin-bottom: 1px;"><h3 class="btn btn-primary btn-outline b-r-xl" style="    margin-top: -5px;
                                                                        margin-right: 15px;
                                                                        padding: 3px 10px 3px 10px;
                                                                        font-size: unset;">Detail</h3><strong><button class="fa fa-trash fa-2x" style="color:red;"></button></strong></span>
                                                        </span>
                                                        <div class="text-left">
                                                            <h6 class="no-margins" style=" font-weight:200">
                                                                Saturday, 20/1/2019
                                                            </h6>
                                                            <h4 style="font-weight:600">Nama Sub Course</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<script src="{{ asset( 'admin/js/plugins/pace/pace.min.js') }} "></script>
<script src="{{ asset( 'admin/js/plugins/video/responsible-video.js') }} "></script>

<script>
    $(document).on('webkitfullscreenchange mozfullscreenchange fullscreenchange', function (e){
        $('body').hasClass('fullscreen-video') ? $('body').removeClass('fullscreen-video') : $('body').addClass('fullscreen-video')
    });

</script>
@endsection
