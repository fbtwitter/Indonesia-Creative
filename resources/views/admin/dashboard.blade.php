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
                      <a href="{{url('Dashadmin')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                  </li>
                    <!-- /.menu-title -->
                    <li>
                        <a href="{{url('adminmember')}}"> <i class="menu-icon fa fa-users"></i>Member List </a>
                    </li>
                    <li>
                        <a href="{{url('adminmaster')}}"> <i class="menu-icon fa fa-user-secret"></i>Master List </a>
                    </li>
                    <li>
                        <a href="{{url('admincourse')}}"> <i class="menu-icon fa fa-tasks"></i>Courses </a>
                    </li>

                    <li>
                        <a href="{{url('adminannounce')}}"> <i class="menu-icon fa fa-bullhorn"></i>Announcements </a>
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
                    <a class="navbar-brand hidden" href="./"><img src="{{asset('front/assets/img/logo.png') }}" alt="Logo"></a>
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
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="clearfix"></div>
                <!-- Calender Chart Weather  -->
                <div class="row">
                  <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="typo-headers">
                        <div class="float-left">
                          <h1 class="pb-2 display-4">Welcome!</h1>
                          <h6 class="pb-2 display-5">Now you're logged in as Admin.</h6>
                        </div>
                        <!--<div class="float-right">
                          <img src="{{ asset('front/assets/img/male.png') }}" style="width: 100px; length: 100px;">
                          <img src="{{ asset('front/assets/img/female.png') }}" style="width: 100px; length: 100px;">
                        </div>-->
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                       <div class="card">
                           <div class="card-body">
                               <div class="stat-widget-five">
                                   <div class="stat-icon dib flat-color-1">
                                       <i class="pe-7s-add-user"></i>
                                   </div>
                                   <div class="stat-content">
                                       <div class="text-left dib">
                                           <div class="stat-text"><span class="count">{{$member}}</span></div>
                                           <div class="stat-heading">Members</div>
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
                                           <div class="stat-text"><span class="count">{{$master}}</span></div>
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
                                           <div class="stat-text"><span class="count">{{$kategori}}</span></div>
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
                                           <div class="stat-text"><span class="count">{{$software}}</span></div>
                                           <div class="stat-heading">Softwares</div>
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
                                       <i class="pe-7s-film"></i>
                                   </div>
                                   <div class="stat-content">
                                       <div class="text-left dib">
                                           <div class="stat-text"><span class="count">{{$sumkategori1}}</span></div>
                                           <div class="stat-heading">Category 1</div>
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
                                       <i class="pe-7s-help2"></i>
                                   </div>
                                   <div class="stat-content">
                                       <div class="text-left dib">
                                           <div class="stat-text"><span class="count">{{$sumkategori2}}</span></div>
                                           <div class="stat-heading">Category 2</div>
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
                                   <div class="stat-icon dib flat-color-1">
                                       <i class="pe-7s-monitor"></i>
                                   </div>
                                   <div class="stat-content">
                                       <div class="text-left dib">
                                           <div class="stat-text"><span class="count">{{$sumkategori3}}</span></div>
                                           <div class="stat-heading">Category 3</div>
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
                                       <i class="pe-7s-leaf"></i>
                                   </div>
                                   <div class="stat-content">
                                       <div class="text-left dib">
                                           <div class="stat-text"><span class="count">{{$sumkategori4}}</span></div>
                                           <div class="stat-heading">Category 4</div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-8">
                 <div class="card">
                   <div class="card-body">
                     <h5 class="box-title">Lastest Added Members </h5>
                   </div>
                   <div class="card-body--">
                     <div class="table-stats order-table ov-h">
                       <table class="table ">
                         <thead>

                           <tr>
                             <th class="serial">No.</th>
                             <th>ID</th>
                             <th>First Name</th>
                             <th>Last Name</th>
                             <th>Gender</th>
                             <th>Domicile</th>
                           </tr>

                         </thead>
                         <tbody>
                           @php
                             $i=1;
                           @endphp
                           @foreach($latest as $new)
                           <tr>
                             <td class="serial">{{$i}}</td>
                             <td><span class="idmember">{{$new->id_info_user}}</span> </td>
                             <td><span class="fname"></span>{{$new->nama_depan}} </td>
                             <td><span class="lname"></span>{{$new->nama_belakang}}</td>
                             <td><span class="gender"></span>{{$new->gender}}</td>
                             <td><span class="domisili">{{$new->domisili}}</span></td>
                             <!-- nampilin 5 user terbaru-->
                           </tr>
                           @php
                             $i++;
                           @endphp
                             @endforeach
                         </tbody>
                       </table>
                     </div> <!-- /.table-stats -->
                   </div>
                 </div> <!-- /.card -->
               </div>

               <div class="col-md-12 col-lg-4">
                 <div class="card">
                   <div class="card-body">
                     <div class="calender-cont widget-calender">
                       <div id="calendar"></div>
                     </div>
                   </div>
                 </div>
               </div>
                </div>
                <div class="col-xl-6">
                 <div class="card">
                   <div class="card-body">
                     <h5 class="box-title">Announcements </h5>
                   </div>
                   <div class="card-body--">
                     <div class="table-stats order-table ov-h">
                       <table class="table ">
                         <thead>
                           <tr>
                             <th class="serial">Date</th>
                             <th>Description</th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach($announce as $p)
                           <tr>
                             <td><span class="idmember">{{$p->tanggal}}</span> </td>
                             <td><span class="fname"></span>{{$p->deskripsi}} </td>
                             <!-- nampilin 5 Announcement terbaru-->
                           </tr>
                           @endforeach
                         </tbody>
                       </table>
                     </div> <!-- /.table-stats -->
                   </div>
                 </div> <!-- /.card -->
               </div>
               
                 <div class="col-xl-6">
                 <div class="card">
                   <div class="card-body">
                     <h5 class="box-title">Forum </h5>
                   </div>
                   <div class="card-body--">
                     @foreach($forum as $f)
                     <div class="container">
                       <strong><p class="box-title">{{$f->nama_belakang}}</p></strong>
                       <h6>{{$f->isi_forum}}</h6>
                       <span class="time-right box-title">{{$f->date_time}}</span>
                     </div>
                     @endforeach
                   </div>
                 </div> <!-- /.card -->
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

</body>
</html>
