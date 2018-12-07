<div class="row">
    <!-- Nombre Field -->
    <div class="col-md-6">
        {{ Form::mdText('Nombre',  $usuario->nombre, ['disabled' => 'disabled', 'help-block' => 'Nombre', 'icon-class' => 'fa fa-caret-right']) }}
    </div>

    <!-- Apellido Field -->
    <div class="col-md-6">
        {{ Form::mdText('Apellido',  $usuario->apellido, ['disabled' => 'disabled', 'help-block' => 'Apellido', 'icon-class' => 'fa fa-caret-right']) }}
    </div>
</div>

<div class="row">
    <!-- E-Mail Field -->
    <div class="col-md-6">
        {{ Form::mdText('Email',  $usuario->email, ['disabled' => 'disabled', 'help-block' => 'E-mail', 'icon-class' => 'fa fa-caret-right']) }}
    </div>


    <div class="col-md-6">
        {{ Form::mdText('Contraseña', "**************", ['disabled' => 'disabled', 'help-block' => 'E-mail', 'icon-class' => 'fa fa-caret-right']) }}
    </div>
</div>

<div class="row">
    <!-- Ciudad Field -->
    <div class="col-md-6">
        {{ Form::mdText('Ciudad',  $usuario->ciudad->nombre, ['disabled' => 'disabled', 'help-block' => 'Ciudad', 'icon-class' => 'fa fa-caret-right']) }}
    </div>

    <!-- Rol Field -->
    <div class="col-md-6">
        {{ Form::mdText('Rol',  $usuario->rol->nombre, ['disabled' => 'disabled', 'help-block' => 'Rol', 'icon-class' => 'fa fa-caret-right']) }}
    </div>
</div>

<div class="row">
    <!-- Created At Field -->
    <div class="col-md-6">
        {{ Form::mdText('Creación',  $usuario->created_at, ['disabled' => 'disabled', 'help-block' => 'Creación', 'icon-class' => 'fa fa-caret-right']) }}
    </div>

    <!-- Updated At Field -->
    <div class="col-md-6">
        {{ Form::mdText('Última Modificación',  $usuario->updated_at, ['disabled' => 'disabled', 'help-block' => 'Última Modificación', 'icon-class' => 'fa fa-caret-right']) }}
    </div>
</div>

