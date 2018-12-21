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
    .container {
      background-color: #b3b3b3;
      border-radius: 5px;
      padding: 10px;
      margin: 10px 0;
    }

    .container::after {
      content: "";
      clear: both;
      display: table;
    }

    .time-right {
      float: right;
      color: #fff;
    }

    .time-left {
      float: left;
      color: #fff;
    }
    .scroll-box{
      height: 500px;
      overflow:auto;
      background-color: #fff;
      scrollbar-base-color:gold;
      padding:10px;
    }
    input[type=textarea], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
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
                      <a href="{{url('forumchatadmin')}}"> <i class="menu-icon fa fa-commenting"></i>Chat </a>
                  </li>
                  <li>
                      <a href="{{url('adminmonthlymeet')}}"> <i class="menu-icon fa fa-user"></i>Monthly Meeting </a>


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
                  <a class="navbar-brand" href="./"><img src="{{ asset('front/assets/img/logo.png') }}" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="./"><img src="{{ asset('front/assets/img/logo.png') }}" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
              </div>
          </div>
          <div class="top-right">
              <div class="header-menu">
                  <div class="header-left">
                    <div class="user-area dropdown float-right">
                      <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img class="user-avatar rounded-circle" src="{{asset('front/assets/img/Park_Chan-yeol.jpg') }}" alt="">
                      </a>

                      <div class="user-menu dropdown-menu">

                          <a class="nav-link" href="{{url('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
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
                                  <li class="active">Chat</li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

        <!-- Content -->
        <div class="content">
          <div class="animated fadeIn">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <div class="float-left">
                          <strong class="card-title">Chat</strong>
                      </div>
                    </div>
                    <div class="card-body">
                      <form class="modal-content animate" method="post" action="admintambahforum">
                         {{csrf_field()}}
                      <div class="col-md-12">
                        <input type="textarea" placeholder="Comment here...." name="ISI_FORUM" required></input>
                        <div class="float-right">
                          <button  type="submit" class="btn btn-outline-primary btn-sm">Comment</button>
                        </div>
                      </div>
                    </form>
                      <br></br>
                      <div class="scroll-box">
                        <!--looping-->
                      @foreach ($forumchat as $chat)
                        <div class="container">
                          <div style="text-align: Left;">
                            <strong><h5 class="box-title">{{$chat->nama_belakang}}</h5></strong>
                            <h6>{{$chat->isi_forum}}</h6>
                          </div>
                          <span class="time-right">{{$chat->date_time}}</span>
                        </div>
                      @endforeach
                      </div>
                    </div>
                  </div>

                </div>
            </div>
          </div>
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

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>


</body>
</html>
