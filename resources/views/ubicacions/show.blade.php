@extends('layouts.app')

@section('content')
     <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="fa fa-search font-green-haze"></i>
                    <span class="caption-subject bold uppercase">Consultar Ubicacion N° {!!$ubicacion->id!!}</span>
                </div>
            </div>
            <div>
                @include('metronic-templates::common.errors')
            </div>
            <div class="portlet-body form">
                <div class="row" style="padding-left: 20px">
                   @include('ubicacions.show_fields')
                   <a href="{!! route('ubicacions.index') !!}" class="btn grey-cascade show-volver">Volver</a>
                </div>
            </div>
        </div>
@endsection
