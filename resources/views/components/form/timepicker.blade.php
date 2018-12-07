<div class="form-group form-md-line-input {{ $errors->has($name) ? ' has-error' : 'has-success' }}">
    <div class="input-icon">
        @if (count($attributes)>0)
            {{ Form::text($name, $value, array_merge(['id' => str_replace('[]','',$name), 'class' => 'form-control timepicker timepicker-24'], $attributes)) }}
        @else
            {{ Form::text($name, $value, ['id' => str_replace('[]','',$name), 'class' => 'form-control timepicker timepicker-24']) }}
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
         <i class="fa fa-clock-o"></i>

    </div>
</div>




