<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Indonesia Creative - Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
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
                        <a href="{{url('dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <!-- /.menu-title -->
                    <li>
                        <a href="{{url('member')}}"> <i class="menu-icon fa fa-users"></i>Member List </a>
                    </li>
                    <li>
                        <a href="{{url('master')}}"> <i class="menu-icon fa fa-user"></i>Master List </a>
                    </li>
                    <li>
                        <a href="{{url('course')}}"> <i class="menu-icon fa fa-tasks"></i>Courses </a>
                    </li>
                    <li>
                        <a href="event.php"> <i class="menu-icon fa fa-calendar-o"></i>Events </a>
                    </li>
                    <li>
                        <a href="{{url('announce')}}"> <i class="menu-icon fa fa-bullhorn"></i>Announcements </a>
                    </li>
                    <li>
                        <a href="{{url('library')}}"> <i class="menu-icon fa fa-book"></i>Library </a>
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
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                      <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/lucas.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="index.php">Dashboard</a></li>
                                    <li class="active">Library</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                        <div class="card-header">
                          <div class="float-left">
                              <strong class="card-title">Library</strong>
                          </div>
                          
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">ID Sub Course</th>
                                        <th scope="col">Software</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($librarys as $perpus)
                                    <!-- TABEL LIBRARY DATABASE -->
                                    <tr>
                                      <th>{{$perpus['ID_LIBRARY']}}</th>
                                      <th>{{$perpus['ID_SUB_COURSE']}}</th>
                                      <th>{{$perpus['SOFTWARE']}}</th>
                                      <th></th>
                                      <th>
                                          <center>
                                            <a href="{{url('deletelib', $perpus['ID_LIBRARY'])}}" class="btn btn-outline-danger btn-sm" role="button"><span class="ti-trash"></span></a>
                                            
                                          
                                          </center>
                                      </th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                         <!--@if(count($errors) > 0)
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
                    <form class="modal-content animate" method="post" action="{{url('library')}}">
                        {{csrf_field()}}
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                      </div>

                      <div class="container">
                        <label for="idlib"><b>ID Library</b></label>
                        <input type="text" placeholder="Enter ID Library" name="ID_LIBRARY" required>

                        <label for="idcourse"><b>ID Course</b></label>
                        <input type="text" placeholder="Enter ID Course" name="ID_COURSE" required>

                        <label for="software"><b>Software</b></label>
                        <input type="text" placeholder="Enter the Software" name="SOFTWARE" required>
                        <br>
                        <div class="float-right">
                          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-outline-danger btn-sm">Cancel</button>
                          <button type="submit" class="btn btn-outline-primary btn-sm">Add a New Software</button>
                        </div>
                      </div>
                    </form>
                  </div>-->
                    
                <div id="id02" class="modal">
                  <form class="modal-content animate" method="post" action="library.php">
                    <div class="card-header">
                      <div class="float-left">
                          <strong class="card-title">Update Library</strong>
                      </div>
                      <div class="float-right">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                      </div>
                    </div>

                    <div class="container">
                      <label for="idlib"><b>ID Library</b></label>
                      <input type="text" name="idlib" id="idlib" value="" disabled>

                      <label for="idcourse"><b>ID Course</b></label>
                      <input type="text" name="email" id="email" value="" required>

                      <label for="software"><b>Software</b></label>
                      <input type="text" name="software" id="software" value="" required>

                      <br>
                      <div class="float-right">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="btn btn-outline-danger btn-sm">Cancel</button>
                        <button type="submit" class="btn btn-outline-primary btn-sm" name="btnUpdate" id="btnUpdate">Save Change</button>
                      </div>
                    </div>
                  </form>
                </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">

                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>
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
