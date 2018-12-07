@if (count($attributes)>0)
    @if (array_key_exists('disabled',$attributes))
        <div class="form-group form-md-line-input {{ $errors->has($name) ? ' has-error' : 'has-success' }}">
    @else
        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has($name) ? ' has-error' : 'has-success' }}">
    @endif
@else
    <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has($name) ? ' has-error' : 'has-success' }}">
@endif
    <div class="input-icon">
        @if (count($attributes)>0)
            {{ Form::textarea($name, $value, array_merge(['id' => $name, 'class' => 'form-control'], $attributes)) }}
        @else
            {{ Form::textarea($name, $value, ['id' => $name, 'class' => 'form-control']) }}
        @endif
        @if ($errors->has($name))
            <span id="{{$name}}-error" class="help-block help-block-error">{{ $errors->first($name) }}</span>
        @else
            <span id="{{$name}}-error" class="help-block">{{$attributes["help-block"]}}</span>
        @endif
        @if (isset($label))
            {{ Form::label($label, null, ['class' => 'control-label']) }}
        @else
            {{ Form::label($name, null, ['class' => 'control-label']) }}
        @endif

    </div>
</div>




