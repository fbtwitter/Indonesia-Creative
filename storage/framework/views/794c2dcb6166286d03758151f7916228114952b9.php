<?php $__env->startSection('navbar'); ?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle m-t-md" style="height: 70px; width: 70px" src="<?php echo e(asset('admin/img/profile_big.jpg')); ?>" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                     </span> <span class="text-muted text-xs block">Art Director</span> </span> </a>
                </div>
                <div class="logo-element">
                    ICS
                </div>
            </li>
            <li class="special_link">
                <a href="index.html"><i class="fa fa-database fa-1x"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="active">
                <a href="dashboard.html"><i class="fa fa-slack fa-1x"></i> <span class="nav-label">Course Category</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#" id="damian">Selected Course<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="" class="fa fa-american-sign-language-interpreting"> Advertising</a></li>
                            <li><a href="dashboard_3.html">Architecture</a></li>
                            <li><a href="dashboard_3.html">Crafts</a></li>
                            <li><a href="dashboard_3.html">Software</a></li>
                            <li><a href="dashboard_3.html">Design</a></li>
                            <li><a href="dashboard_3.html">Fashion</a></li>
                            <li><a href="dashboard_3.html">Interactive Games</a></li>
                            <li><a href="dashboard_3.html">Music</a></li>
                            <li><a href="dashboard_3.html">Performance Art</a></li>
                            <li><a href="dashboard_3.html">Publishing & Printing</a></li>
                            <li><a href="dashboard_3.html">R n D</a></li>
                            <li><a href="dashboard_3.html">Television & Radio</a></li>
                            <li><a href="dashboard_3.html">Video, Film, Photography</a></li>
                        </ul>
                    </li>
                    <li><a href="dashboard_2.html">Others</a></li>
                </ul>
            </li>
            <li>
                <a href="metrics.html"><i class="fa fa-comments-o fa-1x"></i> <span class="nav-label">Forum</span>  </a>
            </li>
            <li>
                <a href="metrics.html"><i class="fa fa-cog fa-1x"></i> <span class="nav-label">Setting</span>  </a>
            </li>
            <li>
                <a href="metrics.html"><i class="fa fa-cog fa-1x"></i> <span class="nav-label">Event</span>  </a>
            </li>
            <li>
                <a href="metrics.html"><i class="fa fa-sign-out fa-1x"></i> <span class="nav-label">LogOut</span>  </a>
            </li>
        </ul>
    </div>
</nav>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>