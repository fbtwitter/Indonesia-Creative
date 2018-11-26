<!DOCTYPE html>
<html lang="en">

<head>
    

    <?php $__env->startSection('titlename'); ?>
        IC SURABAYA
    <?php $__env->stopSection(); ?>
</head>

<body id="page-top">
    <?php echo $__env->make('frontend/nav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend/header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('frontend/footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend/script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>

<?php echo $__env->make('frontend/title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>