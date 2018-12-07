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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 content-reset" id="">
            <div class="panel panel-default panel-reset" id="">
                <div class="panel-heading" id="titulo-reset">Resetear Contraseña</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label">E-Mail:</label>

                            <div class="">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-group-formateado">

                            <div class="col-sm-12 register-formateado">

                                <button type="submit" class="btn green-meadow"
                                        style="margin-top: 20px;float: right;margin-left: 20px;padding: 9px;">
                                    <i style="margin-right: 5px" class="fa fa-btn fa-envelope"></i> Resetear contraseña
                                </button>
                                <a style="float: right;margin-top: 20px;padding: 9px" type="button"
                                   class="btn grey-cascade" href="{{url('/web/servicios') }}">
                                    <i style="margin-right: 5px" class="fa fa-arrow-left"></i> Volver
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
