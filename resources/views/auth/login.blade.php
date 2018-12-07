<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
@include('layouts/head')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{asset('assets/pages/css/login-5.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->


<body class="login">
<!-- BEGIN : LOGIN PAGE 5-2 -->
<div class="user-login-5">
    <div class="row bs-reset">
        <div class="col-md-6 login-container bs-reset">
            <img class="login-logo login-6" src="{{asset('web/images/logo.png')}}" style="margin-top: 10%;"/>
            <div class="login-content">

                <div class="portlet-body">
                    <div class="row">
                        {{--<h1>Iniciar Sesión</h1>--}}
                        <p> ¡Bienvenido a PELLFOOD! </p>
                        {!!Form::open(['url' => ['/login'], 'class' => "login-form"])!!}
                        <div class="row">
                            <div class="col-md-6">
                                {{ Form::mdText('email', null, ['type' => 'email', 'placeholder' => 'Correo electrónico', 'icon-class' => 'fa fa-envelope']) }}
                            </div>
                            <div class="col-md-6">
                                {{ Form::mdText('password', null, ['type' => 'password', 'placeholder' => 'Contraseña',
                                'icon-class' => 'fa fa-key']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="rememberme mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" name="remember" value="1"/> Recordarme
                                    <span></span>
                                </label>
                            </div>
                            <div class="col-sm-9 text-right">
                                <div class="forgot-password">
                                    <a href="{{ url('/password/reset') }}">¿Olvidaste tu contraseña?</a>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                {!! Form::submit('Ingresar', ['class' => 'btn green-meadow','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>


            </div>
            <div class="login-footer">
                <div class="row bs-reset">
                    <div class="col-xs-5 bs-reset">
                        <ul class="login-social">
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-7 bs-reset">
                        <div class="login-copyright text-right">
                            <p>Copyright &copy; Innovus 2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 bs-reset">
            <div class="login-bg">
            </div>
        </div>
    </div>
</div>
<!-- END : LOGIN PAGE 5-2 -->
@include('layouts/scripts')
<!--[if lt IE 9]>
<script src="{{asset('assets/global/respond.min.js')}}>"</script>
<
script
src = "{{asset('assets/global/plugins/excanvas.min.js')}}" ></script>
<script src="{{asset('assets/global/ie8.fix.min.js')}}"></script>
<![endif]-->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/backstretch/jquery.backstretch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/login-5.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

</body>

</html>