@extends('frontend/layout') 
@section('titlename') IC SURABAYA 
@stop //// 
@section('body-content')
<!-- Navigation -->
<!-- Note: navbar-default and navbar-inverse are both supported with this theme. -->
<nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="assets/img/logo.png" class="img-responsive" alt="">
                </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#process">Process</a>
                </li>
                <li>
                    <a class="page-scroll" href="#work">Work</a>
                </li>
                <li>
                    <a class="page-scroll" href="#pricing">Pricing</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<header style="background-image: url('assets/img/creative/bg-header.jpg');">
    <div class="intro-content">
        <img src="assets/img/creative/profile.png" class="img-responsive img-centered" alt="">
        <div class="brand-name">John Smith</div>
        <hr class="colored">
        <div class="brand-name-subtext">An Online Portfolio For Creatives</div>
    </div>
    <div class="scroll-down">
        <a class="btn page-scroll" href="#about"><i class="fa fa-angle-down fa-fw"></i></a>
    </div>
</header>
<section id="about">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-12 wow fadeIn">
                <h1>A Theme for Creatives &amp; Agencies</h1>
                <p>Vitality is the perfect theme for a freelance professional or an agency.</p>
                <hr class="colored">
            </div>
        </div>
        <div class="row text-center content-row">
            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".2s">
                <div class="about-content">
                    <i class="fa fa-eye fa-4x"></i>
                    <h3>Retina Ready</h3>
                    <p>This theme includes the retina.js plugin for easy retina image support so your images and graphics will
                        look great on mobile devices!</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".4s">
                <div class="about-content">
                    <i class="fa fa-edit fa-4x"></i>
                    <h3>Easy to Edit</h3>
                    <p>Vitality is built using Bootstrap 3, and is easy to edit and customize. LESS files are included as well
                        for deeper customization.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".6s">
                <div class="about-content">
                    <i class="fa fa-tablet fa-4x"></i>
                    <h3>Responsive</h3>
                    <p>When building this theme, we've paid close attention to how it looks on various screen sizes. Try it
                        out on a phone or tablet!</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".8s">
                <div class="about-content">
                    <i class="fa fa-heart fa-4x"></i>
                    <h3>Built with Love</h3>
                    <p>All of our themes are crafted with care, and we strive to make your experience as one of our customers
                        the best as possible.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-carousel wow fadeIn">
    <div class="item" style="background-image: url('assets/img/creative/portfolio/bg-1.jpg')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-push-8">
                    <div class="project-details">
                        <img src="assets/img/client-logos/logo-1.png" class="img-responsive client-logo" alt="">
                        <span class="project-name">Project Name</span>
                        <span class="project-description">Branding, Website Design</span>
                        <hr class="colored">
                        <a href="#portfolioModal1" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                    </div>
                </div>
                <div class="col-md-8 col-md-pull-4 hidden-xs">
                    <img src="assets/img/portfolio/mobile-screens.png" class="img-responsive portfolio-image" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="item" style="background-image: url('assets/img/creative/portfolio/bg-2.jpg')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-push-8">
                    <div class="project-details">
                        <img src="assets/img/client-logos/logo-2.png" class="img-responsive client-logo" alt="">
                        <span class="project-name">Project Name</span>
                        <span class="project-description">Branding, Website Design</span>
                        <hr class="colored">
                        <a href="#portfolioModal2" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                    </div>
                </div>
                <div class="col-md-8 col-md-pull-4 hidden-xs">
                    <img src="assets/img/portfolio/tablet-screens.png" class="img-responsive portfolio-image" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="item" style="background-image: url('assets/img/creative/portfolio/bg-3.jpg')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-push-8">
                    <div class="project-details">
                        <img src="assets/img/client-logos/logo-1.png" class="img-responsive client-logo" alt="">
                        <span class="project-name">Project Name</span>
                        <span class="project-description">Branding, Website Design</span>
                        <hr class="colored">
                        <a href="#portfolioModal3" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                    </div>
                </div>
                <div class="col-md-8 col-md-pull-4 hidden-xs">
                    <img src="assets/img/portfolio/mobile-screens.png" class="img-responsive portfolio-image" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="item" style="background-image: url('assets/img/creative/portfolio/bg-4.jpg')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-push-8">
                    <div class="project-details">
                        <img src="assets/img/client-logos/logo-2.png" class="img-responsive client-logo" alt="">
                        <span class="project-name">Project Name</span>
                        <span class="project-description">Branding, Website Design</span>
                        <hr class="colored">
                        <a href="#portfolioModal4" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                    </div>
                </div>
                <div class="col-md-8 col-md-pull-4 hidden-xs">
                    <img src="assets/img/portfolio/tablet-screens.png" class="img-responsive portfolio-image" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="people">
    <div class="container text-center wow fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <h2>People</h2>
                <p>We are a group of professionals and artisan chefs with a passion for culinary excellence.</p>
                <hr class="colored">
            </div>
        </div>
        <div class="row content-row">
            <div class="col-lg-12">
                <div class="about-carousel">
                    <div class="item">
                        <img src="assets/img/culinary/people/1.jpg" class="img-responsive" alt="">
                        <div class="caption">
                            <h3>Alan Wimbledon</h3>
                            <hr class="colored">
                            <p><em>Owner</em>
                            </p>
                            <ul class="list-inline social">
                                <li>
                                    <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope-o fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/culinary/people/2.jpg" class="img-responsive" alt="">
                        <div class="caption">
                            <h3>Jeffery Howard</h3>
                            <hr class="colored">
                            <p><em>Executive Chef</em>
                            </p>
                            <ul class="list-inline social">
                                <li>
                                    <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope-o fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/culinary/people/3.jpg" class="img-responsive" alt="">
                        <div class="caption">
                            <h3>Kenny Williams</h3>
                            <hr class="colored">
                            <p><em>Executive Chef</em>
                            </p>
                            <ul class="list-inline social">
                                <li>
                                    <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope-o fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/culinary/people/4.jpg" class="img-responsive" alt="">
                        <div class="caption">
                            <h3>Steven Cooper</h3>
                            <hr class="colored">
                            <p><em>Executive Chef</em>
                                <ul class="list-inline social">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i></a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/culinary/people/5.jpg" class="img-responsive" alt="">
                        <div class="caption">
                            <h3>Francois Borde</h3>
                            <hr class="colored">
                            <p><em>Pastry Chef</em>
                                <ul class="list-inline social">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i></a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/culinary/people/6.jpg" class="img-responsive" alt="">
                        <div class="caption">
                            <h3>Thomas Cheung</h3>
                            <hr class="colored">
                            <p><em>Corkmaster</em>
                                <ul class="list-inline social">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i></a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials bg-gray">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="testimonials-carousel">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="lead">"Working with John Smith was both a valuable and rewarding experience."</p>
                                <hr class="colored">
                                <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, temporibus, laborum,
                                    dignissimos doloremque corporis alias nostrum recusandae culpa id quisquam harum impedit
                                    sed sunt non obcaecati vero ipsam aut fugit?</p>
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="assets/img/testimonials/1.jpg" class="img-circle img-responsive" alt="">
                                    </div>
                                    <div class="testimonial-author">
                                        <span class="name">Jim Walker</span>
                                        <p class="small">CEO of GeneriCorp</p>
                                        <div class="stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="lead">"John is an excellent designer, and we got our project done on time and on budget."</p>
                                <hr class="colored">
                                <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, temporibus, laborum,
                                    dignissimos doloremque corporis alias nostrum recusandae culpa id quisquam harum impedit
                                    sed sunt non obcaecati vero ipsam aut fugit?</p>
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="assets/img/testimonials/1.jpg" class="img-circle img-responsive" alt="">
                                    </div>
                                    <div class="testimonial-author">
                                        <span class="name">Jim Walker</span>
                                        <p class="small">CEO of GeneriCorp</p>
                                        <div class="stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer" style="background-image: url('assets/img/bg-footer.jpg')">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 contact-details">
                <h4><i class="fa fa-phone"></i> Call</h4>
                <p>555-213-4567</p>
            </div>
            <div class="col-md-4 contact-details">
                <h4><i class="fa fa-map-marker"></i> Visit</h4>
                <p>3481 Melrose Place
                    <br>Beverly Hills, CA 90210</p>
            </div>
            <div class="col-md-4 contact-details">
                <h4><i class="fa fa-envelope"></i> Email</h4>
                <p><a href="mailto:mail@example.com">mail@example.com</a>
                </p>
            </div>
        </div>
        <div class="row social">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-lg-12">
                <p class="small">&copy; 2015 Start Bootstrap Themes</p>
            </div>
        </div>
    </div>
</footer>


@stop