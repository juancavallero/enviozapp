<div class="form-group {{ $errors->has($name) ? ' has-error' : 'has-success' }}">
    @if (isset($label))
        {{ Form::label($label, null, ['class' => 'control-label']) }}
    @else
        {{ Form::label($name, null, ['class' => 'control-label']) }}
    @endif
    @if (isset($attributes))
    <select multiple="multiple" class="multi-select" id="{{$name}}" name="{{$name}}[]" {{implode($attributes)}}>
    @else
    <select multiple="multiple" class="multi-select" id="{{$name}}" name="{{$name}}[]">
    @endif
        @foreach($options As $value=>$text)
            {{$isselected=""}}
            @if (old($name))
                @if (in_array($value, old($name)))
                    {{$isselected="selected"}}
                @endif
            @else
                @if (isset($selected))
                    @if (array_key_exists($value,$selected))
                        {{$isselected="selected"}}
                    @endif
                @endif
            @endif
            <option value="{{$value}}" {{$isselected}}>{{$text}}</option>
        @endforeach
    </select>
        @if ($errors->has($name))
                <span id="{{$name}}-error" class="help-block help-block-error">{{ $errors->first($name) }}</span>
        @endif
</div>



