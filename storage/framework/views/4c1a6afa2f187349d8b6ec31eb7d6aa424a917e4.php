<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title-dashboard'); ?></title>

    <link href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('admin/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">  <?php echo $__env->yieldContent('scriptcss'); ?> 
    <link href="<?php echo e(asset('admin/css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <?php echo $__env->make('ManagementFile/backend/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->yieldContent('body-content'); ?>
    </div>


    <!-- Mainly scripts -->
    <script src="<?php echo e(asset('admin/js/plugins/fullcalendar/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/jquery-3.1.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/plugins/metisMenu/jquery.metisMenu.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/plugins/slimscroll/jquery.slimscroll.min.js')); ?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo e(asset('admin/js/inspinia.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/plugins/pace/pace.min.js')); ?>"></script>

    <!-- jQuery UI -->
    <script src="<?php echo e(asset('admin/js/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>

    <?php echo $__env->yieldContent('scriptjs'); ?>

</body>

</html>
