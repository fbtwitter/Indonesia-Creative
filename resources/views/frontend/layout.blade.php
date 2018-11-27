<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> @yield('title-name') </title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('front/assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Retina.js - Load first for faster HQ mobile images. -->
    <script src="{{ asset('front/assets/js/plugins/retina/retina.min.js') }}"></script>
    <!-- Font Awesome -->
    <link href="{{ asset('front/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Default Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="{{ asset('front/assets/css/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/assets/css/plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/assets/css/plugins/owl-carousel/owl.transitions.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/assets/css/plugins/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/assets/css/plugins/background.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/assets/css/plugins/animate.css') }}" rel="stylesheet" type="text/css">
    <!-- Edited CSS -->
    <link id="changeable-colors" href="{{ asset('front/assets/css/ic-projects.css') }}" rel="stylesheet" type="text/css">

</head>

<body id="page-top">

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
                        <img src="{{ asset('front/assets/img/logo.png') }}" class="img-responsive" alt="">
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
                        <a class="page-scroll" href="#ct_course">Course Category</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#lecturer">Professional</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#student">Student Reviews</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="btn btn-primary identity" data-cat="identity" href="#portfolioModal1" data-toggle="modal">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    {{-- Target Modal --}}

    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/creative/portfolio/bg-1.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 card">
                            <img src="assets/img/client-logos/logo-1.png" class="img-responsive img-centered" alt="">
                            <h2>IC Surabaya</h2>
                            <hr class="colored">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ibox-content">
                                        <h5 style="color:black;margin-top: 10px;font-size: x-large;">Sign In</h5>
                                        <form class="m-t" role="form" action="index.html">

                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Username" required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password" required="">
                                            </div>
                                            <button type="submit" class="btn btn-primary block full-width m-b m-t">Sign In</button>

                                            <a href="#">
                                                        <small>Forgot password?</small>
                                                    </a>

                                            <p class="text-muted text-center">
                                                <small>Do not have an account?</small>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ibox-content">
                                        <h5 style="color:black;margin-top: 10px;font-size: x-large;">Sign Up</h5>
                                        <form class="m-t" role="form" action="index.html">
                                            <div class="form-group">
                                                <input type="name" class="form-control" placeholder="Insert Name" required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Insert Email" required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Insert PaPassword" required="">
                                            </div>
                                            <button type="submit" class="btn btn-danger block full-width m-b m-t">Sign Up</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- --}}



    <header style="background-image: url( '{{ asset('front/assets/img/bg-header.jpg ') }}'); ">
        <div class="intro-content ">
            <img src="{{ asset( 'front/assets/img/profile.png') }} " class="img-responsive img-centered " alt=" ">
            <div class="brand-name ">IC SURABAYA</div>
            <hr class="colored ">
            <div class="brand-name-subtext ">Industry Creative</div>
            <div class="brand-name-subtext ">Surabaya</div>
        </div>
        <div class="scroll-down ">
            <a class="btn page-scroll " href="#about "><i class="fa fa-angle-down fa-fw "></i></a>
        </div>
    </header>

    @yield('body-content')

    <footer id="contact" class="footer" style="background-image: url('{{ asset('front/assets/img/bg-footer.jpg') }}')">
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

    <!-- Core Scripts -->
    <script src="{{ asset( 'front/assets/js/jquery.js') }}"></script>
    <script src="{{ asset( 'front/assets/js/bootstrap/bootstrap.min.js') }} "></script>
    <!-- Plugin Scripts -->
    <script src="{{ asset( 'front/assets/js/plugins/jquery.easing.min.js') }} "></script>
    <script src="{{ asset( 'front/assets/js/plugins/classie.js') }} "></script>
    <script src="{{ asset( 'front/assets/js/plugins/cbpAnimatedHeader.js') }} "></script>
    <script src="{{ asset( 'front/assets/js/plugins/owl-carousel/owl.carousel.js') }} "></script>
    <script src="{{ asset( 'front/assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js') }} "></script>
    <script src="{{ asset( 'front/assets/js/plugins/background/core.js') }} "></script>
    <script src="{{ asset( 'front/assets/js/plugins/background/transition.js') }} "></script>
    <script src="{{ asset( 'front/assets/js/plugins/background/background.js') }} "></script>
    <script src="{{ asset( 'front/assets/js/plugins/jquery.mixitup.js') }} "></script>
    <script src="{{ asset( 'front/assets/js/plugins/wow/wow.min.js') }} "></script>
    <script src="{{ asset( 'front/assets/js/contact_me.js') }} "></script>
    <script src="{{ asset( 'front/assets/js/plugins/jqBootstrapValidation.js') }} "></script>
    <!-- Edited Java-Scripts -->
    <script src="{{ asset( 'front/assets/js/ic-projects.js') }} "></script>

</body>

</html>
