<div class="form-group col-md-12 {{ $errors->has($key) ? ' has-error' : '' }}">
    {!! Form::label($key, $label) !!}
    <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="" style="width: 100%;" tabindex="-1" aria-hidden="true" name="{{ $key }}[]" id="{{ $key }}">
        <option></option>
        <?php 
            for ($i=0; $i <  count($options); $i++) {
                echo '<option value="'. $options[$i]->id .'">' . $options[$i]->name . ' ' . $options[$i]->lastname . '</option>';
            }
         ?>
    </select>

    @if ($errors->has($key))
    <span class="help-block">
        <strong>{{ $errors->first($key) }}</strong>
    </span>
    @endif
</div>
