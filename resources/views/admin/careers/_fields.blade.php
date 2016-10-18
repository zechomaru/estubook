@include('template.select',['key' => 'academy_id','label' => 'Academia', 'options' => App\Models\Academy::pluck('name','id'), 'attributes' => 'Selecione'])

@include('template.select',['key' => 'modality_id','label' => 'Modalidad', 'options' => App\Models\Modality::pluck('name','id'), 'attributes' => 'Selecione'])

@include('template.text',['key' => 'name','label' => 'Nombre'])

@include('template.text',['key' => 'description','label' => 'Descripción'])
