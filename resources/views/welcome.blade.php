@extends('ManagementFile/frontend/layout')
@section('title-name') IC Surabaya
@endsection

@section('body-content')

<section id="about">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-12 wow fadeIn">
                <h1>What you receive</h1>
                <p>ICS is the short for Industry Creative Surabaya, who would helping you to strengthen your creativity skill
                    in this modern world</p>
                <hr class="colored">
            </div>
        </div>
        <div class="row text-center content-row">
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay=".2s">
                <div class="about-content">
                    <i class="fa fa-comment fa-4x"></i>
                    <h3>Forum Group</h3>
                    <p>Giving you more easier to text your friend and keep connected</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay=".4s">
                <div class="about-content">
                    <i class="fa fa-certificate fa-4x"></i>
                    <h3>Legality Certificate</h3>
                    <p>Helping you to be known on your skill by completing the course</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay=".6s">
                <div class="about-content">
                    <i class="fa fa-pagelines fa-4x"></i>
                    <h3>Books & Software</h3>
                    <p>Deepen your fondness more and more</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End of About --}} {{-- Course Category --}}
<section id="ct_course" class="bg-gray">
    <div class="container text-center wow fadeIn">
        <h2>Course Category</h2>
        <hr class="colored">
        <p>Here are some in depth case studies of larger projects that I've worked on in the past.</p>
    </div>
</section>
<section class="portfolio-carousel wow fadeIn">
    <div class="item video" id="video1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-push-8">
                    <div class="project-details">
                        <img src="{{ asset('front/assets/img/client-logos/logo-1.png') }}" class="img-responsive client-logo" alt="">
                        <span class="project-name">Project Name</span>
                        <span class="project-description">Branding, Website Design</span>
                        <hr class="colored">
                        <a href="#portfolioModal1" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                    </div>
                </div>
                <div class="col-md-8 col-md-pull-4 hidden-xs">
                    <img src="{{ asset('front/assets/img/portfolio/mobile-screens.png') }}" class="img-responsive portfolio-image" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="item" style="background-image: url('{{ asset('front/assets/img/creative/portfolio/bg-2.jpg') }}')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-push-8">
                    <div class="project-details">
                        <img src="{{ asset('front/assets/img/client-logos/logo-2.png') }}" class="img-responsive client-logo" alt="">
                        <span class="project-name">Project Name</span>
                        <span class="project-description">Branding, Website Design</span>
                        <hr class="colored">
                        <a href="#portfolioModal2" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                    </div>
                </div>
                <div class="col-md-8 col-md-pull-4 hidden-xs">
                    <img src="{{ asset('front/assets/img/portfolio/tablet-screens.png') }}" class="img-responsive portfolio-image" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="item" style="background-image: url('{{ asset('front/assets/img/creative/portfolio/bg-3.jpg') }}')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-push-8">
                    <div class="project-details">
                        <img src="{{ asset('front/assets/img/client-logos/logo-3.png') }}" class="img-responsive client-logo" alt="">
                        <span class="project-name">Project Name</span>
                        <span class="project-description">Branding, Website Design</span>
                        <hr class="colored">
                        <a href="#portfolioModal3" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                    </div>
                </div>
                <div class="col-md-8 col-md-pull-4 hidden-xs">
                    <img src="{{ asset('front/assets/img/portfolio/mobile-screens.png') }}" class="img-responsive portfolio-image" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="item" style="background-image: url('{{ asset('front/assets/img/creative/portfolio/bg-4.jpg') }}')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-push-8">
                    <div class="project-details">
                        <img src="{{ asset('front/assets/img/client-logos/logo-4.png') }}" class="img-responsive client-logo" alt="">
                        <span class="project-name">Project Name</span>
                        <span class="project-description">Branding, Website Design</span>
                        <hr class="colored">
                        <a href="#portfolioModal4" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                    </div>
                </div>
                <div class="col-md-8 col-md-pull-4 hidden-xs">
                    <img src="{{ asset('front/assets/img/portfolio/tablet-screens.png') }}" class="img-responsive portfolio-image" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End of Course Category --}} {{-- Lecturer --}}
<section id="lecturer">
    <div class="container text-center wow fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <h2>Professional</h2>
                <p>We are a group of professionals and artisan chefs with a passion for culinary excellence.</p>
                <hr class="colored">
            </div>
        </div>
        <div class="row content-row">
            <div class="col-lg-12">
                <div class="about-carousel">
                    <div class="item">
                        <img src="{{ asset('front/assets/img/culinary/people/1.jpg') }}" class="img-responsive" alt="">
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
                        <img src="{{ asset('front/assets/img/culinary/people/2.jpg') }}" class="img-responsive" alt="">
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
                        <img src="{{ asset('front/assets/img/culinary/people/3.jpg') }}" class="img-responsive" alt="">
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
                        <img src="{{ asset('front/assets/img/culinary/people/4.jpg') }}" class="img-responsive" alt="">
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
                        <img src="{{ asset('front/assets/img/culinary/people/5.jpg') }}" class="img-responsive" alt="">
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
                        <img src="{{ asset('front/assets/img/culinary/people/6.jpg') }}" class="img-responsive" alt="">
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
{{-- End Of Lecturer --}} {{-- Student Review --}}
<section id="student" class="testimonials bg-gray">
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
                                        <img src="{{ asset('front/assets/img/testimonials/1.jpg') }}" class="img-circle img-responsive" alt="">
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
                                        <img src="{{ asset('front/assets/img/testimonials/1.jpg') }}" class="img-circle img-responsive" alt="">
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
@endsection
