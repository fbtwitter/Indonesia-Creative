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

    <style>
    input[type=text], select {
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
                    <li class="active">
                        <a href="{{url('/DashMaster')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <!-- /.menu-title -->
                    <li>
                        <a href="{{ route('Sub_Course.index')}}"> <i class="menu-icon fa fa-tasks"></i>Sub Course List </a>
                    </li>
                    <li>
                        <a href="{{ route('member.index')}}"> <i class="menu-icon fa fa-users"></i>Member List </a>
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
            <div class="content">
            <div class="animated fadeIn">
                <div class="clearfix"></div>
                <div class="row">

                <div class="float">
                    <button class="button" onclick="document.getElementById('id03').style.display='block'">Add a New Sub-Course</button>
                </div>

          <div id="id03" class="modal">

            <form class="modal-content animate" action="{{ route('Sub_Course.store')}}" method="post">
              @csrf
              <div class="card-header">
                <div class="float-left">
                  <strong class="card-title">Add a New Sub-Course</strong>
                </div>
                <div class="float-right">
                  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
              </div>
              <div class="container">
                <label for="idsubcourse"><b>ID Sub-Course</b></label>
                <input type="text" placeholder="Enter ID Sub-Course" name="idsubcourse" required>

                <label for="idcourse"><b>ID Course</b></label>
                <input type="text" placeholder="Enter ID Course" name="idcourse" required>

                <label for="idmaster"><b>ID Master</b></label>
                <input type="text" placeholder="Enter ID Master" name="idmaster" required>

                <label for="scname"><b>Nama Sub-Course</b></label>
                <input type="text" placeholder="Enter Sub-Course Name" name="scname" required>

                <label for="definition"><b>Definition</b></label>
                <input type="text" placeholder="Enter the Definition" name="definition" required>
                <br></br>
                <div class="float-right">
                  <button type="button" onclick="document.getElementById('id03').style.display='none'" class="btn btn-outline-danger btn-sm">Cancel</button>
                  <button type="submit" class="btn btn-outline-primary btn-sm">Add a New Sub-Course</button>
                </div>
              </div>
            </form>
          </div>
          @foreach($DataCourse as $data)
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                        <strong class="card-title">{{ $data->NAMA_SUBCOURSE }}</strong>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="float-left">
                        <h6>{{ $data->DEFINISI_SUB_COURSE}}</h6>
                        </div>
                        <div class="float-right">
                        @csrf
                            <center>
                                <a href="{{route('Sub_Course.edit', $data->ID_SUB_COURSE)}}" class="btn btn-outline-primary btn-sm" role="button"><span class="ti-pencil-alt"></span></a>
                                <a href="{{url('DeleteSubCourse',  $data->ID_SUB_COURSE)}}" class="btn btn-outline-danger btn-sm" role="button" ><span class="ti-trash"></span>
                                {{ method_field('DELETE')}}
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <!--
                            <div id="id04" class="modal">
                            <form class="modal-content animate" action="{{ route('Sub_Course.update',$data->ID_SUB_COURSE)}}" method="post">
                            <div class="card-header">
                                <div class="float-left">
                                    <strong class="card-title">Update Sub-Course</strong>
                                </div>
                                <div class="float-right">
                                <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
                                </div>
                            </div>
                            <div class="container">
                                <label for="idsubcourse"><b>ID Sub-Course</b></label>
                                <input type="text" name="idcourse" id="idsubcourse" value="{{ $data->ID_SUB_COURSE}}" disabled>

                                <label for="idcourse"><b>ID Course</b></label>
                                <input type="text" name="idcourse" id="idcourse" value="{{ $data->ID_COURSE}}" disabled>

                                <label for="idmaster"><b>ID Master</b></label>
                                <input type="text" name="idmaster" id="idmaster" value="" required>

                                <label for="scname"><b>Sub-Course Name</b></label>
                                <input type="text" name="scname" id="scname" value="{{ $data->NAMA_SUBCOURSE }}" required>

                                <label for="definisi"><b>Definition</b></label>
                                <input type="text" name="definisi" id="definisi" value="{{ $data->DEFINISI_SUB_COURSE}}" required>

                                <br></br>
                                <div class="float-right">
                                <button type="button" onclick="document.getElementById('id04').style.display='none'" class="btn btn-outline-danger btn-sm">Cancel</button>
                                <button type="submit" class="btn btn-outline-primary btn-sm" name="btnUpdate" id="btnUpdate">Save Change</button>
                                </div>
                            </div>
                            </form>
                            -->
                            @endforeach

            </div>
                </div>
            </div>
            </div>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
      function openPage(pageName,elmnt,color) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].style.backgroundColor = "";
          }
          document.getElementById(pageName).style.display = "block";
          elmnt.style.backgroundColor = color;

      }
      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
    </script>

    <script>
    // Get the modal
    var modal = document.getElementById('id03');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

<script>
    // Get the modal
    var modal = document.getElementById('id04');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>


</body>
</html>
