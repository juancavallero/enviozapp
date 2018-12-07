<!-- Id Field -->
<div class="col-md-6">
    {{ Form::mdText('id',  $ubicacion->id, ['disabled' => 'disabled', 'help-block' => 'Id', 'icon-class' => 'fa fa-caret-right']) }}
</div>

<!-- Latitud Field -->
<div class="col-md-6">
    {{ Form::mdText('latitud',  $ubicacion->latitud, ['disabled' => 'disabled', 'help-block' => 'Latitud', 'icon-class' => 'fa fa-caret-right']) }}
</div>

<!-- Longitud Field -->
<div class="col-md-6">
    {{ Form::mdText('longitud',  $ubicacion->longitud, ['disabled' => 'disabled', 'help-block' => 'Longitud', 'icon-class' => 'fa fa-caret-right']) }}
</div>

<!-- Idusuario Field -->
<div class="col-md-6">
    {{ Form::mdText('idUsuario',  $ubicacion->idUsuario, ['disabled' => 'disabled', 'help-block' => 'Idusuario', 'icon-class' => 'fa fa-caret-right']) }}
</div>

<!-- Created At Field -->
<div class="col-md-6">
    {{ Form::mdText('created_at',  $ubicacion->created_at, ['disabled' => 'disabled', 'help-block' => 'Created At', 'icon-class' => 'fa fa-caret-right']) }}
</div>

<!-- Updated At Field -->
<div class="col-md-6">
    {{ Form::mdText('updated_at',  $ubicacion->updated_at, ['disabled' => 'disabled', 'help-block' => 'Updated At', 'icon-class' => 'fa fa-caret-right']) }}
</div>

