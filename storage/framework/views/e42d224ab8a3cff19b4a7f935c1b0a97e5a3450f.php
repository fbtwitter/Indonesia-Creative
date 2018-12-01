<?php $__env->startSection('title-dashboard'); ?> IC Surabaya
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptcss'); ?>
<!-- Gritter -->
<link href="<?php echo e(asset('admin/js/plugins/gritter/jquery.gritter.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('admin/css/plugins/iCheck/custom.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('admin/css/plugins/slick/slick.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('admin/css/plugins/slick/slick-theme.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body-content'); ?>



<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
        
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
                <div class="form-group">
                    <ol class="breadcrumb" style="margin: 20px 0px 0px 70px;">
                        <li>
                            <a href="<?php echo e(url('Dashboard')); ?>">Home</a>
                        </li>
                    </ol>
                </div>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome Reza Fauzi Augusdi</span>
                </li>
                <li>
                    <a class="right-sidebar-toggle"><i class="fa fa-tasks"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    
    <div class="row  border-bottom white-bg dashboard-header">

        <div class="col-md-3">
            <h2>Welcome Reza!</h2>
            <small>Student Ranking Based On Point of Monthly Meeting.</small>
            <ul class="list-group clear-list m-t">
                <li class="list-group-item fist-item">
                    <span class="pull-right">
                            420
                        </span>
                    <span class="label label-success">1</span> Albert Einstein
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                            370
                        </span>
                    <span class="label label-info">2</span> Nelson Mandela
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                            330
                        </span>
                    <span class="label label-primary">3</span> Christoper Colombus
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                            250
                        </span>
                    <span class="label label-default">4</span> Steve Jog
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                            200
                        </span>
                    <span class="label label-primary">5</span> Bill Gets
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="slick_demo_1">
                    <div>
                        <div class="container ibox-content" style="width:100%;height:auto;padding:0px;margin:0px;">
                            <img alt="image" class="banner text-center" src="<?php echo e(asset('admin/img/banner/bg-4.jpg')); ?>">
                            <div class="carousel-caption">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="container ibox-content" style="width:100%;height:auto;padding:0px;margin:0px;">
                            <img alt="image" class="banner text-center" src="<?php echo e(asset('admin/img/banner/bg-5.jpg')); ?>">
                            <div class="carousel-caption">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="container ibox-content" style="width:100%;height:auto;padding:0px;margin:0px;">
                            <img alt="image" class="banner text-center" src="<?php echo e(asset('admin/img/banner/bg-6.jpg')); ?>">
                            <div class="carousel-caption">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-left ">
                <div class="col-xs-4 ">
                    <div class=" m-l-md ">
                        <span class="h4 font-bold m-t block ">14</span>
                        <small class="text-muted m-b block ">Total Class</small>
                    </div>
                </div>
                <div class="col-xs-4 ">
                    <span class="h4 font-bold m-t block "> 15,234</span>
                    <small class="text-muted m-b block ">Student Here</small>
                </div>
                <div class="col-xs-4 ">
                    <span class="h4 font-bold m-t block ">1,653</span>
                    <small class="text-muted m-b block ">Master Here</small>
                </div>

            </div>
        </div>
        <div class="col-md-3 ">
            <div class="statistic-box ">
                <h4>
                    Project Beta progress
                </h4>
                <p>
                    You have two project with not compleated task.
                </p>
                <div class="row text-center ">
                    <div class="col-lg-6 ">
                        <canvas id="doughnutChart2 " width="80 " height="80 " style="margin: 18px auto 0 "></canvas>
                        <h5>Kolter</h5>
                    </div>
                    <div class="col-lg-6 ">
                        <canvas id="doughnutChart " width="80 " height="80 " style="margin: 18px auto 0 "></canvas>
                        <h5>Maxtor</h5>
                    </div>
                </div>
                <div class="m-t ">
                    <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-12 ">
            
            <div class="wrapper wrapper-content ">
                
                <div class="row ">
                    <div class="col-lg-4 ">
                        <div class="ibox float-e-margins ">
                            <div class="ibox-title ">
                                <h5>Review from master</h5>
                                <div class="ibox-tools ">
                                    <span class="label label-warning-light pull-right ">10 Messages</span>
                                </div>
                            </div>
                            <div class="ibox-content ">

                                <div>
                                    <div class="feed-activity-list ">

                                        <div class="feed-element ">
                                            <a href="profile.html " class="pull-left ">
                                                <img alt="image " class="img-circle " src="<?php echo e(asset( 'admin/img/a1.jpg')); ?> ">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right ">5m ago</small>
                                                <strong>Monica Smith</strong>
                                                <p class="m-b-xs ">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee
                                                </p>
                                                <small class="text-muted ">Today 5:60 pm - 12.06.2014</small>

                                            </div>
                                        </div>

                                        <div class="feed-element ">
                                            <a href="profile.html " class="pull-left ">
                                                <img alt="image " class="img-circle " src="<?php echo e(asset( 'admin/img/a2.jpg')); ?> ">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right ">2h ago</small>
                                                <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong>                                                site. <br>
                                                <small class="text-muted ">Today 2:10 pm - 12.06.2014</small>
                                            </div>
                                        </div>
                                        <div class="feed-element ">
                                            <a href="profile.html " class="pull-left ">
                                                <img alt="image " class="img-circle " src="<?php echo e(asset( 'admin/img/a3.jpg')); ?> ">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right ">2h ago</small>
                                                <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>.
                                                <br>
                                                <small class="text-muted ">2 days ago at 8:30am</small>
                                            </div>
                                        </div>
                                        <div class="feed-element ">
                                            <a href="profile.html " class="pull-left ">
                                                <img alt="image " class="img-circle " src="<?php echo e(asset( 'admin/img/a4.jpg')); ?> ">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right text-navy ">5h ago</small>
                                                <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>.
                                                <br>
                                                <small class="text-muted ">Yesterday 1:21 pm - 11.06.2014</small>
                                                <div class="actions ">
                                                    <a class="btn btn-xs btn-white "><i class="fa fa-thumbs-up "></i> Like </a>
                                                    <a class="btn btn-xs btn-white "><i class="fa fa-heart "></i> Love</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary btn-block m-t "><i class="fa fa-arrow-down "></i> Show More</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 ">
                        <div class="ibox float-e-margins ">
                            <div class="ibox-title ">
                                <h5>Read below comments</h5>
                                <div class="ibox-tools ">
                                    <a class="collapse-link ">
                                            <i class="fa fa-chevron-up "></i>
                                        </a>
                                    <a class="dropdown-toggle " data-toggle="dropdown " href="# ">
                                            <i class="fa fa-wrench "></i>
                                        </a>
                                    <ul class="dropdown-menu dropdown-user ">
                                        <li><a href="# ">Config option 1</a>
                                        </li>
                                        <li><a href="# ">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link ">
                                            <i class="fa fa-times "></i>
                                        </a>
                                </div>
                            </div>
                            <div class="ibox-content no-padding ">
                                <ul class="list-group ">
                                    <li class="list-group-item ">
                                        <p><a class="text-info " href="# ">@Alan  Marry</a> I belive that. Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry.</p>
                                        <div class="row ">
                                            <div class="col-lg-3 ">
                                                <small class="block text-muted "><i class="fa fa-clock-o "></i> 1 minuts ago</small>
                                            </div>
                                            <div class="col-lg-9 "><button class="btn btn-primary ">Details</button></div>
                                        </div>

                                    </li>
                                    <li class="list-group-item ">
                                        <p><a class="text-info " href="# ">@Stock  Man</a> Check this stock chart. This price
                                            is crazy!
                                        </p>
                                        <div class="text-center m ">
                                            <span id="sparkline8 "></span>
                                        </div>
                                        <small class="block text-muted "><i class="fa fa-clock-o "></i> 2 hours ago</small>
                                    </li>
                                    <li class="list-group-item ">
                                        <p><a class="text-info " href="# ">@Kevin  Smith</a> Lorem ipsum unknown printer took
                                            a galley
                                        </p>
                                        <small class="block text-muted "><i class="fa fa-clock-o "></i> 2 minuts ago</small>
                                    </li>
                                    <li class="list-group-item ">
                                        <p><a class="text-info " href="# ">@Jonathan  Febrick</a> The standard chunk of Lorem
                                            Ipsum
                                        </p>
                                        <small class="block text-muted "><i class="fa fa-clock-o "></i> 1 hour ago</small>
                                    </li>
                                    <li class="list-group-item ">
                                        <p><a class="text-info " href="# ">@Alan  Marry</a> I belive that. Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry.</p>
                                        <small class="block text-muted "><i class="fa fa-clock-o "></i> 1 minuts ago</small>
                                    </li>
                                    <li class="list-group-item ">
                                        <p><a class="text-info " href="# ">@Kevin  Smith</a> Lorem ipsum unknown printer took
                                            a galley
                                        </p>
                                        <small class="block text-muted "><i class="fa fa-clock-o "></i> 2 minuts ago</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                 
            </div>
        </div>
    </div>
    <?php echo $__env->make('ManagementFile/backend/footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>


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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptjs'); ?>
<!-- Flot -->
<script src="<?php echo e(asset( 'admin/js/plugins/flot/jquery.flot.js')); ?> "></script>
<script src="<?php echo e(asset( 'admin/js/plugins/flot/jquery.flot.tooltip.min.js')); ?> "></script>
<script src="<?php echo e(asset( 'admin/js/plugins/flot/jquery.flot.spline.js')); ?> "></script>
<script src="<?php echo e(asset( 'admin/js/plugins/flot/jquery.flot.resize.js')); ?> "></script>
<script src="<?php echo e(asset( 'admin/js/plugins/flot/jquery.flot.pie.js')); ?> "></script>

<!-- Peity -->
<script src="<?php echo e(asset( 'admin/js/plugins/peity/jquery.peity.min.js')); ?> "></script>
<script src="<?php echo e(asset( 'admin/js/demo/peity-demo.js')); ?> "></script>

<!-- GITTER -->
<script src="<?php echo e(asset( 'admin/js/plugins/gritter/jquery.gritter.min.js')); ?> "></script>

<!-- Sparkline -->
<script src="<?php echo e(asset( 'admin/js/plugins/sparkline/jquery.sparkline.min.js')); ?> "></script>

<!-- Sparkline demo data  -->
<script src="<?php echo e(asset( 'admin/js/demo/sparkline-demo.js')); ?> "></script>

<!-- ChartJS-->
<script src="<?php echo e(asset( 'admin/js/plugins/chartJs/Chart.min.js')); ?> "></script>

<!-- slick carousel-->
<script src="<?php echo e(asset( 'admin/js/plugins/slick/slick.min.js')); ?> "></script>

<!-- Additional style only for demo purpose -->
<style>
    .slick_demo_2 .ibox-content {
        margin: 0 10px;
    }
</style>

<script>
    $(document).ready(function(){


            $('.slick_demo_1').slick({
                dots: false
            });

            $('.slick_demo_2').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.slick_demo_3').slick({
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                adaptiveHeight: true
            });
        });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ManagementFile/backend/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>