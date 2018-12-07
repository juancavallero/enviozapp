<div class="form-group {{ $errors->has($name) ? ' has-error' : 'has-success' }}">

    @if (isset($label))
        {{ Form::label($label, null, ['class' => 'control-label']) }}
    @else
        {{ Form::label($name, null, ['class' => 'control-label']) }}
    @endif

    <div class="input-group input-medium date date-picker" data-date-format="dd/mm/yyyy"
         data-date-container=".page-content" {{count($attributes)>0 ? App\GlobalHelper::array_to_attributes ($attributes) : ''}}>
        @if (count($attributes)>0)
            {{ Form::text($name, $value, array_merge(['id' => str_replace('[]','',$name), 'readonly'=>'readonly','class' => 'form-control input-md'], $attributes)) }}
        @else
            {{ Form::text($name, $value, ['id' => str_replace('[]','',$name), 'readonly'=>'readonly', 'class' => 'form-control input-md']) }}
        @endif
        <span class="input-group-btn">
            <button class="btn default" type="button">
                <i class="fa fa-calendar"></i>
            </button>
        </span>
    </div>

    @if ($errors->has($name))
        <span id="{{$name}}-error" class="help-block help-block-error">{{ $errors->first($name) }}</span>
    @endif
</div>

