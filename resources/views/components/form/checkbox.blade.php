<div class="form-group {{ $errors->has($name) ? ' has-error' : 'has-success' }}">
    @if (isset($label))
        {{ Form::label($name, $label, ['class' => 'control-label']) }}
    @else
        {{ Form::label($name, null, ['class' => 'control-label']) }}
    @endif
    <div class="md-checkbox-inline">
    @foreach($options As $key=>$value)
        <input type="hidden" value="0" name="{{$name}}{{count($options)> 1 ? '[]' : ''}}">
        <div class="md-checkbox">
            @if (isset($attributes))
                <input type="checkbox" class="md-check" id="{{$name.$key}}" name="{{$name}}{{count($options)> 1 ? '[]' : ''}}" data-field="{{$field}}" value="{{$key}}" {{$checked ? "checked" : ""}} {{implode($attributes)}} >
            @else
                <input type="checkbox" class="md-check" id="{{$name.$key}}" name="{{$name}}{{count($options)> 1 ? '[]' : ''}}" data-field="{{$field}}" value="{{$key}}" {{$checked ? "checked" : ""}}>
            @endif
            <label for="{{$name.$key}}">
                <span></span>
                <span class="check"></span>
                <span class="box"></span> {{$value}}</label>
        </div>
    @endforeach
    </div>
</div>