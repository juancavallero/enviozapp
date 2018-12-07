<!DOCTYPE html>

<html lang="en" class="no-js">

@include('web/layouts/head')

<body class="fixed-header bg-lineas-diagonales">

@include('web/layouts/header')
<!-- =========================
             PRELOADER
        ============================== -->
<div class="preloader">
    <div class="loader-container">
        {{--<div class="text-logo">Cargando</div>--}}
        <div class="signal"></div>
    </div>
</div>

@yield('content')

@include('web/layouts/scripts')

</body>

</html>