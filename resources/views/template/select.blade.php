<?php
if (!isset($data)) {
  $data = null;
}
?>
<div class="form-group col-md-12 {{ $errors->has($key) ? ' has-error' : '' }}">
    {!! Form::label($key, $label) !!}
    <select class="form-control"  style="width: 100%;" name="{{ $key }}" id="{{ $key }}">
        <option>Seleccione</option>
        @foreach($options as $key => $value)
            @if($data && $data == $key)
                <option value="{{  $key }}" selected>{{ $value }}</option>
                @continue
            @endif
                <option value="{{  $key }}">{{ $value }}</option>
        @endforeach


    </select>
    @if ($errors->has($key))
        <span class="help-block">
                <strong>{{ $errors->first($key) }}</strong>
            </span>
    @endif
</div>
