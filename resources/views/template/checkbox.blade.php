<?php
if(!isset($attributes)) {
    $attributes = ['class' => 'form-control'];

    $attributes = [];
}
?>
<div class="form-group col-md-12 {{ $errors->has($key) ? ' has-error' : '' }}">

    <div class="checkbox icheck">
        <label>
            {!! Form::checkbox($key,1,null,$attributes) !!} {!! $label !!}
        </label>
    </div>
    @if ($errors->has($key))
        <span class="help-block">
                <strong>{{ $errors->first($key) }}</strong>
            </span>
    @endif
</div>