<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle m-t-md" style="height: 70px; width: 70px" src="{{$data->FOTO_PROFIL}}"onerror="this.src='admin/img/default.jpg'" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{$data->NAMA_DEPAN}}</strong>
                    </span> <span class="text-muted text-xs block">{{$status}}</span> </span> </a>
                </div>
                <div class="logo-element">
                    ICS
                </div>
            </li>
            <li class="special_link @if(url('/Dashboard') == request()->url()) active @else '' @endif  treeview">
                <a href="{{ url('Dashboard')}}"><i class="fa fa-database fa-1x"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="@if((url('Others') == request()->url()) || (url('CC_Advert') == request()->url())) active @else '' @endif  treeview">
                <a href="#"><i class="fa fa-slack fa-1x"></i> <span class="nav-label">Course Category</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#" id="damian">Selected Course<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                          @php
                            $i=1;
                          @endphp
                          @foreach ($daftar as $d)
                            @if(isset($join))
                              @if(in_array($i, $join))
                            <li class="@if(url('/CC_$d->NAMA_COURSE') == request()->url()) active @else '' @endif  treeview">
                                <a href="{{ url('CC_'.$d->NAMA_COURSE)}}">{{$d->NAMA_COURSE}}</a>
                            </li>
                              @endif
                            @endif
                            @php
                              $i++
                            @endphp
                          @endforeach

                        </ul>
                    </li>
                    <li class="@if(url('/Others') == request()->url()) active @else '' @endif  treeview">
                        <a href="{{ url('Others')}}"><span class="nav-label">Others</span><span class="label label-warning pull-right">14</span></a>
                    </li>
                </ul>
            </li>
            <li class="@if(url('/Forum') == request()->url()) active @else '' @endif  treeview">
                <a href="{{ url('Forum')}}"><i class="fa fa-comments-o fa-1x"></i> <span class="nav-label">Forum</span>  </a>
            </li>
            <li class="@if(url('/Setting') == request()->url()) active @else '' @endif  treeview">
                <a href="{{ url('Setting')}}"><i class="fa fa-cog fa-1x"></i> <span class="nav-label">Setting</span>  </a>
            </li>
            {{-- <li class="@if(url('/Event') == request()->url()) active @else '' @endif  treeview">
                <a href="{{ url('Event')}}"><i class="fa fa-globe fa-1x"></i> <span class="nav-label">Event</span><span class="label label-info pull-right">NEW</span></a>
            </li> --}}
            <li class="@if(url('/logout') == request()->url()) active @else '' @endif  treeview">
                <a href="{{ url('logout')}}"><i class="fa fa-sign-out fa-1x"></i> <span class="nav-label">Logout</span>  </a>
            </li>
        </ul>
    </div>
</nav>
