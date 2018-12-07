<div class="form-group form-md-line-input form-md-floating-label {{ $errors->has($name) ? ' has-error' : 'has-success' }}">
    <div class="input-icon">
        @if (isset($label))
            {{ Form::label($label, null, ['class' => 'control-label']) }}
        @else
            {{ Form::label($name, null, ['class' => 'control-label']) }}
        @endif
        <input type="checkbox" class="form-control make-switch" checked data-on-color="primary" data-off-color="info" data-on-text="Si" data-off-text="No">
        @if ($errors->has($name))
            <span id="nombre-error" class="help-block help-block-error">{{ $errors->first($name) }}</span>
        @else
            <span class="help-block">{{$attributes["help-block"]}}</span>
        @endif

    </div>
</div>


