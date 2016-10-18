@include('template.text',['key' => 'name','label' => 'Nombre'])
@include('template.text',['key' => 'lastname','label' => 'Apellido'])

@include('template.datetime', ['key' => 'birthdate', 'label' => 'Fecha de nacimiento'])



<script src="{{ url('plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ url('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ url('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script>
  
  $(function () {

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("yyyy-mm-dd", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();


    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });


  });

</script>
