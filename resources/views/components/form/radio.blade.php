<div class="md-radio-inline">
    @foreach($options as $value=> $text)
    <div class="md-radio">
        <input type="radio" value="{{$value}}" id="{{$name.$value}}"  name="{{$name}}{{count($options)> 1 ? '[]' : ''}}"  class="md-radiobtn" {{$checked==$value ? "checked" : ""}} {{implode($attributes)}} >
        <label for="{{$name.$value}}">
            <span></span>
            <span class="check"></span>
            <span class="box"></span> {{$text}} </label>
    </div>
    @endforeach
</div>
