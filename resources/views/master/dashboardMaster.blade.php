<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Indonesia Creative - Dashboard</title>
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
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ url('DashMaster') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <!-- /.menu-title -->
                    <li>
                        <a href="{{ route('Sub_Course.index')}}"> <i class="menu-icon fa fa-tasks"></i>Sub Course List </a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-users"></i>Member List </a>
                    </li>

                    <li>
                        <a href="{{route('course-list.index')}}"> <i class="menu-icon fa fa-tasks"></i>Courses </a>
                    </li>
                    <li>
                        <a href="{{ route('Monthly.index')}}"> <i class="menu-icon fa fa-calendar-o"></i>Events </a>
                    </li>
                    <li>
                        <a href="{{url('announce')}}"> <i class="menu-icon fa fa-bullhorn"></i>Announcements </a>
                    </li>
                    <li>
                        <a href="{{route('LibraryMaster.index')}}"> <i class="menu-icon fa fa-book"></i>Library </a>
                    </li>
                    <li>
                        <a href="{{url('reward')}}"> <i class="menu-icon fa fa-book"></i>Reward</a>
                    </li>
                    <li>
                        <a href="{{url('forum')}}"> <i class="menu-icon fa fa-book"></i>Forum </a>
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
                    <a class="navbar-brand" href="{{ route('Dashboard.index')}}"><img src="{{  asset('front/assets/img/logo.png')  }}" alt="Logo" width="auto"></a>
                    <a class="navbar-brand hidden" href="./"><img src="" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/ava.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{ URL('profile')}}"><i class="fa fa- user"></i>My Profile</a>
                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->

        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div id="Home" class="tabcontent">
    <!-- Content -->
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7s-add-user"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count"><!-- Tampilno jumlah member teko database mu --></span></div>
                                        <div class="stat-heading">Student</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7s-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count"><!-- Tampilno jumlah master teko database mu --></span></div>
                                        <div class="stat-heading">Masters</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7s-menu"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count"><!-- Tampilno jumlah course teko database mu --></span></div>
                                        <div class="stat-heading">Courses</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7s-notebook"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count"><!-- Tampilno jumlah Library teko database mu --></span></div>
                                        <div class="stat-heading">Softwares</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="box-title">Lastest Added Courses </h5>
                      </div>
                      <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                          <table class="table ">
                            <thead>
                              <tr>
                                <th class="serial">No.</th>
                                <th>ID</th>
                                <th>Course Tittle</th>
                                <th>Overview</th>
                                <th>Read More</th>
                                <th>Add Sub Course</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="serial"></td>
                                <td><span class="idmember"></span> </td>
                                <td><span class="fname"></span> </td>
                                <td><span class="lname"></span></td>
                                <td><span class="gender"></span></td>
                                <td>
                                  <center>
                                    <!--<a href="#" class="btn btn-outline-primary btn-sm" role="button"><span class="ti-pencil-alt"></span></a>-->
                                    <a href="#" class="btn btn-outline-primary  btn-sm" role="button"><i class="menu-icon fa fa-plus"></i></a>
                                  </center>
                                </td>
                                <!-- nampilin 5 user terbaru-->
                              </tr>
                            </tbody>
                          </table>
                        </div> <!-- /.table-stats -->
                      </div>
                    </div> <!-- /.card -->
                  </div>  <!-- /.col-lg-8 -->
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

</body>
</html>
