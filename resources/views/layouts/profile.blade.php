<!-- BEGIN TOP NAVIGATION MENU -->
<div class="top-menu">
    <ul class="nav navbar-nav pull-right">
        <li class="dropdown dropdown-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
               data-close-others="true">
                <i class="fa fa-user"></i>
                @if(Auth::user())
                    <span class="username username-hide-on-mobile"> {{Auth::user()->nombre . ' ' . Auth::user()->apellido}} </span>
                @else
                    <span class="username username-hide-on-mobile"> No logueado</span>
                @endif
                <i class="fa fa-angle-down"></i>
            </a>
            @if(Auth::user())
            <ul class="dropdown-menu dropdown-menu-default">
                <li>
                    <a href="{{URL::to('logout')}}">
                        <i class="icon-key"></i> Cerrar Session </a>
                </li>
            </ul>
            @endif
        </li>
    </ul>
</div>
<!-- END TOP NAVIGATION MENU -->