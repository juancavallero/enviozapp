@extends('web.layouts.web')
@section('title', 'Asociados')
@section('description', 'Aclisa')
@section('content')

    <!-- Sub Page Banner
			============================================= -->
<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">

    <div class="overlay"></div>

    <div class="container">
        <h1 class="entry-title">404 Error</h1>
        <p>No tiene permiso para acceder a este link.</p>
    </div>

</section>



<!-- Sub Page Content
============================================= -->
<div id="sub-page-content" class="clearfix">

    <div class="container">

        <div class="error-text">

            <p>
                No ha iniciado sesión o su usuario no tiene los permisos suficientes</p>
            <a href="{{route('homeweb')}}" class="btn btn-default btn-rounded">Volver al inicio</a>

        </div>

    </div>

</div><!--end sub-page-content-->



<div class="colourfull-row"></div>

@endsection
