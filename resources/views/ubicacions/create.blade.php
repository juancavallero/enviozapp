@extends('layouts.app')

@section('content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-green-haze">
                <i class="fa fa-plus font-green-haze"></i>
                <span class="caption-subject bold uppercase">Agregar un Ubicacion</span>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>

        @if(Session::has('msg'))
            <div class="alert alert-{{Session::get('status')}} alert-dismissable">{{Session::get('msg')}}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            </div>
        @endif

        <div class="portlet-body form">
            <div class="row">
                {!! Form::open(['route' => 'ubicacions.store']) !!}

                    @include('ubicacions.fields')

                 {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
