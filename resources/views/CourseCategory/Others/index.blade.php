@foreach ($data as $d)
@extends('ManagementFile/backend/layout')
@section('title-dashboard') Other Course
@endsection

@section('scriptcss')
<!-- Gritter -->
<link href="{{ asset('admin/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

<link href="{{ asset('admin/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
@endsection

@section('body-content')



<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
        {{-- Navbar --}}
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
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Other Course</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('Dashboard') }}">Home</a>
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
                            <li class="active"><a data-toggle="tab" href="#tab-1">Advertising</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Architecture</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3">Crafts</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-4">Software</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-5">Music</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-6">Fashion</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-7">Interactive Games</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-8">Music</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-9">Performance Art</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-10">Publishing & Printing</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-11">R n D</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-12">Television & Radio</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-13">Vidio, Film, Photography</a></li>
                        </ul>
                        <div class="tab-content ">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body" style="background-image:url('{{ asset('admin/img/course/bg-1.jpg') }}');">
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
                                                <h2><strong>Advertising Class</strong></h2>
                                                <p><i class="fa fa-clock-o"></i> Uploaded on October 27, 2011</p>
                                                <h5>
                                                    Science and Technology
                                                </h5>
                                                <p>
                                                    What do you think the world will look like in 2019? Predicting future trends is usually done poorly by Analysts so company's
                                                    seem to want to give consumer a glimpse of what they want the future
                                                    to look like.
                                                    <br/>
                                                    <br/>
                                                    <small>Microsoft has just released a video showcasing magical<br/> gadget after magical gadget.</small>
                                                    <br/>
                                                    <br/> Earlier this month "Microsoft Office Labs Vision 2019," was released
                                                    and now we have "Productivity Future Vision (2011)". Both are inspiring
                                                    and beautifully edited. </p>
                                                <div class="row m-t-md">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary btn-outline btn-block">Join Class!</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Donec quam felis</strong>

                                    <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among
                                        the stalks, and grow familiar with the countless indescribable forms of the insects
                                        and flies, then I feel the presence of the Almighty, who formed us in his own image,
                                        and the breath </p>

                                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss
                                        of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense
                                        of mere tranquil existence, that I neglect my talents. I should be incapable of drawing
                                        a single stroke at the present moment; and yet.</p>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                        of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence
                                        in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                        that I neglect my talents. I should be incapable of drawing a single stroke at the
                                        present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-4" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                        of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence
                                        in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                        that I neglect my talents. I should be incapable of drawing a single stroke at the
                                        present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Donec quam felis</strong>

                                    <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among
                                        the stalks, and grow familiar with the countless indescribable forms of the insects
                                        and flies, then I feel the presence of the Almighty, who formed us in his own image,
                                        and the breath </p>

                                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss
                                        of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense
                                        of mere tranquil existence, that I neglect my talents. I should be incapable of drawing
                                        a single stroke at the present moment; and yet.</p>
                                </div>
                            </div>
                            <div id="tab-6" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                        of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence
                                        in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                        that I neglect my talents. I should be incapable of drawing a single stroke at the
                                        present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-7" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                        of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence
                                        in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                        that I neglect my talents. I should be incapable of drawing a single stroke at the
                                        present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-8" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                        of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence
                                        in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                        that I neglect my talents. I should be incapable of drawing a single stroke at the
                                        present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-9" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                        of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence
                                        in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                        that I neglect my talents. I should be incapable of drawing a single stroke at the
                                        present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-10" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                        of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence
                                        in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                        that I neglect my talents. I should be incapable of drawing a single stroke at the
                                        present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-11" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                        of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence
                                        in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                        that I neglect my talents. I should be incapable of drawing a single stroke at the
                                        present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-12" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                        of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence
                                        in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                        that I neglect my talents. I should be incapable of drawing a single stroke at the
                                        present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-13" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                        of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence
                                        in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                        that I neglect my talents. I should be incapable of drawing a single stroke at the
                                        present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('ManagementFile/backend/footer')
</div>

{{-- Content Right SideBar --}}
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
            {{-- Tab 1 --}}
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

            {{-- Tab 2 --}}
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
@endsection
 @endforeach
@section('scriptjs')
<!-- Flot -->
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.spline.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.pie.js') }}"></script>

<!-- Peity -->
<script src="{{ asset('admin/js/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('admin/js/demo/peity-demo.js') }}"></script>

<!-- GITTER -->
<script src="{{ asset('admin/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('admin/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Sparkline demo data  -->
<script src="{{ asset('admin/js/demo/sparkline-demo.js') }}"></script>

<!-- ChartJS-->
<script src="{{ asset('admin/js/plugins/chartJs/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/video/responsible-video.js') }}"></script>

<script>
    $(document).on('webkitfullscreenchange mozfullscreenchange fullscreenchange', function (e){
        $('body').hasClass('fullscreen-video') ? $('body').removeClass('fullscreen-video') : $('body').addClass('fullscreen-video')
    });

</script>
@endsection
