<?php $__env->startSection('title-dashboard'); ?> Advertising Class
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptcss'); ?>
<!-- Toastr style -->
<link href="<?php echo e(asset('css/plugins/toastr/toastr.min.css')); ?>" rel="stylesheet">

<!-- Gritter -->
<link href="<?php echo e(asset('admin/js/plugins/gritter/jquery.gritter.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('admin/css/plugins/iCheck/custom.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('admin/css/plugins/fullcalendar/fullcalendar.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('admin/css/plugins/fullcalendar/fullcalendar.print.css')); ?>" rel='stylesheet' media='print'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body-content'); ?>



<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
        
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
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
        <div class="col-lg-10">
            <h2>Advertising Class</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('Dashboard')); ?>">Home</a>
                </li>
                <li class="breadcrumb">
                    <a>Course Category</a>
                </li>
                <li class="breadcrumb">
                    <a>Selected Course</a>
                </li>
                <li class="active">
                    <strong>Advertising</strong>
                </li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <figure>
                            <iframe width="450" height="350" src="http://www.youtube.com/embed/bwj2s_5e12U" frameborder="0" allowfullscreen></iframe>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-content profile-content">
                        <h4><strong>Microsoft's Concept of How 2019 Will Look Like - Official Video</strong></h4>
                        <p><i class="fa fa-clock-o"></i> Uploaded on October 27, 2011</p>
                        <h5>
                            Science and Technology
                        </h5>
                        <p>
                            What do you think the world will look like in 2019? Predicting future trends is usually done poorly by Analysts so company's
                            seem to want to give consumer a glimpse of what they want the future to look like.
                            <br/>
                            <br/>
                            <small>Microsoft has just released a video showcasing magical<br/> gadget after magical gadget.</small>
                            <br/>
                            <br/> Earlier this month "Microsoft Office Labs Vision 2019," was released and now we have "Productivity
                            Future Vision (2011)". Both are inspiring and beautifully edited. </p>
                        <div class="row m-t-md">
                            <div class="col-md-12">
                                <button class="btn btn-primary">Join Class!</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            
            <div class="wrapper wrapper-content">
                
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Option</h5>
                            </div>
                            <div class="ibox-content">
                                <div>
                                    <div class="feed-activity-list">
                                        <div class="feed-element">
                                            <h2 class="active">Overview</h2>
                                        </div>
                                        <div class="feed-element">
                                            <h2 class="">Course Content</h1>
                                        </div>
                                        <div class="feed-element">
                                            <h2 class="">Announcement</h2>
                                        </div>
                                        <div class="feed-element">
                                            <h2 class="">Library</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Read below comments</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <li><a href="#">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                </div>
                            </div>
                            <div class="ibox-content no-padding">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <p><a class="text-info" href="#">@Alan  Marry</a> I belive that. Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry.</p>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 minuts ago</small>
                                            </div>
                                            <div class="col-lg-9"><button class="btn btn-primary">Details</button></div>
                                        </div>

                                    </li>
                                    <li class="list-group-item">
                                        <p><a class="text-info" href="#">@Stock  Man</a> Check this stock chart. This price is
                                            crazy!
                                        </p>
                                        <div class="text-center m">
                                            <span id="sparkline8"></span>
                                        </div>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small>
                                    </li>
                                    <li class="list-group-item">
                                        <p><a class="text-info" href="#">@Kevin  Smith</a> Lorem ipsum unknown printer took a
                                            galley
                                        </p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago</small>
                                    </li>
                                    <li class="list-group-item ">
                                        <p><a class="text-info" href="#">@Jonathan  Febrick</a> The standard chunk of Lorem Ipsum</p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago</small>
                                    </li>
                                    <li class="list-group-item">
                                        <p><a class="text-info" href="#">@Alan  Marry</a> I belive that. Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry.</p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 minuts ago</small>
                                    </li>
                                    <li class="list-group-item">
                                        <p><a class="text-info" href="#">@Kevin  Smith</a> Lorem ipsum unknown printer took a
                                            galley
                                        </p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                 
            </div>
        </div>
    </div>
</div>


<div id="right-sidebar" class="animated">
    <div class="sidebar-container">

        <ul class="nav nav-tabs navs-2">
            <li class="active"><a data-toggle="tab" href="#tab-1">
                Announcements
                    </a></li>
            <li class=""><a data-toggle="tab" href="#tab-2">
                Joined Course
            </a></li>
        </ul>

        <div class="tab-content">
            
            <div id="tab-1" class="tab-pane active">

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

            
            <div id="tab-2" class="tab-pane">

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

            <div id="tab-3" class="tab-pane">

                <div class="sidebar-title">
                    <h3><i class="fa fa-gears"></i> Settings</h3>
                    <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                </div>

                <div class="setings-item">
                    <span>
                Show notifications
            </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                            <label class="onoffswitch-label" for="example">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                Disable Chat
            </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
                            <label class="onoffswitch-label" for="example2">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                Enable history
            </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                            <label class="onoffswitch-label" for="example3">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                Show charts
            </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                            <label class="onoffswitch-label" for="example4">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                Offline users
            </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">
                            <label class="onoffswitch-label" for="example5">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                Global search
            </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">
                            <label class="onoffswitch-label" for="example6">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                Update everyday
            </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                            <label class="onoffswitch-label" for="example7">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="sidebar-content">
                    <h4>Settings</h4>
                    <div class="small">
                        I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry. And typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s. Over the years, sometimes
                        by accident, sometimes on purpose (injected humour and the like).
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptjs'); ?>
<!-- Flot -->
<script src="<?php echo e(asset('admin/js/plugins/flot/jquery.flot.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/plugins/flot/jquery.flot.tooltip.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/plugins/flot/jquery.flot.spline.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/plugins/flot/jquery.flot.resize.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/plugins/flot/jquery.flot.pie.js')); ?>"></script>

<!-- Peity -->
<script src="<?php echo e(asset('admin/js/plugins/peity/jquery.peity.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/demo/peity-demo.js')); ?>"></script>

<!-- GITTER -->
<script src="<?php echo e(asset('admin/js/plugins/gritter/jquery.gritter.min.js')); ?>"></script>

<!-- Sparkline -->
<script src="<?php echo e(asset('admin/js/plugins/sparkline/jquery.sparkline.min.js')); ?>"></script>

<!-- Sparkline demo data  -->
<script src="<?php echo e(asset('admin/js/demo/sparkline-demo.js')); ?>"></script>

<!-- ChartJS-->
<script src="<?php echo e(asset('admin/js/plugins/chartJs/Chart.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ManagementFile/backend/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>