<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle m-t-md" style="height: 70px; width: 70px" src="{{ asset('admin/img/profile_big.jpg') }}" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                     </span> <span class="text-muted text-xs block">Art Director</span> </span> </a>
                </div>
                <div class="logo-element">
                    ICS
                </div>
            </li>
            <li class="special_link @if(url('/Dashboard') == request()->url()) active @else '' @endif  treeview">
                <a href="{{ url('Dashboard')}}"><i class="fa fa-database fa-1x"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="@if((url('CC_Advert') || url('Others')) == request()->url()) active @else '' @endif  treeview">
                <a href="#"><i class="fa fa-slack fa-1x"></i> <span class="nav-label">Course Category</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#" id="damian">Selected Course<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li class="@if(url('/CC_Advert') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_Advert')}}" class="fa fa-american-sign-language-interpreting"> Advertising</a>
                            </li>
                            <li class="@if(url('/CC_Architecture') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_Architecture')}}">Architecture</a>
                            </li>
                            <li class="@if(url('/CC_Crafts') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_Crafts')}}">Crafts</a>
                            </li>
                            <li class="@if(url('/CC_Software') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_Software')}}">Software</a>
                            </li>
                            <li class="@if(url('/CC_Design') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_Design')}}">Design</a>
                            </li>
                            <li class="@if(url('/CC_Fashion') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_Fashio')}}">Fashion</a>
                            </li>
                            <li class="@if(url('/CC_IGame') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_IGame')}}">Interactive Games</a>
                            </li>
                            <li class="@if(url('/CC_Music') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_Music')}}">Music</a>
                            </li>
                            <li class="@if(url('/CC_Performance') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_Performance')}}">Performance Art</a>
                            </li>
                            <li class="@if(url('/CC_Publishing') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_Publishing')}}">Publishing & Printing</a>
                            </li>
                            <li class="@if(url('/CC_RnD') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_RnD')}}">R n D</a>
                            </li>
                            <li class="@if(url('/CC_Television') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_Television')}}">Television & Radio</a>
                            </li>
                            <li class="@if(url('/CC_Video') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_Video')}}">Video, Film, Photography</a>
                            </li>
                        </ul>
                    </li>
                    <li class="@if(url('/Others') == request()->url()) active @else '' @endif  treeview">
                        <a href="{{ url('Others')}}">Others</a>
                    </li>
                </ul>
            </li>
            <li class="@if(url('/Forum') == request()->url()) active @else '' @endif  treeview">
                <a href="{{ url('Forum')}}"><i class="fa fa-comments-o fa-1x"></i> <span class="nav-label">Forum</span>  </a>
            </li>
            <li class="@if(url('/Setting') == request()->url()) active @else '' @endif  treeview">
                <a href="{{ url('Setting')}}"><i class="fa fa-cog fa-1x"></i> <span class="nav-label">Setting</span>  </a>
            </li>
            <li class="@if(url('/Event') == request()->url()) active @else '' @endif  treeview">
                <a href="{{ url('Others')}}"><i class="fa fa-cog fa-1x"></i> <span class="nav-label">Event</span>  </a>
            </li>
            <li class="@if(url('/Logout') == request()->url()) active @else '' @endif  treeview">
                <a href="{{ url('Logout')}}"><i class="fa fa-sign-out fa-1x"></i> <span class="nav-label">LogOut</span>  </a>
            </li>
        </ul>
    </div>
</nav>