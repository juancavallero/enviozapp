<div class="form-group form-md-line-input select2-fixtop  {{ $errors->has($name) ? ' has-error' : 'has-success' }}">
        @if (isset($label))
            {{ Form::label($label, null, ['class' => 'control-label']) }}
        @else
            {{ Form::label($name, null, ['class' => 'control-label']) }}
        @endif
        @if (count($attributes)>0)
            {{ Form::select($name, $value, $default, array_merge(['name'=>$name, 'id' => $name, 'class' => 'select2'], $attributes)) }}
        @else
            {{ Form::select($name, $value, $default,['name'=>$name, 'id' => $name, 'class' => 'select2']) }}
        @endif
        @if ($errors->has($name))
            <span id="{{$name}}-error" class="help-block help-block-error">{{ $errors->first($name) }}</span>
        @endif
</div>


