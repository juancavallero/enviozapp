@extends('web.layouts.web')
@section('title', 'Institucional')
@section('description', 'Aclisa')
@section('content')


    <!-- Document Wrapper
============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Sub Page Banner
        ============================================= -->
        <section class="sub-page-banner-contacto text-center">

            <div class="overlay"></div>


        </section>


        <!-- Sub Page Content
        ============================================= -->
        <div id="sub-page-content" class="clearfix">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">
                        <h2 class="light bordered"><span>Ubicaciones de Usuarios</span></h2>
                        {!! Form::open(['url' => 'getUbicaciones']) !!}
                        {!! Form::select('usuario',$usuarios,null,['id'=>'usuario','class'=>'form-control']) !!}
                        {!! Form::submit('Buscar', ['class' => 'btn green-meadow btn-oneclick']) !!}
                        {!! Form::close() !!}
                        <br>
                        <br>
                        <br>
                        <div class="map" id="map"></div>

                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection

<script type="text/javascript">
    //    console.log("algo");
    var ubicaciones = [];
            @foreach($ubicaciones as $ubicacion)
    var latitud = "<?php echo $ubicacion->latitud?>";
    var longitud = "<?php echo $ubicacion->longitud?>";
    var nombre = "<?php echo $ubicacion->user->nombre?>";
    var apellido = "<?php echo $ubicacion->user->apellido?>";
    var direccion = "<?php echo $ubicacion->user->direccion?>";
    ubica = new Object();
    ubica['latitud'] = latitud;
    ubica['longitud'] = longitud;
    ubica['nombre'] = nombre;
    ubica['apellido'] = apellido;
    ubica['direccion'] = direccion;
    ubicaciones.push(ubica);
    @endforeach


</script>
@section('scripts')
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDC4IMJMfp61FpNcCg_bQgdSQE9JD5q9c0"
            type="text/javascript"></script>
    <script src="{{asset('web/js/contact.js')}}" type="text/javascript"></script>
    <script src="{{asset('web/js/gmaps.js')}}" type="text/javascript"></script>

@endsection
