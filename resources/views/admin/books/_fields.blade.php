<?php
if (!isset($book)) {
  $book = null;
}
?>
@include('template.file',['key' => 'avatar','label' => 'Imagen', 'data' => $book ? $book->avatar :null, 'folder' => $book ? 'book/' . $book->id : null])
@include('template.text',['key' => 'title','label' => 'Nombre', 'data' => $book ? $book->title : null])
@include('template.text',['key' => 'isbn','label' => 'ISBN', 'data' => $book ? $book->isbn : null])
@include('template.text',['key' => 'price','label' => 'Precio', 'data' => $book ? $book->price : null])
@include('template.number',['key' => 'number_page','label' => 'Numero de Paginas', 'data' => $book ? $book->number_page : null])
@include('template.text',['key' => 'year_publication','label' => 'Año de Publicación', 'data' => $book ? $book->year_publication : null])
@include('template.text',['key' => 'edition','label' => 'Edición', 'data' => $book ? $book->edition : null])
@include('template.textarea',['key' => 'observations','label' => 'Observaciones', 'data' => $book ? $book->observations : null])
@include('template.select2',['key' => 'authors','label' => 'Autores', 'options' => App\Models\Author::all()])
<link rel="stylesheet" href="{{ url('plugins/select2/select2.min.css') }}">
<script src="{{ url('plugins/select2/select2.full.min.js') }}"></script>
<script>
  $(function () {
      //Initialize Select2 Elements

      $('.select2').select2().val({!! $book->authors()->getRelatedIds() !!}).trigger('change');
    });
</script>