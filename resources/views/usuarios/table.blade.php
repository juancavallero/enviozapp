<table class="table" id="index_table">
    <thead class="tabla_cabecera">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>E-mail</th>
        <th>Rol</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>E-mail</th>
        <th>Rol</th>
        <th></th>
    </tr>
    </tfoot>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr class="odd gradeX">
            <td>{!! $usuario->nombre !!}</td>
            <td>{!! $usuario->apellido !!}</td>
            <td>{!! $usuario->email !!}</td>
            <td>{!! $usuario->rol->nombre!!}</td>
            <td>
                {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('usuarios.show', [$usuario->id]) !!}"
                       class='btn btn-xs green popovers btntablas' data-container="body" data-trigger="hover"
                       data-placement="bottom" data-content="Consultar"><i class="glyphicon glyphicon-eye-open"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs popovers btn-eliminar btntablas','data-container' => 'body','data-trigger' => 'hover', 'data-placement' => 'bottom','data-content' => 'Eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>