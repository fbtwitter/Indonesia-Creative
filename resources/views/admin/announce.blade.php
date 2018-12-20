<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Indonesia Creative - Announcements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <style>
    input[type=text], input[type=date], input[type=textarea], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }
    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }
    .modal {
        display: none; /* Hidden by default */
        position: fixed;
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 20% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 50%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)}
        to {-webkit-transform: scale(1)}
    }

    @keyframes animatezoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
        .cancelbtn {
           width: 100%;
        }
    }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
<<<<<<< HEAD
                  <li class="active">
                      <a href="{{url('Dashadmin')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
=======
                  <li>
                      <a href="{{url('dashadmin')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
>>>>>>> ef15d444aa46ecece4bd09eda56aa7545d208ba2
                  </li>
                    <li>
                        <a href="{{url('adminmember')}}"> <i class="menu-icon fa fa-users"></i>Member List </a>
                    </li>
                    <li>
                        <a href="{{url('adminmaster')}}"> <i class="menu-icon fa fa-user-secret"></i>Master List </a>
                    </li>
                    <li>
<<<<<<< HEAD
                        <a href="{{url('admincourse')}}"> <i class="menu-icon fa fa-tasks"></i>Courses </a>
                    </li>

                    <li>
                        <a href="{{url('adminannounce')}}"> <i class="menu-icon fa fa-bullhorn"></i>Announcements </a>
=======
                        <a href="{{url('course')}}"> <i class="menu-icon fa fa-tasks"></i>Courses </a>
                    </li>
                    <li class="active">
                        <a href="{{url('announce')}}"> <i class="menu-icon fa fa-bullhorn"></i>Announcements </a>
>>>>>>> ef15d444aa46ecece4bd09eda56aa7545d208ba2
                    </li>
                    <li>
                        <a href="{{url('adminlibrary')}}"> <i class="menu-icon fa fa-book"></i>Library </a>
                    </li>
                    <li>
                        <a href="{{url('adminreward')}}"> <i class="menu-icon fa fa-star"></i>Reward</a>
                    </li>
                    <li>
                        <a href="{{url('adminforum')}}"> <i class="menu-icon fa fa-comments"></i>Forum </a>
                    </li>
                    <li>
                        <a href="{{url('adminmonthlymeet')}}"> <i class="menu-icon fa fa-user"></i>Monthly Meeting </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="{{ asset('front/assets/img/logo.png') }}" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="{{ asset('front/assets/img/logo.png') }}" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('front/assets/img/Park_Chan-yeol.jpg') }}" alt="">
                        </a>

                        <div class="user-menu dropdown-menu">


                            <a class="nav-link" href="{{url('logout')}}"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="index.php">Dashboard</a></li>
                                    <li class="active">Announcements</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="clearfix"></div>
                <!-- Calender Chart Weather  -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                        <div class="card-header">
                          <div class="float-left">
                              <strong class="card-title">Announcements</strong>
                          </div>
                          <div class="float-right">
                            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-outline-dark btn-sm"><i class="menu-icon fa fa-plus"></i>
                          </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">ID Course</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @php
                                    $i=1;
                                  @endphp
                                     @foreach ($announces as $row)
                                    <!-- TABEL ANNOUNCE -->
                                    <tr>
                                      <th>{{$i}}</th>
                                      <th>{{$row['ID_COURSE']}}</th>
                                      <th>{{$row['TANGGAL']}}</th>
                                      <th>{{$row['DESKRIPSI']}}</th>
                                      <th>
                                          <center>
                                            <a href="{{url('update_announceview', $row['ID_ANNOUNCEMENT'])}}" class="btn btn-outline-primary btn-sm" role="button"><span class="ti-pencil-alt"></span></a>
                                            <a href="{{url('deleteannounceadmin', $row['ID_ANNOUNCEMENT'])}}" class="btn btn-outline-danger btn-sm" role="button"><span class="ti-trash"></span></a>
                                          </center>
                                      </th>
                                    </tr>
                                    @php
                                      $i++;
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                     @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all as $error)
                            <li>{{$error}}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(\Session::has('succes'))
                    <div class="alert alert-danger">
                        <p>{{\Session::get('success')}}</p>
                    </div>
                    @endif
                    <div id="id01" class="modal">
                    <form class="modal-content animate" method="post" action="{{url('adminannounce')}}">
                        {{csrf_field()}}
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                      </div>

                      <div class="container">
                        <input type="hidden" name="ID_ANNUNCEMENT">

                        <label for="idcourse"><b>ID Course</b></label>
                        {{-- <input type="text" placeholder="Enter ID Course" name="ID_COURSE" required> --}}
                        <div class="col-md-12">
                          <select class="form-control" name="ID_COURSE">
                            @foreach($course as $item)
                            <option value="{{ $item->ID_COURSE }}">{{ $item->NAMA_COURSE }}</option>
                            @endforeach
                          </select>
                      </div>

                        <label for="tanggal"><b>Date</b></label>
                        <input type="date" placeholder="Enter Date" name="TANGGAL" required>
                        <br>
                        <br>
                        <label for="deskripsi"><b>Description</b></label>
                        <input type="textarea" placeholder="Enter Description" name="DESKRIPSI" required>

                        <br>
                        <div class="float-right">
                          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-outline-danger btn-sm">Cancel</button>
                          <button type="submit" class="btn btn-outline-primary btn-sm">Add a New Announcement</button>
                        </div>
                      </div>
                    </form>
                  </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="box-title">Chandler</h4> -->
                                <div class="calender-cont widget-calender">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>
                </div>
                <!-- /Calender Chart Weather -->
                <!-- Modal - Calendar - Add New Event -->
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#event-modal -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>
    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

</body>
</html>
