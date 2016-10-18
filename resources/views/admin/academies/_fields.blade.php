<?php
if (!isset($academy)) {
  $academy = null;
}
?>
@include('template.select',['key' => 'type_academy_id','label' => 'Tipo de Academia', 'options' => App\Models\TypeAcademy::pluck('name','id'), 'data' => $academy ? $academy->type_academy_id : 'Selecione'])
@include('template.file',['key' => 'avatar','label' => 'Imagen', 'data' => $academy ? $academy->avatar : null, 'folder' => $academy ? 'academy/' . $academy->id : null])
@include('template.text',['key' => 'name','label' => 'Nombre', 'data' => $academy ? $academy->name : null])
@include('template.text',['key' => 'description','label' => 'Descripción' , 'data' => $academy ? $academy->description : null])
@include('template.text',['key' => 'direction','label' => 'Dirección', 'data' => $academy ? $academy->direction : null])
@include('template.text',['key' => 'zip_code','label' => 'Codigo Postal', 'data' => $academy ? $academy->zip_code : null])
@include('template.text',['key' => 'phone','label' => 'Telefono', 'data' => $academy ? $academy->phone : null])

