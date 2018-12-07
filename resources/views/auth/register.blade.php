<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
@include('layouts/head')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{asset('assets/pages/css/login-5.min.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->


<body class="login">


}<div class="container">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-md-7 col-lg-5 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 style="margin-bottom:25px;">Registrate <span style="font-size: 12px;text-transform: uppercase;"> y poné tu inmobiliaria en marcha!</span></h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="col-md-12">
                            {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}
                            {{ Form::mdText('nombre', null, ['placeholder' => 'Nombre', 'icon-class' => 'fa fa-user'],'Nombre y Apellido') }}
                        </div>

                        <div class="col-md-12">
                            {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}
                            {{ Form::mdText('email', null, ['type' => 'email', 'placeholder' => 'Correo electrónico', 'icon-class' => 'fa fa-envelope'],'E-mail') }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::mdText('password', null, ['type' => 'password', 'placeholder' => 'Contraseña',
                            'icon-class' => 'fa fa-key'],'Contraseña') }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::mdText('password_confirmation', null, ['type' => 'password', 'placeholder' => 'Confirmar Contraseña',
                            'icon-class' => 'fa fa-key'],'Confirmar Contraseña') }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::mdSelect2('idProvincia', $provincias, ['placeholder' => 'Provincia', 'class' =>'select2 select2-chain', 'data-child'=>'idCiudad', 'data-childurl' => '/provincias/{id}/ciudades',
                            'icon-class' => 'fa fa-key'],'Provincia') }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::mdSelect2('idCiudad', [null => null], ['placeholder' => 'Ciudad',
                            'icon-class' => 'fa fa-key'],'Ciudad') }}
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-image-register col-sm-4 col-md-5 col-lg-5">

            <div>
                <img src="{{asset('assets/images/logo-h.png')}}" width="200" alt="" />

                <h3>Somos una herramienta para que tus inmuebles encuentren pareja.</h3>
                <p><i class="ion-ios-checkmark-empty"></i><span>Los interesados obtendran toda tu informacion de contacto.</span></p>
                <p><i class="ion-ios-checkmark-empty"></i><span>Hacemos que todas tus publicaciones llegen al indicado.</span></p>
                <p><i class="ion-ios-checkmark-empty"></i><span>Promociona tus publicaciones en las redes sociales desde tu panel de control.</span></p>
                <p><i class="ion-ios-checkmark-empty"></i><span>Conoce las estadisticas de visita de tus anuncios.</span></p>

            </div>
        </div>
    </div>
</div>
<!-- END : LOGIN PAGE 5-2 -->
@include('layouts/scripts')
<!--[if lt IE 9]>
<script src="{{asset('assets/global/respond.min.js')}}>"</script>
<script src="{{asset('assets/global/plugins/excanvas.min.js')}}"></script>
<script src="{{asset('assets/global/ie8.fix.min.js')}}"></script>
<![endif]-->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/backstretch/jquery.backstretch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/login-5.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

</body>

</html>