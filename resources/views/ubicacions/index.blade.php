@extends('layouts.app')

@section('content')
    @include('flash::message')
    <div class="portlet box blue-hoki">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>Ubicacions
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>
                <div class="btn-group">
                    <a class="config dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-print printicon"></i>
                    </a>
                    <ul class="dropdown-menu pull-right" id="index_table_tools">
                        <li>
                            <a href="javascript:;" data-action="0" class="tool-action">
                                <i class="fa fa-print"></i> Imprimir
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-action="2" class="tool-action">
                                <i class="fa fa-file-pdf-o"></i> Exportar a PDF
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-action="3" class="tool-action">
                                <i class="fa fa-file-excel-o"></i> Exportar a Excel
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="botonCreate">
                <div class="btn-group">
                    <a class="btn green-meadow" href="{!! route('ubicacions.create') !!}">
                        Agregar
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="portlet-body">
            <div class="table-responsive">
                @include('ubicacions.table')
            </div>
        </div>
    </div>
@endsection




