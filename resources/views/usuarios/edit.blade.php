@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-green-haze">
            <i class="fa fa-edit font-green-haze"></i>
            <span class="caption-subject bold uppercase">Modificar Usuario N° {!!$usuario->id!!}</span>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id], 'method' => 'patch']) !!}
            {{ Form::hidden('id') }}
            @include('usuarios.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection