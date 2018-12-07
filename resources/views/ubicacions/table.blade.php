<table class="table" id="index_table">
    <thead class="tabla_cabecera">
        <tr>
            <th>Latitud</th>
        <th>Longitud</th>
        <th>Idusuario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Latitud</th>
        <th>Longitud</th>
        <th>Idusuario</th>
            <th></th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($ubicacions as $ubicacion)
        <tr class="odd gradeX">
            <td>{!! $ubicacion->latitud !!}</td>
            <td>{!! $ubicacion->longitud !!}</td>
            <td>{!! $ubicacion->idUsuario !!}</td>
            <td>
                {!! Form::open(['route' => ['ubicacions.destroy', $ubicacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ubicacions.show', [$ubicacion->id]) !!}" class='btn btn-xs green popovers btntablas' data-container="body" data-trigger="hover" data-placement="bottom" data-content="Consultar"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ubicacions.edit', [$ubicacion->id]) !!}" class='btn btn-xs blue popovers btntablas' data-container="body" data-trigger="hover" data-placement="bottom" data-content="Editar"><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs popovers btn-eliminar btntablas','data-container' => 'body','data-trigger' => 'hover', 'data-placement' => 'bottom','data-content' => 'Eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>