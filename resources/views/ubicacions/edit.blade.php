@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-green-haze">
            <i class="fa fa-edit font-green-haze"></i>
            <span class="caption-subject bold uppercase">Modificar Ubicacion N° {!!$ubicacion->id!!}</span>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($ubicacion, ['route' => ['ubicacions.update', $ubicacion->id], 'method' => 'patch']) !!}

            @include('ubicacions.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection