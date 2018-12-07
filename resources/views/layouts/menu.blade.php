<li class="{!! Request::is('home*') ? 'active' : '' !!}">
    <a href="{!! url('/home') !!}" class="nav-link nav-toggle">
        <i class="icon-home"></i>
        <span class="title">Home</span>
    </a>
</li>

<li class="{!! Request::is('usuarios*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('usuarios.index') !!}">
        <i class="fa fa-users"></i>
        <span  class="title">Usuarios</span></a>
</li>



<li class="{!! Request::is('ubicacions*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('ubicacions.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Ubicacions</span></a>
</li>

