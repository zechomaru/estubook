<?php
if(!isset($attributes)) {
    $attributes['class'] = 'form-control';
}
if (!isset($data)) {
  $data = null;
}
?>
<div class="form-group col-md-12 {{ $errors->has($key) ? ' has-error' : '' }}">
    <label for="{{  $key }}">{{ $label }}</label>
    <input type="text" name="{{ $key }}" class="form-control" value="{{$data}}">
    @if ($errors->has($key))
        <span class="help-block">
                <strong>{{ $errors->first($key) }}</strong>
            </span>
    @endif
</div>