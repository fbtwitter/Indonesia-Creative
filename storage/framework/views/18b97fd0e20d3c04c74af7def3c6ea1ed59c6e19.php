<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle m-t-md" style="height: 70px; width: 70px" src="<?php echo e(asset('admin/img/profile_big.jpg')); ?>" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Reza Fauzi Augusdi</strong>
                     </span> <span class="text-muted text-xs block">Web Developer</span> </span> </a>
                </div>
                <div class="logo-element">
                    ICS
                </div>
            </li>
            <li class="special_link <?php if(url('/Dashboard') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                <a href="<?php echo e(url('Dashboard')); ?>"><i class="fa fa-database fa-1x"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="<?php if(url('Others') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                <a href="#"><i class="fa fa-slack fa-1x"></i> <span class="nav-label">Course Category</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#" id="damian">Selected Course<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li class="<?php if(url('/CC_Advert') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_Advert')); ?>" class="fa fa-american-sign-language-interpreting"> Advertising</a>
                            </li>
                            <li class="<?php if(url('/CC_Architecture') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_Architecture')); ?>">Architecture</a>
                            </li>
                            <li class="<?php if(url('/CC_Crafts') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_Crafts')); ?>">Crafts</a>
                            </li>
                            <li class="<?php if(url('/CC_Software') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_Software')); ?>">Software</a>
                            </li>
                            <li class="<?php if(url('/CC_Design') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_Design')); ?>">Design</a>
                            </li>
                            <li class="<?php if(url('/CC_Fashion') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_Fashion')); ?>">Fashion</a>
                            </li>
                            <li class="<?php if(url('/CC_IGame') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_IGame')); ?>">Interactive Games</a>
                            </li>
                            <li class="<?php if(url('/CC_Music') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_Music')); ?>">Music</a>
                            </li>
                            <li class="<?php if(url('/CC_Performance') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_Performance')); ?>">Performance Art</a>
                            </li>
                            <li class="<?php if(url('/CC_Publishing') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_Publishing')); ?>">Publishing & Printing</a>
                            </li>
                            <li class="<?php if(url('/CC_RnD') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_RnD')); ?>">R n D</a>
                            </li>
                            <li class="<?php if(url('/CC_Television') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_Television')); ?>">Television & Radio</a>
                            </li>
                            <li class="<?php if(url('/CC_Video') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                                <a href="<?php echo e(url('CC_Video')); ?>">Video, Film, Photography</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if(url('/Others') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                        <a href="<?php echo e(url('Others')); ?>"><span class="nav-label">Others</span><span class="label label-warning pull-right">14</span></a>
                    </li>
                </ul>
            </li>
            <li class="<?php if(url('/Forum') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                <a href="<?php echo e(url('Forum')); ?>"><i class="fa fa-comments-o fa-1x"></i> <span class="nav-label">Forum</span>  </a>
            </li>
            <li class="<?php if(url('/Setting') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                <a href="<?php echo e(url('Setting')); ?>"><i class="fa fa-cog fa-1x"></i> <span class="nav-label">Setting</span>  </a>
            </li>
            <li class="<?php if(url('/Event') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                <a href="<?php echo e(url('Others')); ?>"><i class="fa fa-globe fa-1x"></i> <span class="nav-label">Event</span><span class="label label-info pull-right">NEW</span></a>
            </li>
            <li class="<?php if(url('/Logout') == request()->url()): ?> active <?php else: ?> '' <?php endif; ?>  treeview">
                <a href="<?php echo e(url('Logout')); ?>"><i class="fa fa-sign-out fa-1x"></i> <span class="nav-label">LogOut</span>  </a>
            </li>
        </ul>
    </div>
</nav>
