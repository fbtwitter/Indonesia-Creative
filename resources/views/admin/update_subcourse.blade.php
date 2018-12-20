<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Indonesia Creative - Update SubCourse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                              <div class="float-left">
                                  <strong class="card-title">Update Sub Course</strong>
                              </div>
                            </div>
                            <div class="card-body">
                              <form action="{{ url('subcourse_update', $subs['ID_SUB_COURSE']) }}" class="form-horizontal" method="post">
                                  @csrf
                        				  <div class="form-group">
                            					<label class="col-md-2 control-label">ID Sub Course</label>
                            					<div class="col-md-10">
                            					  <input name="ID_SUB_COURSE" type="text" id="ID_SUB_COURSE" class="form-control" value="{{$subs->ID_SUB_COURSE}}" disabled>
                            					</div>
                        				  </div>
                        				  <div class="form-group">
                                    <label class="col-md-2 control-label">ID Course</label>
                                    <div class="col-md-10">
                                      <input name="ID_COURSE" type="text" id="ID_COURSE"  class="form-control" value="{{$subs->ID_COURSE}}" disabled>
                                    </div>
                        				  </div>
                        				  <div class="form-group">
                                    <label class="col-md-2 control-label">ID Master</label>
                                    <div class="col-md-10">
                                      <input name="ID_DAFTAR_MASTER" type="text" id="ID_DAFTAR_MASTER"  class="form-control" value="{{$subs->ID_DAFTAR_MASTER}}" disabled>
                                    </div>
                        				  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Name</label>
                                    <div class="col-md-10">
                                      <input name="SUB_COURSE" type="text" id="SUB_COURSE"  class="form-control" value="{{$subs->SUB_COURSE}}" >
                                    </div>
                        				  </div>
                        				  <div class="form-group">
                                    <label class="col-md-2 control-label">Definition</label>
                                    <div class="col-md-10">
                                      <input name="DEFINISI_SUB_COURSE" type="text" id="DEFINISI_SUB_COURSE"  class="form-control" value="{{$subs->DEFINISI_SUB_COURSE}}">
                                    </div>
                        				  </div>
                        				  <div class="form-group float-right">
                          					  <input type="submit" class="btn btn-outline-info" value="Save Change" name="btnUpdate" id="btnUpdate">
                          					  <span></span>
                          					  <a href="{{url('course')}}"><button type="button" class="btn btn-outline-danger">Cancel</button></a>
                        				  </div>
                        			</form>
                            </div>
                        </div>
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

</body>
</html>
