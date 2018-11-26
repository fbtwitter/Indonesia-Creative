<?php $__env->startSection('content'); ?>

<section id="about">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-12 wow fadeIn">
                <h1>What our Elearning would gives to you</h1>
                <p>Vitality is the perfect theme for a freelance professional or an agency.</p>
                <hr class="colored">
            </div>
        </div>
        <div class="row text-center content-row">
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay=".2s">
                <div class="about-content">
                    <i class="fa fa-chat"></i>
                    <h3>Live Chat</h3>
                    <p>This theme includes the retina.js plugin for easy retina image support so your images and graphics will look great on mobile devices!</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay=".4s">
                <div class="about-content">
                    <i class="fa fa-reward"></i>
                    <h3>Reward & Certificate</h3>
                    <p>Vitality is built using Bootstrap 3, and is easy to edit and customize. LESS files are included as well for deeper customization.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay=".6s">
                <div class="about-content">
                    <i class="fa fa-books"></i>
                    <h3>Books & Software</h3>
                    <p>When building this theme, we've paid close attention to how it looks on various screen sizes. Try it out on a phone or tablet!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>