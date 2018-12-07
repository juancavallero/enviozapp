<div class="row">
    <!-- Nombre Field -->
    <div class="col-md-6">
        {{ Form::mdText('nombre', null, ['help-block' => 'Nombre', 'icon-class' => 'fa fa-caret-right'],'Nombre *') }}
    </div>

    <!-- Apellido Field -->
    <div class="col-md-6">
        {{ Form::mdText('apellido', null, ['help-block' => 'Apellido', 'icon-class' => 'fa fa-caret-right'],'Apellido *') }}
    </div>
</div>
<div class="row">
    <!-- E-mail Field -->
    <div class="col-md-6">
        {{ Form::mdText('email', null, ['help-block' => 'Nombre', 'icon-class' => 'fa fa-caret-right'],'E-mail *') }}
    </div>

    <div class="col-md-6">

    </div>
</div>
<div class="row">
    <!-- Password Field -->
    <div class="col-md-6">
        {{ Form::mdText('password', null, ['type' => 'password', 'help-block' => 'Password', 'icon-class' => 'fa fa-key'],'Contraseña *') }}
    </div>
    <!-- Password COnfirm Field -->
    <div class="col-md-6">
        {{ Form::mdText('password_confirmation', null, ['type' => 'password', 'help-block' => 'Confirmar Password', 'icon-class' => 'fa fa-key'], 'Confirmar contraseña') }}
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-10">
            {!! Form::submit('Guardar', ['class' => 'btn green-meadow btn-oneclick']) !!}
            <a href="{!! route('usuarios.index') !!}" class="btn grey-cascade">Cancelar</a>
        </div>
    </div>
</div>
