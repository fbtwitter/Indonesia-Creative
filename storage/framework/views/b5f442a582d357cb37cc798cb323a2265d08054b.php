<?php $__env->startSection('title-dashboard'); ?> Other Course
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptcss'); ?>
<!-- Gritter -->
<link href="<?php echo e(asset('admin/js/plugins/gritter/jquery.gritter.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('admin/css/plugins/iCheck/custom.css')); ?>" rel="stylesheet">
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
                    <span class="m-r-sm text-muted welcome-message">Welcome <?php echo e($data->NAMA_DEPAN); ?></span>
                </li>
                <li>
                    <a class="right-sidebar-toggle"><i class="fa fa-tasks"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Other Course</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('Dashboard')); ?>">Home</a>
                </li>
                <li class="breadcrumb">
                    <a>Course Category</a>
                </li>
                <li class="active">
                    <strong>Other Course</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-container">

                    <div class="tabs-left">
                        <ul class="nav nav-tabs">
                          <?php
                            $i=1
                          ?>
                          <?php $__currentLoopData = $daftar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li class="<?php if($i==1): ?>
                                active
                              <?php endif; ?>"><a data-toggle="tab" href="#tab-<?php echo e($i); ?>"><?php echo e($d->NAMA_COURSE); ?></a></li>
                            <?php
                              $i++
                            ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="tab-content ">
                          <?php
                            $i=1
                          ?>
                          <?php $__currentLoopData = $daftar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div id="tab-<?php echo e($i); ?>" class="tab-pane <?php if($i==1): ?>
                              active
                            <?php endif; ?>">
                                <div class="panel-body" style="background-image:url('<?php echo e(asset('admin/img/course/bg-1.jpg')); ?>');">
                                    <div class="col-lg-7">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-content" style="background-color:transparent;">
                                                <figure>
                                                    <iframe width="300" height="300" src="http://www.youtube.com/embed/bwj2s_5e12U" frameborder="0" allowfullscreen></iframe>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-content profile-content" style="background-color:transparent; color: white">
                                                <h2><strong><?php echo e($d->NAMA_COURSE); ?> Class</strong></h2>
                                                <p><i class="fa fa-clock-o"></i> Uploaded on October 27, 2011</p>
                                                <p><?php echo e($d->DEFINISI_COURSE); ?></p>
                                                <div class="row m-t-md">
                                                    <div class="col-md-12">
                                                      <form class="" action="<?php echo e(route('Others.store')); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="idcourse" value="<?php echo e($i); ?>">
                                                          <?php if(isset($join)): ?>
                                                            <?php if(in_array($i,$join)): ?>
                                                              <button class="btn btn-primary btn-outline btn-block" type="submit" disabled>Joined</button>
                                                            <?php else: ?>
                                                              <button class="btn btn-primary btn-outline btn-block" type="submit">Join Class!</button>
                                                            <?php endif; ?>
                                                            <?php else: ?>
                                                              <button class="btn btn-primary btn-outline btn-block" type="submit">Join Class!</button>
                                                            <?php endif; ?>
                                                      </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                              $i++
                            ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<script src="<?php echo e(asset('admin/js/plugins/pace/pace.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/plugins/video/responsible-video.js')); ?>"></script>

<script>
    $(document).on('webkitfullscreenchange mozfullscreenchange fullscreenchange', function (e){
        $('body').hasClass('fullscreen-video') ? $('body').removeClass('fullscreen-video') : $('body').addClass('fullscreen-video')
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ManagementFile/backend/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>