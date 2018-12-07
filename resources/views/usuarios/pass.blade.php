@extends('layouts.app')
@section('content')
    @if(Session::has('msg'))
        <div class="alert alert-{{Session::get('status')}}">{{Session::get('msg')}}</div>
    @endif
    @if(Auth::user()->forzarCambioClave)
        <div class="alert alert-info">En tu primer uso, te recomendamos que cambies la contraseña que ha generado el
            sistema
        </div>
    @endif
    <div class="">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="titular-principal">Password</h2>
            </div>
        </div>
        {!! BootForm::openHorizontal($sizes)->action(URL::to('pass')) !!}
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="panel-body">
                    <div class="seccion-formulario">

                        <h2>Cambia tu Password actual

                        <span class="popover-primary pass" data-html="true"
                              data-toggle="popover"
                              data-trigger="hover" data-placement="top"
                              data-content="El password debe contener: <br />- Un mínimo de 8 caractéres <br />- Al menos un número <br />- Una letra mayúscula <br />-  Una minúscula'"
                              data-original-title="Información"><i class="fa fa-question-circle"></i>
                        </span>
                        </h2>

                        {!!BootForm::password('Password Actual','old_password')!!}
                        {!!BootForm::password('Password','password')!!}
                        {!!BootForm::password('Confirmar Password','password_confirmation')!!}

                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-4 cont-sticky">
                <div id="sticky-anchor"></div>
                <div id="sticky">
                    <div class="ventana-aviso ventana-aviso-comun">
                        <i class="entypo-thumbs-up icono-aviso icono-aviso-comun"></i>

                        <h2>Vamos a empezar!</h2>

                        <p>El password debe contener:<br/>
                            - Un mínimo de 8 caractéres<br/>
                            - Al menos un número<br/>
                            - Una letra mayúscula <br/>
                            - Una minúscula</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="cont-botones">
                <div class="col-sm-offset-0 col-sm-8">
                    <button class="btn btn-green btn-icon btn-lg" type="submit">Guardar Cambios
                        <i class="entypo-check"></i>
                    </button>
                    <a href="{{URL::to('perfil')}}" class="btn btn-default btn-icon btn-lg">Volver
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </div>
            </div>
        </div>
        {!!BootForm::close()!!}
    </div>


@stop