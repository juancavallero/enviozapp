<div class="form-group {{ $errors->has($name) ? ' has-error' : '' }}">
    @if (isset($label))
        <label class="control-label">{{$label}}</label>
    @else
        <label class="control-label">{{$name}}</label>
    @endif

    <div class="input-icon">
        <i class="{{$attributes["icon-class"]}}"></i>
        @if (count($attributes)>0)
            @if (array_key_exists('type',$attributes))
                @if ($attributes['type']=='password')
                    {{ Form::password($name, array_merge(['id' => str_replace('[]','',$name), 'class' => 'form-control'], $attributes)) }}
                @elseif ($attributes['type']=='email')
                    {{ Form::email($name, $value, array_merge(['id' => str_replace('[]','',$name), 'class' => 'form-control'], $attributes)) }}
                @elseif ($attributes['type']=='date')
                    {{ Form::date($name, $value, array_merge(['id' => str_replace('[]','',$name), 'class' => 'form-control'], $attributes)) }}
                @else
                    {!! Form::number($name, $value, ['id' => str_replace('[]','',$name), 'class' => 'form-control','maxlength' => '8']) !!}
                @endif
            @else
                {{ Form::text($name, $value, array_merge(['id' => str_replace('[]','',$name), 'class' => 'form-control'], $attributes)) }}
            @endif
        @else
            {{ Form::text($name, $value, ['id' => str_replace('[]','',$name), 'class' => 'form-control']) }}
        @endif
    </div>
        @if ($errors->has($name))
            <span id="{{$name}}-error" class="help-block help-block-error">{{ $errors->first($name) }}</span>

        @endif

</div>