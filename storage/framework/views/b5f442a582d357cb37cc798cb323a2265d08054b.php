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
        
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
                <ol class="breadcrumb" style="background-color: transparent;margin: 20px 0px 0px 70px;">
                        <li>
                            <a href="<?php echo e(url('Dashboard')); ?>">Home</a>
                        </li>
                        <li class="breadcrumb" style="background-color: transparent;">
                            <a>Course Category</a>
                        </li>
                        <li class="active">
                            <strong>Other Course</strong>
                        </li>
                    </ol>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                
            </ul>
        </nav>
    </div>
    <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:10px;">
        <div class="col-lg-12">
            <h2 class="text-center" style="font-weight:700; font-size:26px">Other Course</h2>
            <h2 class="text-center" style="font-weight:300; font-size:18px">Take a look all the class here, and enjoy with your extra coffee</h2>
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