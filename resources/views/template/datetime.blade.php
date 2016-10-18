<?php
if (!isset($attributes) || true) {
    $attributes['class'] =  'form-control';
    $attributes ['data-provide']= 'datepicker-inline';
    $attributes ['data-date-format']= 'd-m-yyyy';
}
?>
<div class="form-group date col-md-12 {{ $errors->has($key) ? ' has-error' : '' }}">
    <div class="form-group">
        <label>{{$label}}</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input id="datemask" type="text" name="{{$key}}" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
        </div>
        <!-- /.input group -->
      </div>
    </div>

    @if ($errors->has($key))
    <span class="help-block">
        <strong>{{ $errors->first($key) }}</strong>
    </span>
    @endif
</div>
