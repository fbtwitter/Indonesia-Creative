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
                {{-- <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome {{$data->NAMA_DEPAN}}</li>
                <li>
                    <a class="right-sidebar-toggle"><i class="fa fa-tasks"></i></a>
                </li> --}}
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
                                                            <strong>Profile</strong>
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
                                                                <strong>Password</strong>
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
                                                                   <strong>Course</strong>
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
                                                    <div class="form-group"><label>Domisili</label> <input type="text" name="DOMISILI" placeholder="Enter your address" value="{{$data->DOMISILI}}"
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
                                                    <img alt="image" class="img-responsive  b-r" src="data:image/jpeg;base64,'.base64_encode( {{$data->FOTO_PROFIL}} ).'" onerror="this.src='admin/img/default.jpg'">
                                                </div>
                                                <div class="ibox-content no-padding border-left-right">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput" style="margin-top:10px;">
<<<<<<< HEAD
                                                        <span class="fileinput-exists"></span>
                                                        {!! Form::open(['url' => route('Setting.update', 3), 'method' => 'post', 'files' => true] ) !!}
                                                        {{-- <form class="photo_profil" action="{{route('Setting.update', 3)}}" method="post"> --}}
                                                          {{csrf_field()}} {{ method_field('PUT') }}
                                                          <input  type="file" onchange="this.form.submit()" name="photo" /></span>
                                                        {!! Form::close()!!}
                                                        <span class="fileinput-filename"></span>
    </div>
</div>
</div>
=======
                                                        <span class="fileinput-exists"></span><input type="file" name="..." /></span><span class="fileinput-filename"></span>
                                                    </div>
                                                </div>
                                            </div>
>>>>>>> d33af96ae7c9741a2779025e9aac73e361e81282
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
                                {{csrf_field()}} {{ method_field('PUT') }}
                                <div class="form-group"><label>Current password</label> <input name="old" type="password" class="form-control"></div>
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
