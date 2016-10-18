<?php
if(!isset($attributes)) {
    $attributes['class'] = 'form-control';
}
if (!isset($data)) {
  $data = null;
}
?>
<style>
    #imgInp {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}

#imgInp + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: #FF3C3C;
    display: inline-block;
    padding: 10px;
}

#imgInp:focus + label,
#imgInp + label:hover {
    background-color: #FF5252;
}
#imgInp + label {
    cursor: pointer; /* "hand" cursor */
}
</style>
<div class="form-group col-md-12 {{ $errors->has($key) ? ' has-error' : '' }}">
    {!! Form::label($key, $label, ['style' =>'display:block']) !!}
    {!! Form::file($key, ['id' => 'imgInp', 'onchange' => 'readURL(this);' ]) !!}

    <label for="imgInp"><i class="glyphicon glyphicon-cloud-upload"> </i> Subir</label>
    @if($data)
        <img src="{{ asset('storage/'. $folder . '/medium/' . $data) }}" alt="" id="blah" style="display:block; max-height:250px">
    @endif
        <img src="" alt="" id="blah" style="display:block; max-height:250px">
        
    @if ($errors->has($key))
        <span class="help-block">
                <strong>{{ $errors->first($key) }}</strong>
            </span>
    @endif
</div>

<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>