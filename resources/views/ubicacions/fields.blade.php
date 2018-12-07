<!-- Latitud Field -->
<div class="col-md-6">
    {{ Form::mdText('latitud', null, ['help-block' => 'Latitud', 'icon-class' => 'fa fa-caret-right']) }}
</div>

<!-- Longitud Field -->
<div class="col-md-6">
    {{ Form::mdText('longitud', null, ['help-block' => 'Longitud', 'icon-class' => 'fa fa-caret-right']) }}
</div>

<!-- Idusuario Field -->
<div class="col-md-6">
    {{ Form::mdText('idUsuario', null, ['help-block' => 'Idusuario', 'icon-class' => 'fa fa-caret-right']) }}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-10">
            {!! Form::submit('Guardar', ['class' => 'btn green-meadow btn-oneclick']) !!}
            <a href="{!! route('ubicacions.index') !!}" class="btn grey-cascade">Cancelar</a>
        </div>
    </div>
</div>
